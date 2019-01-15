<?php
    include_once('./../common/init.php');
    
    $idfilme = $_POST['id'];
    $analise = $_POST['mensagem'];
    $id = $_POST['id2'];
    $user=$_POST['user'];


    global $conn;
    $stmt = $conn->prepare("INSERT INTO analises ( analise, idusuario, idfilme, utilizador ) VALUES (?, ?, ?, ?)");
    $stmt->execute(array($analise, $id, $idfilme, $user)); 

?>  
