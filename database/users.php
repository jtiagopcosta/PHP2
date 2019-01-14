<?php

  function createUser($nome, $username, $email, $password, $nivel) {
    global $conn;
    $stmt = $conn->prepare("INSERT INTO usuarios VALUES (DEFAULT, ?, ?, ?, ?, ?)");
    $stmt->execute(array($nome, $username, $email, sha1($password), $nivel));
  }

  function isLoginAdmin($username, $password, $admin) {
    global $conn;
    $stmt = $conn->prepare("SELECT *
                            FROM usuarios
                            WHERE username = ? AND password = ? AND nivel = ?");
    $stmt->execute(array($username, sha1($password), $admin));
    return $stmt->fetch() == true;
  }

  function isLoginUser($username, $password, $user) {
    global $conn;
    $stmt = $conn->prepare("SELECT *
                            FROM usuarios
                            WHERE username = ? AND password = ? AND nivel = ?");
    $stmt->execute(array($username, sha1($password), $user));
    return $stmt->fetch() == true;
  }

  function alterarNome($username, $usernameold) {
    global $conn;
    $stmt = $conn->prepare("UPDATE usuarios SET username = '".$username."' WHERE username = '".$usernameold."'; " );
    $stmt->execute(); 
    }

    function alterarSenha($username, $usernameold) {
      global $conn;
      $stmt = $conn->prepare("UPDATE usuarios SET username = '".$username."' WHERE username = '".$usernameold."'; " );
      $stmt->execute(); 




?>