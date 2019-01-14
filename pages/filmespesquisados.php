<?php
 
  include_once('./../common/init.php');
  include_once($BASE_DIR . '/database/pesquisa.php');
  include_once($BASE_DIR . '/database/getfilmes.php');
  include_once($BASE_DIR . '/pages/generos.php');

  $filmes= getfilmes();
  
  $input= generos($filmes);

  $pesquisa = $_POST['pesquisa'];

  $filmespesq= get_filmes_pesquisados($pesquisa);
  
  $smarty->assign('input', $input);
  $smarty->assign('filmes', $filmespesq);
  $smarty->display('pages/filmes.tpl'); 
?>