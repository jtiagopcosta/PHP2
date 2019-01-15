<?php

  function createfilmes($nome, $genero, $elenco, $autor, $descricao, $nacionalidade, $path) {
    global $conn;
    $stmt = $conn->prepare("INSERT INTO filmes VALUES (DEFAULT, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->execute(array($nome, $genero, $elenco, $autor, $descricao, $nacionalidade, $path));
    
  }
