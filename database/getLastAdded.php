<?php
  function getLastAdded() {
    global $conn;
    $stmt = $conn->prepare('SELECT * FROM filmes  ORDER BY id DESC LIMIT 10');
    $stmt->execute();
    return $stmt->fetchAll();
  }
?>
