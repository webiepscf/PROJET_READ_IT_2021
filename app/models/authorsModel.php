<?php 
/*
    ./app/models/authorsModel.php
 */
namespace App\Models\AuthorsModel;

 /**
  * Retourne l'auteur correspondant à l'id
  *
  * @param PDO $conn
  * @param integer $id
  * @return array
  */
function findOneById(\PDO $conn, int $id) :array {
  $sql = "SELECT * 
          FROM authors 
          WHERE id = :id";

  $rs = $conn->prepare($sql);
  $rs->bindValue(':id', $id, \PDO::PARAM_INT);
  $rs->execute();
  return $rs->fetch(\PDO::FETCH_ASSOC);
}