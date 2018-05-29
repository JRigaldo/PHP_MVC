<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Bootstrap {
    private static $_page;
    private static $_action;
    private static $_router;
    
    public static function url(){
        //var_dump($_GET['page']);
        
        /* Gestion de l'url (page, action, router) */
        $url = (isset ($_GET['page'])) ? explode('/', $_GET['page']) : null;

        /* Montre le tableau de l'url */
        //echo '<pre>', var_dump($url), '</pre>';

        self::$_page    = (isset ($url[0])) ? $url[0] : 'articles';
        self::$_action  = (isset ($url[1])) ? $url[1] : '';
        self::$_router  = (isset ($url[2])) ? $url[2] : '';
        
        if(!file_exists (SITE_PATH . '/application/' . self::$_page . '/Controller.php')){
            header('HTTP/1.0 404 NOT FOUND');
            include SITE_PATH . '/view/404.php';
            exit;
        }

    }
    
    public static function get_page(){
        return self::$_page;
    }
    
    public static function get_action(){
        return self::$_action;
    }
    
    public static function get_router(){
        return self::$_router;
    }

}