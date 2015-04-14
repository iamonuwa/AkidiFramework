<?php

/**
 * Description of BOOTSTRAP
 *
 * @author Onuwa Nnachi Isaac <i_onuwa4u@outlook.com>
 * @copyright (c) 2015, Onuwa Nnachi Isaac
 */
class Bootstrap {
    
    function __construct() {
                    /* @var $_GET type */
                    $url = isset($_GET['url']) ? $_GET['url'] : NULL;
                    $url = rtrim($url, '/');
                    $url = filter_var($url, FILTER_SANITIZE_URL);
                    $url = explode('/', $url);

                    //print_r($url);
                    
                    if(empty($url[0])){
                        require 'controllers/index.php';
                        $controller = new index();
                        $controller->index();
                        return FALSE;
                    }

                    $file = 'controllers/'.$url[0].'.php';
                    if(file_exists($file)){
                    require $file;
                    }else{
                        require 'controllers/error.php';
                        $controller = new Error();
                        return FALSE;
                    }
                    $controller = new $url[0];
                    $controller->modelLoader($url[0]);

                    if (isset($url[2])) {
			if (method_exists($controller, $url[1])) {
				$controller->{$url[1]}($url[2]);
			} else {
				$this->error();
			}
		} else {
			if (isset($url[1])) {
				if (method_exists($controller, $url[1])) {
					$controller->{$url[1]}();
				} else {
					$this->error();
				}
			} else {
				$controller->index();
			}
		}

                    }
                public function error() {
		require 'controllers/error.php';
		$controller = new Error();
		$controller->index();
		return false;
	}


}