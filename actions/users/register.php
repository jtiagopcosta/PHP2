<?php
  include_once('../../common/init.php');
  include_once($BASE_DIR .'/database/users.php');  

  $nome = strip_tags($_POST['realname']);
  $username = strip_tags($_POST['username']);
  $email = $_POST['email'];
  $password = $_POST['password'];
  $nivel = $_POST['nivel'];

  try {
    createUser($nome, $username, $email, $password, $nivel);
  } catch (PDOException $e) {
    $_SESSION['error_messages'][] = 'Error creating user: ' . $e->getMessage();
    $_SESSION['form_values'] = $_POST;
    header('Location: ' . $_SERVER['HTTP_REFERER']);;
    exit;
  }

  $_SESSION['success_messages'][] = 'User registered successfully';  
  header("Location: $BASE_URL");
  
  
  
?>