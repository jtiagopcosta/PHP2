<?php 
function get_filmes_pesquisados($pesquisa){
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM filmes WHERE nome ILIKE '%$pesquisa%'
                            OR nome ILIKE '$pesquisa'
                            OR nome ILIKE '$pesquisa%'
                            OR nome ILIKE '%$pesquisa'");
    $stmt->execute();
    return $stmt->fetchAll();
}
    
?>