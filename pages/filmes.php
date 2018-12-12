<?php
 
  include_once('./../common/init.php');
  include_once($BASE_DIR . '/database/getfilmes.php');

  $filmes= getfilmes();

  $smarty->display('pages/filmes.tpl'); 
?>