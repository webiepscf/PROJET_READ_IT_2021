<?php 
/*
    ./app/controllers/postsController.php
 */

 /**
  * Undocumented function
  *
  * @param PDO $conn
  * @return void
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

 function showAction (PDO $conn, int $id) {
    // 1. Je demande le post au modèle et je le mets dans $post
    include_once '../app/models/postsModel.php';
    $post = findOneById($conn, $id);

    // 1.bis Je demande la liste des tags de ce post au modèle
    // Et je les mets dans $tags
    include_once '../app/models/tagsModel.php';
    $tags = findAllByPostId($conn, $id);


    // 2. Je charge la vue posts/show dans $content
    GLOBAL $content;
    ob_start();
        include '../app/views/posts/show.php';
    $content = ob_get_clean();
 }