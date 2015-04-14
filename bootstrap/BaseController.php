<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BaseController
 *
 * @author Onuwa Nnachi Isaac <i_onuwa4u@outlook.com>
 */
class BaseController {

    function __construct() {
        $this->_view = new BaseView();
    }

}