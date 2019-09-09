<?php
declare(strict_type = 1);
require 'utility.php';
require 'LoggingService.php';

class LoadModulesResources {
	public $JResObject    = NULL;
	public $JNavObject    = NULL;
	public $ModuleID      = NULL;
	public $userNavAccess = array();
	/***@var array available modules routes */
	public $AvailableRoutes = array();
	private $resourceFile   = "module-resources.json";
	private $navigationFile = "navigation-access.json";
	private $FilePath       = "";
	/**
	 * LoadModulesResources constructor.
	 *
	 * @throws Exception
	 */
	public function __construct() {
		try {
			$this->loadFile();
		} catch (Exception $e) {
			$e->getMessage();
			$e->getFile();
		}
	}
}