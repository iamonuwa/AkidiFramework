<?php

/**
 * Description of BaseModel
 *
 * @author Onuwa Nnachi Isaac <i_onuwa4u@outlook.com>
 */

class BaseModel extends BaseController{

    function __construct() {
        $this->Database = new Database();
    }

}