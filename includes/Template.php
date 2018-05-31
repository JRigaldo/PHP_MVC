<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Template{
    
    public static function page(){
      self::_render('page.php');
    }

    private static function _includeModule($page, $action, $router){
        include_once SITE_PATH .'/application/'. $page . '/Controller.php';
        
        /*  namespace */
        $ctrl_path = 'application\\' . $page .'\\Controller';

        $ctrl = new $ctrl_path($action, $router);

        $view = $ctrl->get_view();
        $datas = $ctrl->get_datas();
        
        self::_render($view, $datas);
    }

    private static function _render($view, $datas = []){
        include SITE_PATH . '/view/' . $view;
    }
}