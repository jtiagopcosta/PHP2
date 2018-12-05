<?php

  function createUser($username, $realname, $password) {
    global $conn;
    $stmt = $conn->prepare("INSERT INTO users VALUES (DEFAULT, ?, ?, ?)");
    $stmt->execute(array($username, $realname, sha1($password)));
  }

?>