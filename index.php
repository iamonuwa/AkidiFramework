<?php
/**
 * Description of INDEX
 * 
 * @author Onuwa Nnachi Isaac <i_onuwa4u@outlook.com>
 * @copyright (c) 2015, Onuwa Nnachi Isaac
 */
/**
 * Framework Constant Definitions
 */
define('URL_PATH', 'http://localhost/akidiFramework/');
define('SERVER','');
define('SERVER_USER', '');
define('SERVER_PASSWORD', '');
define('DEFAULT_TEMPLATE', 'default/');
define('SITETITLE', 'Akidi Framework');




/**
 * This AutoLoad Function is for my Base Classes
 */
spl_autoload_register(function($class){
    require 'bootstrap/'.$class.'.php';
});

/**
 * Instantiating the Base APP
 */

$bootstrap = new Bootstrap();



