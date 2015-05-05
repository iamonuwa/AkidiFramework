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
      
      public function create() 
    {
        $data = array();
        $data['email'] = $_POST['email'];
        $data['ip'] = $_SERVER['HTTP_ADDR'];
        
        
        // @TODO: Do your error checking!
        
        $this->model->create($data);
        header('location: ' . URL_PATH . 'index');
    }
}
