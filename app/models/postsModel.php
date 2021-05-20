<?php 
/*
    ./app/models/postsModel.php
 */

 /**
  * Liste des 10 derniers posts
  *
  * @param PDO $conn
  * @return array
  */
 function findAll(PDO $conn) :array {
    $sql = "SELECT * 
            FROM posts
            ORDER BY created_at DESC 
            LIMIT 10;";

    $rs = $conn->query($sql);
    return $rs->fetchAll(PDO::FETCH_ASSOC);
 }