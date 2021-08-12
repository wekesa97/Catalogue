<?php
//start Session
session_start();
//config File
require_once 'config.php';
//Include Helpers
require_once 'helpers/system_helper.php';

//Autoloader
function __autoload($class_name){
	//File Name should match your class name
	require_once 'lib/'.$class_name. '.php';
}

