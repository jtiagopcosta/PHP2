<?php
  include_once('../../common/init.php');
  include_once($BASE_DIR .'/database/users.php'); 
  
   $username = $_POST['username'];
   $password = $_POST['password'];
   $user = '0';
   $admin = '1';

  if (isLoginAdmin($username, $password, $admin)) {
    $_SESSION['username'] = $username;
    $_SESSION['success_messages'][] = 'Tenha um Bom dia !';  
    $_SESSION['administrador'] = $admin; 
    
  }
  else if (isLoginUser($username, $password, $user)) {
    $_SESSION['username'] = $username;
    $_SESSION['success_messages'][] = 'Bem Vindo!';  
  }
   else {
    $_SESSION['error_messages'][] = 'Ops, ocorreu um erro no login, favor tentar novamente!';  
  }
  header('Location: ' . $_SERVER['HTTP_REFERER']);
?>