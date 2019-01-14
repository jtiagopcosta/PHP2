<?php
  require_once('../../common/init.php');
  include_once($BASE_DIR .'/database/users.php');  

  $username = strip_tags($_POST['username']);
  $usernameold = $_SESSION['username'];

  try {
    alterarNome($username, $usernameold);
  } catch (PDOException $e) {
    $_SESSION['error_messages'][] = 'Error creating user: ' . $e->getMessage();
    $_SESSION['form_values'] = $_POST;
    header('Location: ' . $_SERVER['HTTP_REFERER']);;
    exit;
  }

  $_SESSION['success_messages'][] = 'Favor, fazer login novamente para que as alterações sejam feitas !';  
  header("Location: $BASE_URL");
  exit;
  
  
  
?>