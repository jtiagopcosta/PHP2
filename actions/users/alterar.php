<?php
  include_once('../../common/init.php');
  include_once($BASE_DIR .'/database/users.php');  

  $username = strip_tags($_POST['username']);

  try {
    alterarNome($username);
  } catch (PDOException $e) {
    $_SESSION['error_messages'][] = 'Error creating user: ' . $e->getMessage();
    $_SESSION['form_values'] = $_POST;
    header('Location: ' . $_SERVER['HTTP_REFERER']);;
    exit;
  }

  $_SESSION['success_messages'][] = 'Change successfully';  
  header("Location: $BASE_URL");
  
  
  
?>