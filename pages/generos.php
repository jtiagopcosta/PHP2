<?php 

/* Tendo em conta que na base de dados os géneros de cada filme estão separados por
virgulas é necessário separa-los.  É também preciso eliminar os espaços. Apos isto 
é criado um array com todos os generos existentes, se repetir nenhum*/
function generos ($filmes){
    $array = array();
        foreach ($filmes as $filme){
        $arr = explode(',', $filme['genero']);
        
            foreach($arr as $linhas){ if(trim($linhas) != '')
                $array[] = trim($linhas);
            }
        }
    $input = array();
    $input = array_unique($array); 
    return $input;
}
?>