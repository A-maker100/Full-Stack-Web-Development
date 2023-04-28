<?php
defined('DS')? null : define('DS',DIRECTORY_SEPARATOR);
defined("SITE_ROOT")?null : define("SITE_ROOT","/");
defined("INCLUDES")? null: define("INCLUDES", "/");//all includes files are in the same directory;
defined("CORE_PATH")?null: define("CORE_PATH","/");//all core files in the same directory.

//load the config file for database
require_once("config.php");

?>