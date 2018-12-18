<?php
  include_once('../../common/init.php');
  include_once($BASE_DIR .'/database/upfilmes.php');  

  $nome = strip_tags($_POST['nome']);
  $genero = strip_tags($_POST['genero']);
  $elenco = strip_tags($_POST['elenco']);
  $autor = strip_tags($_POST['autor']);
  $descricao = strip_tags($_POST['mensagem']);
  $nacionalidade = strip_tags($_POST['nacionalidade']);

  createfilmes($nome, $genero, $elenco, $autor, $descricao, $nacionalidade);

  $_SESSION['success_messages'][] = 'Movie registered successfully';  
  
  header('Location: ' . $_SERVER['HTTP_REFERER']);
?>