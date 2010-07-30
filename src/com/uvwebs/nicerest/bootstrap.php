<?php
// Initial entrance configuration point
error_reporting(E_ALL | E_STRICT);

set_include_path(
	get_include_path()
	. PATH_SEPARATOR . dirname(__FILE__) . DIRECTORY_SEPARATOR
  	. PATH_SEPARATOR . '/home/g2/project/org/local/php/nicerest/www/nicerest/'
  	. PATH_SEPARATOR . '/home/g2/project/org/local/php/nicerest/www/'
);

require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . 'lib/AutoLoad.class.php';

lib_AutoLoad::getInstance();
lib_ExceptionAndErrorHandler::getInstance();

