<?php
  include_once('../../common/init.php');
  include_once($BASE_DIR .'/database/users.php'); 
  
   $username = $_POST['username'];
   $password = $_POST['password'];

  if (isLoginCorrect($username, $password)) {
    $_SESSION['username'] = $username;
    $_SESSION['success_messages'][] = 'Bem Vindo!';  
  } else {
    $_SESSION['error_messages'][] = 'Ops, ocorreu um erro no login, favor tentar novamente!';  
  }
  header('Location: ' . $_SERVER['HTTP_REFERER']);
?>