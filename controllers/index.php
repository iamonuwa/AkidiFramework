<?php

/**
 * Description of index
 *
 * @author Onuwa Nnachi Isaac <i_onuwa4u@outlook.com>
 */
class index extends BaseController{
    function __construct() {
        parent::__construct();
      }
      public function index(){
          $this->_view->pageTitle = "Site Index";
          $this->_view->content = 'views/index/index.php';
          $this->_view->render(DEFAULT_TEMPLATE);
      }
}
