<?php
session_start();
if(empty($_SESSION['usuario'])){
    echo "<script>alert('Por favor, realize seu login!')
            window.location.href='login.php'</script>";
}else{
    $usuario = $_SESSION['usuario'];
}
include "_scripts/functions.php";
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/inicial.css">
  <link rel="stylesheet" href="css/menu.css">
  <title>Bolão</title>
</head>

<body>

  <?php include "menu.php" ?>

  <div class="conteudo">
    <img src="img/banner.png" alt="">
    <div class="conteudo-baixo">
      <h1>Bem-vindo(a) <?php echo $usuario;?></h1>
      <p>Faça sua aposta, acerte os resultados da copa, suba no ranking e <br> concorra a prêmios.</p>
      <a href="jogos/fase.php"><button>Dê o seu palpite</button></a>
    </div>
  </div>
</body>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

  <script src="js/animacao.js"></script>
</html>