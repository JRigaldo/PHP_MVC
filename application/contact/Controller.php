<?php

namespace application\contact;

use includes\components\CommonController;
use application\contact\ModelContact;

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
                  $this->_view = 'contact/contact_sent.php';
                break;
              default :
                  $this->_view = 'contact/contact.php';
                  break;
          }
      }
  } 
