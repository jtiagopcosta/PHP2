<?php
 
  include_once('./../common/init.php');
  include_once($BASE_DIR . '/database/getfilmes.php');

  $smarty->display('pages/filmes.tpl'); 

  $filmes= getfilmes();
?>