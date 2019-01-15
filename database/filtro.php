<?php 
    function get_filmes_filtrados($genero){
        global $conn;
        $stmt = $conn->prepare("SELECT * FROM filmes 
                                WHERE genero 
                                LIKE '%$genero%'");
        $stmt->execute();
        return $stmt->fetchAll();
        
    }
?>