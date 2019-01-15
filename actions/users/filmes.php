<?php
  include_once('../../common/init.php');
  include_once($BASE_DIR .'/database/upfilmes.php');  

  /*Upload de imagem para o servidor */
$target_dir = $BASE_URL ."/img/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


/* diretório para a imagem guardada (este diretório é gravado na base de dados mais abaixo) */
$file = $_FILES['fileToUpload'];
$name = $file['name'];

$path = $BASE_URL ."/img/" . basename($name);
if (move_uploaded_file($file['tmp_name'], $path)) {
    // Move succeed.
} else {
    // Move failed. Possible duplicate?
}


  $nome = strip_tags($_POST['nome']);
  $genero = strip_tags($_POST['genero']);
  $elenco = strip_tags($_POST['elenco']);
  $autor = strip_tags($_POST['autor']);
  $descricao = strip_tags($_POST['mensagem']);
  $nacionalidade = strip_tags($_POST['nacionalidade']);

  createfilmes($nome, $genero, $elenco, $autor, $descricao, $nacionalidade, $path);

  $_SESSION['success_messages'][] = 'Movie registered successfully';  
  
  header('Location: ' . $_SERVER['HTTP_REFERER']);
?>