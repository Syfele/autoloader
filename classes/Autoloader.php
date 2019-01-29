<?php

class Autoloader {

	/**
	 * @var string
	 * File extension to autoload
	 */
	protected static $fileExt = ".php";

	/**
	 * Autoloading with namespaces
	 * Organizing our classes in sub-directories
	 */
	public static function loader($className) {
		Autoloader::loaderFunction($className);
	}

	/**
	 * @param $className
	 *
	 * @return bool
	 *
	 * Using \ like directory seperator to avoid OS maladjustment
	 * Include once current className with absolute path
	 */
	public static function loaderFunction($className) : bool {
		$className = str_replace("\\",DIRECTORY_SEPARATOR, $className);
		$path = $_SERVER['DOCUMENT_ROOT'] . '/' . $className . Autoloader::$fileExt;
		include_once $path;
		return TRUE;
	}

	/**
	 * @param $fileExt
	 * set file extension to load
	 */
	public static function setFileExt($fileExt) {
		static::$fileExt = $fileExt;
	}
}

/**
 * set PHP as extension
 */
Autoloader::setFileExt('.php');
/**
 * Autoload our autoloader
 */
spl_autoload_register('Autoloader::loader');