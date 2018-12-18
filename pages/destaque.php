<?php
 
  include_once('../common/init.php');
  include_once($BASE_DIR . '/database/getLastAdded.php');

  $filmes= getLastAdded();
  $smarty->assign('filmes', $filmes);
  $smarty->display('pages/destaque.tpl'); 
?>
                
         