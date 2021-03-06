<?php


/*
 *---------------------------------------------------------------
 * APPLICATION ENVIRONMENT
 *---------------------------------------------------------------
 *
 * You can load different configurations depending on your
 * current environment. Setting the environment also influences
 * things like logging and error reporting.
 *
 * This can be set to anything, but default usage is:
 *
 *     development
 *     production
 *
 * NOTE: If you change these, also change the error_reporting() code below
 *
 */
	define('ENVIRONMENT', 'development');
/*
 *---------------------------------------------------------------
 * ERROR REPORTING
 *---------------------------------------------------------------
 *
 * Different environments will require different levels of error reporting.
 * By default development will show errors but production will hide them.
 */

if (defined('ENVIRONMENT')){

	switch (ENVIRONMENT){
		case 'development':
			error_reporting(E_ALL);
		break;

		case 'production':
			error_reporting(0);
		break;

		default:
			exit('The application environment is not set correctly.');
	}

}
       
/**
 * Framework Constant Definitions
 */
define('URL_PATH', 'http://localhost/akidiFramework/');
define('SERVER_TYPE', '');
define('SERVER_HOST','');
define('SERVER_USER', '');
define('SERVER_PASSWORD', '');
define('DATABASE_NAME', '');
define('DEFAULT_TEMPLATE', 'default/');
define('SITETITLE', 'Akidi Framework');




/**
 * This AutoLoad Function is for my Base Classes
 */

spl_autoload_register(function($class){

    require 'bootstrap/'.$class.'.php';
});

$app = new Bootstrap();

        
