<?php
 
  include_once('./../common/init.php');
  include_once($BASE_DIR . '/database/getfilmes.php');

  
  $idfilme = $_GET['id'];
  if (!isset($_GET['id'])) die('filme missing');

  $filmes= getfilmebyid($idfilme);
  $smarty->assign('filmes', $filmes);
  $smarty->display('pages/filmepage.tpl'); 
?>