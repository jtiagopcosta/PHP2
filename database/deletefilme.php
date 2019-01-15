<?php
include_once('./../common/init.php');

$idfilme = $_GET['id'];



$stmt = $conn->prepare("DELETE  FROM filmes WHERE id = $idfilme;");
$stmt->execute();

header("Location:$BASE_URL/pages/filmes.php")

?>