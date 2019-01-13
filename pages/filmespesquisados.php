<?php
 
  include_once('./../common/init.php');
  include_once($BASE_DIR . '/database/pesquisa.php');

  $pesquisa = $_POST['pesquisa'];

  $filmes= get_filmes_pesquisados($pesquisa);
  $smarty->assign('filmes', $filmes);
  $smarty->display('pages/filmes.tpl'); 
?>