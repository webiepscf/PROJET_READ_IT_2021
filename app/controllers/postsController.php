<?php 
/*
    ./app/controllers/postsController.php
 */

 function indexAction(PDO $conn) {
    // 1. Je demande la liste des posts au modèle et je la mets dans $posts
    include_once '../app/models/postsModel.php';
    $posts = findAll($conn);

    // 2. Je charge la vue index dans $content
    GLOBAL $content;
    ob_start();
        include '../app/views/posts/index.php';
    $content = ob_get_clean();
 }