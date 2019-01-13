<?php
  include_once('../../common/init.php');
  include_once($BASE_DIR .'/database/users.php');  

  $realname = strip_tags($_POST['realname']);
  $username = strip_tags($_POST['username']);
  $password = $_POST['password'];
  $tipo = $_POST['tipo'];

  try {
    createUser($realname, $username, $password, $tipo);
  } catch (PDOException $e) {
    $_SESSION['error_messages'][] = 'Error creating user: ' . $e->getMessage();
    $_SESSION['form_values'] = $_POST;
    header('Location: ' . $_SERVER['HTTP_REFERER']);;
    exit;
  }

  $_SESSION['success_messages'][] = 'User registered successfully';  
  header("Location: $BASE_URL");
  
  
  
?>