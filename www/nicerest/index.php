<?php
// path to bootstrap and Boot

$pathToBootstrap = dirname(dirname(dirname(__FILE__))) .
	DIRECTORY_SEPARATOR . 'src' .
	DIRECTORY_SEPARATOR . 'com' .
	DIRECTORY_SEPARATOR . 'uvwebs' .
	DIRECTORY_SEPARATOR . 'nicerest' .
	DIRECTORY_SEPARATOR . 'bootstrap.php';

require_once $pathToBootstrap;

$redirectUrl = isset($_SERVER['REDIRECT_URL']) ? $_SERVER['REDIRECT_URL'] : null;

$className = str_replace('/', '_', strtolower(substr($redirectUrl, 1)));
$classFilepath = dirname(dirname(__FILE__)) . strtolower($redirectUrl) . '.php';

if(file_exists($classFilepath) && class_exists($className, true))
{
  nicerest_lib_ActionFactory::createAction($className);
}
else
{
	//TODO add forward to 404
	echo 'NOT FOUND';
	header("HTTP/1.0 404 Not Found");
}

