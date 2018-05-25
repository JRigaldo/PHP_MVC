<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 * 
 */
class Controller extends CommonController{
      
      protected function _process(){
          switch($this->_action){
              case 'send' :
                break;
              default :
                  $this->_view = 'contact/contact.php';
                  break;
          }
      }
  } 
