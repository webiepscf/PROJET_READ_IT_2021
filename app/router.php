<?php 
/*
    ./app/router.php
 */


 // ROUTE PAR DÉFAUT: liste des 10 derniers posts 
 // PATTERN: /
 // CTRL: postsController
 // ACTION: index
 include_once '../app/controllers/postsController.php';
 indexAction($conn);