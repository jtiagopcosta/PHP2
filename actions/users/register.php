<?php
  include_once('../../common/init.php');
  include_once($BASE_DIR .'/database/users.php');  

  $realname = strip_tags($_POST['realname']);
  $username = strip_tags($_POST['username']);
  $password = $_POST['password'];

  createUser($username, $realname, $password);

  $_SESSION['success_messages'][] = 'User registered successfully';  
  header("Location: $BASE_URL");
  
  header('Location: ' . $_SERVER['HTTP_REFERER']);
?>