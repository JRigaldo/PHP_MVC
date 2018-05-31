<?php
namespace application\menus;

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class ModelMenus {
    
    public function main_menu_datas(){
        $menus = [
                [ 'url'=>SITE_URL,                      'title'=>'Accueil' ],
                [ 'url'=>SITE_URL . '/contact',         'title'=>'Contact' ],
                [ 'url'=>SITE_URL . '/articles/form',   'title'=>'Ajouter' ],
                [ 'url'=>SITE_URL . '/articles/ajax',         'title'=>'Ajax' ],
            ];
        
        return $menus;
        
    }
    
}


?>
