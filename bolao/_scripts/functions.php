<?php


function Compare()
{
    include "config.php";
    $sql = "SELECT apostateste.timea, apostateste.timab, dados_jogos.rt1, dados_jogos.rt2  FROM dados_jogos, apostateste where dados_jogos.id = apostateste.id_dadojogos";
    $query = $mysqli->query($sql);

    $a = 0;
    while ($dados = $query->fetch_array()) {

        if ($dados['timea'] == $dados['rt1'] and $dados['timab'] == $dados['rt2']) {
            $a += 1;
        }
        
    }
    echo $a;

}
    
?>