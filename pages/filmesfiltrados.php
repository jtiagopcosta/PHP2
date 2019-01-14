<?php
 
  include_once('./../common/init.php');
  include_once($BASE_DIR . '/database/filtro.php');
  include_once($BASE_DIR . '/database/getfilmes.php');
  include_once($BASE_DIR . '/pages/generos.php');

  $filmes= getfilmes();
  
  $input= generos($filmes);
 
  
  $generos = $_POST['genero'];

  $filmesfiltrados= get_filmes_filtrados($generos);


  $smarty->assign('input', $input);
  $smarty->assign('filmes', $filmesfiltrados);
  $smarty->display('pages/filmes.tpl'); 
?>