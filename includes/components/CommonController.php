<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class CommonController{
    protected $_action;
    protected $_view;
    protected $_datas = array();
    protected $_router;
    
    
    public function __construct($actionUrl, $routerUrl){
        $this->_action = $actionUrl;
        
        $this->_router = $routerUrl;
        
        $this->_process();
    }
    public function get_view(){
        return $this->_view;
    }
      
    public function get_datas(){
        return $this->_datas;
    }
}