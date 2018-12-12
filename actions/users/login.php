<?php
  include_once('../../common/init.php');
  include_once($BASE_DIR .'/database/users.php'); 
  
   $username = $_POST['username'];
   $password = $_POST['password'];

  if (isLoginCorrect($username, $password)) {
    $_SESSION['username'] = $username;
    $_SESSION['error_messages'][] = 'Login successful';  
  } else {
    $_SESSION['error_messages'][] = 'Login failed';  
  }
  header('Location: ' . $_SERVER['HTTP_REFERER']);
?>