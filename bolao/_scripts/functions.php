<?php


function Compare()
{
    
    include "config.php";
    $sql = "SELECT apostateste.timea, apostateste.timab, dados_jogos.rt1, dados_jogos.rt2  FROM dados_jogos, apostateste where dados_jogos.id = apostateste.id_dadojogos and apostateste.user = '$_SESSION[usuario]'";
    $query = $mysqli->query($sql);

    $a = 0;
    while ($dados = $query->fetch_array()) {

        if ($dados['timea'] == $dados['rt1'] and $dados['timab'] == $dados['rt2']) {
            $a += 1;
        }
        
    }
    echo $a;

}


function CustomInput($login,$id){
    include "config.php";
    $sql = "SELECT dados_jogos.id, apostateste.id_dadojogos 
            FROM dados_jogos, apostateste 
            WHERE dados_jogos.id = apostateste.id_dadojogos AND apostateste.user = '$login' and id_dadojogos = '$id'";
    $query = $mysqli->query($sql);
    $dados = $query->num_rows;
   
    /*if($dados >= 1){ ?>
        <script>
            var input = document.querySelector(".custom");
            input.disabled = true;
        </script>

    <?php }*/
    return $dados;
}
    
?>