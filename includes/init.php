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
include SITE_PATH .'/application/'. Bootstrap::get_page() . '/Controller.php';

$ctrl = new Controller(Bootstrap::get_action(), Bootstrap::get_router());

$view = $ctrl->get_view();
$datas = $ctrl->get_datas();


//echo '<pre>', var_dump($datas), '</pre>';

include SITE_PATH . '/view/page.php';

?>