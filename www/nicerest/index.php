<?php
// path to bootstrap and Boot

$pathToBootstrap = dirname(dirname(dirname(__FILE__))) .
	DIRECTORY_SEPARATOR . 'src' .
	DIRECTORY_SEPARATOR . 'com' .
	DIRECTORY_SEPARATOR . 'uvwebs' .
	DIRECTORY_SEPARATOR . 'nicerest' .
	DIRECTORY_SEPARATOR . 'bootstrap.php';

require_once $pathToBootstrap;

$className = strtolower(substr($_SERVER['REDIRECT_URL'], 1));
$className = str_replace('/', '_', $className);

$classFilepath = strtolower($_SERVER['REDIRECT_URL']);
$classFilepath = dirname(dirname(__FILE__)) . $classFilepath . '.php';

if(file_exists($classFilepath) && class_exists($className, true))
{
  lib_ActionFactory::createAction($className);
}
else
{
	//TODO add forward to 404
	echo 'NOT FOUND';
	header("HTTP/1.0 404 Not Found");
}

