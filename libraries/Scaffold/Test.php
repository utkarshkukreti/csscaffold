<?php

/**
 * Scaffold_Test
 *
 * Extends the simpletest library to make it more custom for Scaffold. Modules
 * and other bits should be able to create unit tests from the class.
 * 
 * @author Anthony Short
 * @package Scaffold
 */
class Scaffold_Test extends UnitTestCase
{
	/**
	 * The directory of the test class
	 *
	 * @var string
	 */
	public $dir;
	
	/**
	 * Setups up the paths for the test
	 *
	 * @author your name
	 * @param $param
	 * @return return type
	 */
	public function init($base)
	{
		$this->dir = dirname($base) . '/';
	}

	/**
	 * Finds a file inside the class folder
	 *
	 * @author your name
	 * @param $file
	 * @return string
	 */
	public function find($file)
	{
		return realpath($this->dir.$file);
	}
	
	/**
	 * Loads all the configuration options into the member var. Running
	 * this will override whatever is in the config var at the moment.
	 *
	 * @author your name
	 * @param $param
	 * @return return type
	 */
	public function config()
	{
		$config['document_root'] 		= '';
		$config['system']  				= realpath('../scaffold/') . '/';
		$config['cache']   				= $config['system'] . 'cache/';
		$config['images'] 				= 'images';
		$config['assets'] 				= 'assets';
		$config['cache_lifetime'] 		= 3600;
		$config['enable_log'] 			= true;
		$config['error_threshold'] 		= 1;
		$config['gzip_compression'] 	= false;
		
		$this->config = $config;
	}
}