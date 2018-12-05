<?php
  include_once('../../common/init.php');

  $smarty->display('users/register.tpl');
?>

<?php
  include_once('../../common/init.php');
  include_once($BASE_DIR .'/database/users.php');  

  $username = $_POST['username'];
  $password = $_POST['password'];

  if (!$_POST['username'] || !$_POST['password']) {
    $_SESSION['error_messages'][] = 'Invalid login';
    $_SESSION['form_values'] = $_POST;
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit;
  }