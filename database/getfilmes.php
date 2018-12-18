<?php
  function getfilmes() {
    global $conn;
    $stmt = $conn->prepare('SELECT * FROM filmes  
                            ORDER BY id DESC');
    $stmt->execute();
    return $stmt->fetchAll();
  }

  function getfilmebyid($idfilme) {
    global $conn;
    $stmt = $conn->prepare('SELECT * FROM filmes  
                            WHERE id=?');
    $stmt->execute(array($idfilme));
    return $stmt->fetchAll();
  }

?>
