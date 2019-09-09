<?php
use refence;
/**
 * Class for logging service.
 */
include 'localReferences.php';

class LoggingService {

	public static function loginfo(string $statement, string $functionName):void {
		if (empty(trim($statment))) {
			return;
		}
		$functionName = empty($functionName)?PHP_EOL:'  function:'.$functionName.PHP_EOL;
		$statement    = "[ log.Info ]".$functionName." ".$statement." ";
		self::log($statement.PHP_EOL);
	}
	/** this responsible for actually writting the file to the file */
	private static function log(string $string):void {
		if (!file_exists(refence::DBLOGS_FOLDER)) {
			if (!mkdir($concurrentDirectory = refence::DBLOGS_FOLDER, 0777) && !is_dir($concurrentDirectory)) {
				throw new Exception(sprintf("Error in creating %s folder Request", $concurrentDirectory));
			}
			if (!file_exists(refence::DBLOGS_FILE)) {
				touch(refence::DBLOGS_FILE);
				chmod(refence::DBLOGS_FILE, 0777);
				$f = fopen(refence::DBLOGS_FILE, 'w+');
				fclose($f);
			}
			$string = "(".date('Y-m-d H:i:s')." ) ".$string;
			$style  = strlen($string);
			$isEven = $style%2 == 0;
			$line   = '';
			/**This is to make the last line ---||-- */
			for ($i = 0; $i < ($style*.8); $i++) {
				if ($isEven) {
					/** @var int $style */
					$line = $i == floor($style*.3)?$line.'||':$line.'-';
				} else {
					$line = ($i+1) == floor($style*.3)?$line.'||':$line.'-';
				}

			}
			$string  = $string.$line.PHP_EOL;
			$handler = fopen(refence::LOG_FILE, 'a');
			fwrite($handler, $string);
			fclose($handler);
		}
	}
}
