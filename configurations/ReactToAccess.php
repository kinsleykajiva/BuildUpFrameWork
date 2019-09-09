<?php

    interface ReactToAccess {
        function rejectPageAccess():void;
        function sessionTimeOutReaction(string $lastFilePath):void;
    }