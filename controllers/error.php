<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of error
 *
 * @author Onuwa Nnachi Isaac <i_onuwa4u@outlook.com>
 */
class Error extends BaseController{

    function __construct() {
        parent::__construct();
        $this->_view->msg = "Page not Found";
        $this->_view->render(DEFAULT_TEMPLATE);
    }

}