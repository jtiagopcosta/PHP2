<?php
  include_once('../../common/init.php');
  include_once($BASE_DIR .'/database/users.php');  

  $realname = strip_tags($_POST['realname']);
  $username = strip_tags($_POST['username']);
  $password = $_POST['password'];

  createUser($username, $realname, $password);

  $_SESSION['success_messages'][] = 'User registered successfully';  
  header("Location: $BASE_URL");

  if (strpos($e->getMessage(), 'users_pkey') !== false) {
    $_SESSION['error_messages'][] = 'Duplicate username';
    $_SESSION['field_errors']['username'] = 'Username already exists';
  }
  else $_SESSION['error_messages'][] = 'Error creating user';
  
  header('Location: ' . $_SERVER['HTTP_REFERER']);
?>