<?php

require_once 'interfaces/OperatorInterface.php';

spl_autoload_register(function($className) {
    require_once "classes/$className.php";
});