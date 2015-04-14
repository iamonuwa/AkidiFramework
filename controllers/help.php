<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of help
 *
 * @author Onuwa Nnachi Isaac <i_onuwa4u@outlook.com>
 */

class Help extends BaseController{

    function __construct() {
        parent::__construct();
        echo 'We are inside the Error Page<br>';
    }

    public function other($arg = false){
        
        require 'models/model'.$help.'.php';
        $model = new Model_Help();
    }
}