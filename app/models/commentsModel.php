<?php 
/*
    ./app/models/commentsModel.php
 */
namespace App\Models\CommentsModel;

/**
 * Liste des commentaires d'un post selon son id
 *
 * @param \PDO $conn
 * @param integer $id
 * @return array
 */
function findAllByPostId(\PDO $conn, int $id) :array {
  $sql = "SELECT * 
          FROM comments
          WHERE post_id = :id
          ORDER BY created_at DESC;";
  $rs = $conn->prepare($sql);
  $rs->bindValue(':id', $id, \PDO::PARAM_INT);
  $rs->execute();
  return $rs->fetchAll(\PDO::FETCH_ASSOC);
  
}