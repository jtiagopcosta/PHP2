<?php 
    function get_filmes_filtrados($generos){
        global $conn;
        foreach($generos as $genero){
        $stmt = $conn->prepare("SELECT * FROM filmes 
                                WHERE genero 
                                LIKE '%$genero%'");
        $stmt->execute();
        }
        return $stmt->fetchAll();
        
    }
?>