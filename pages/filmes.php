<?php
 
  include_once('./../common/init.php');
  include_once($BASE_DIR . '/database/getfilmes.php');
  include_once($BASE_DIR . '/pages/generos.php');

  $filmes= getfilmes();
  
  $input= generos($filmes);
  

  

  $smarty->assign('input', $input);
  $smarty->assign('filmes', $filmes);
  $smarty->display('pages/filmes.tpl'); 
?>