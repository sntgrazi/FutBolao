<?php

session_start();

?>


<html>
  <body>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <?php 
include_once "config.php";

date_default_timezone_set('America/Sao_Paulo');
$login = $_SESSION['usuario'];
$data = date("Y-m-d");


$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if(!empty($dados['aposta'])){
  foreach($dados['timea'] as $chave => $valor){
    //echo"jogo:" . $dados['jogo'][$chave + 1] . "<br>";
    //echo"timea: $valor <br>";
    //echo"timeb:" .  $dados['timeb'][$chave]  . "<br>";
    //echo "<hr>";
    $timeA = $valor;   
    $sql = "INSERT INTO apostateste (id_dadojogos,timea, timab, user, dataH) VALUE (?,?,?,?,?)";
    $aposta = $mysqli->prepare($sql);
    $aposta->bind_param('sssss',$dados['jogo'][$chave+1], $timeA, $dados['timeb'][$chave], $login, $data);
    $aposta->execute();
    
    ?>
    <script> 
    Swal.fire({
     title: 'Sucesso!',
     text: 'Aposta salva com sucesso',
     icon: 'success',
     confirmButtonText: 'Ok'
    }).then((result)=>{
        if(result.isConfirmed){
            location.href="jogos/fase.php";
        }
     })
    </script>
  <?php
  }
}else{
  echo "ERRO";
}

?>

</body>
</html>

