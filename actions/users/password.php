<?php
  require_once('../../common/init.php');
  include_once($BASE_DIR .'/database/users.php');  

  $password = strip_tags($_POST['password']);
  $Npass = sha1($password);
  $username = $_SESSION['username'];

  try {
    alterarSenha($Npass,$username);
  } catch (PDOException $e) {
    $_SESSION['error_messages'][] = 'Error changing password: ' . $e->getMessage();
    $_SESSION['form_values'] = $_POST;
    header('Location: ' . $_SERVER['HTTP_REFERER']);;
    exit;
  }

  $_SESSION['success_messages'][] = 'Favor, fazer login novamente para que as alterações sejam feitas !';  
  header("Location: $BASE_URL");
  exit;
  
  
  
?>