<?php

  function createUser($username, $realname, $password, $tipo) {
    global $conn;
    $stmt = $conn->prepare("INSERT INTO users VALUES (DEFAULT, ?, ?, ?, ?)");
    $stmt->execute(array($username, $realname, sha1($password), $tipo));
  }

  function isLoginAdmin($username, $password, $admin) {
    global $conn;
    $stmt = $conn->prepare("SELECT *
                            FROM users
                            WHERE username = ? AND password = ? AND tipo = ?");
    $stmt->execute(array($username, sha1($password), $admin));
    return $stmt->fetch() == true;
  }

  function isLoginUser($username, $password, $user) {
    global $conn;
    $stmt = $conn->prepare("SELECT *
                            FROM users
                            WHERE username = ? AND password = ? AND tipo = ?");
    $stmt->execute(array($username, sha1($password), $user));
    return $stmt->fetch() == true;
  }

?>