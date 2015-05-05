<?php

/**
 * Description of BaseController
 *
 * @author Onuwa Nnachi Isaac <i_onuwa4u@outlook.com>
 */
class BaseController {

    function __construct() {
        $this->_view = new BaseView();
    }
    public function modelLoader($model_name) {
		
		$path = 'models/model_'.$model_name.'.php';
		
		if (file_exists($path)) {
			require 'models/model_'.$model_name.'.php';
			
			$modelName = 'Model_'.$model_name ;
			$this->model = new $modelName();
		}		
	}

}