<?php
namespace application\menus;
use \includes\components\CommonController;
use application\menus\ModelMenus;

include SITE_PATH . '/application/menus/ModelMenus.php';

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Controller extends CommonController{
    
    protected function _process(){
        switch ($this->_action){
            case 'social':
                $this->_view = 'menus/social_menu.php';
                break;
            default:
                
                $model = new ModelMenus();
                
                $this->_datas = $model->main_menu_datas();
                
                $this->_view = 'menus/main_menu.php';
                break;
                
        }
    }
    
}
