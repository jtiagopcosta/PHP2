<?php
 
  include_once('./../common/init.php');
  include_once($BASE_DIR . '/database/getfilmes.php');
  include_once($BASE_DIR . '/database/getanalises.php');

  
  $idfilme = $_GET['id'];
  if (!isset($_GET['id'])) die('filme missing');


  $filme = getfilmebyid($idfilme);
  $smarty->assign('filme', $filme);
  $analises = getanalises($idfilme);
  $smarty->assign('analises', $analises);
  $smarty->display('pages/filmepage.tpl'); 
?>