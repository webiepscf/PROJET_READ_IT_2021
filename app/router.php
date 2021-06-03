<?php 
/*
    ./app/router.php
 */
use \App\Controllers\PostsController;


 // ROUTE DU DÉTAIL D'UN POST
 // PATTERN: /?postID=x
 // CTRL: postsController
 // ACTION: show
 if (isset($_GET['postID'])):
    include_once '../app/controllers/postsController.php';
    PostsController\showAction($conn, $_GET['postID']);

 // ROUTE PAR DÉFAUT: liste des 10 derniers posts 
 // PATTERN: /
 // CTRL: postsController
 // ACTION: index
 else:
    include_once '../app/controllers/postsController.php';
    PostsController\indexAction($conn);
 endif;