<?php
 
  include_once('./../common/init.php');
  include_once($BASE_DIR . '/database/filtro.php');
  include_once($BASE_DIR . '/database/getfilmes.php');
  include_once($BASE_DIR . '/pages/generos.php');

  $allfilmes= getfilmes();
  
  $input = generos($allfilmes);
 
  
  $generos = $_POST['genero'];
  foreach($generos as $genero){
    $filmes = get_filmes_filtrados($genero);
  }

  
  $smarty->assign('input', $input);
  $smarty->assign('filmes', $filmes);
  $smarty->display('pages/filmes.tpl'); 
?>