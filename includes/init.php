<?php 

/* Gestion de l'url (page, action, router) */
include SITE_PATH . '/includes/Bootstrap.php';
Bootstrap::url();


/* Connexion base de données */
include SITE_PATH . '/includes/Db.php';

/* Session */
session_start();


/* Load common Classes */
include SITE_PATH . '/includes/components/CommonController.php';

/* Gestion des templates et des controller */
include SITE_PATH . '/includes/Template.php';
Template::page();

//echo '<pre>', var_dump($datas), '</pre>';


?>