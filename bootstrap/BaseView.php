<?php

/**
 * Description of BaseView
 *
 * @author Onuwa Nnachi Isaac <i_onuwa4u@outlook.com>
 */
class BaseView {

    function __construct() {
    }
    public function render($layout){
        require 'web/'.$layout.'layout.php';
        //require 'views/'.$page.'.php';
    }
    
    }
