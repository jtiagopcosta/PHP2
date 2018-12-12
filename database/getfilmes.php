<?php
  function getfilmes() {
    global $conn;
    $stmt = $conn->prepare('SELECT * FROM filmes  ORDER BY id DESC');
    $stmt->execute();
    return $stmt->fetchAll();
  }
?>
