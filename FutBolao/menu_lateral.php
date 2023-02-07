<?php

include "_scripts/functions.php";
$perfil0 = exibir($_SESSION['usuario'])['perfil'];
$usuario = $_SESSION['usuario'];

$url = $_SERVER['QUERY_STRING'];

if ($url == '' || $url == 'r=inicio') {
  $inicio = 'active';
} else if ($url == 'r=jogos') {
  $jogos = 'active';
} else if ($url == 'r=resultados') {
  $result = 'active';
} else if ($url == 'r=ranking') {
  $rank = 'active';
} else if ($url == 'r=perfil') {
  $perfil = 'active';
}


?>

<div class="navigation">
  <div class="img-logo">
  <img src="<?php 
        if($perfil0 == "icon.png"){
          echo "img/$perfil0";
        }else{
          echo "users/$usuario/$perfil0";
        }
      ?>"
       alt="foto de perfil">
  </div>
  <ul>
    <li class="list <?php echo $inicio ?>">
      <a href="index.php?r=inicio">
        <span class="icon"><i class="fa-solid fa-house"></i></span>
        <span class="title">Inicio</span>
      </a>
    </li>
    <li class="list <?php echo $jogos ?>">
      <a href="index.php?r=jogos">
        <span class="icon"><i class="fa-solid fa-futbol"></i></span>
        <span class="title ">Jogos</span>
      </a>
    </li>
    <li class="list <?php echo $result ?>">
      <a href="index.php?r=resultados">
        <span class="icon"><i class="fa-solid fa-trophy"></i></span>
        <span class="title">Resultados</span>
      </a>
    </li>
    <li class="list <?php echo $rank ?>">
      <a href="index.php?r=ranking">
        <span class="icon"><i class="fa-solid fa-ranking-star"></i></span>
        <span class="title">Ranking</span>
      </a>
    </li>
    <li class="list <?php echo $perfil ?>">
      <a href="index.php?r=perfil">
        <span class="icon"><i class="fa-solid fa-user"></i></span>
        <span class="title">Perfil</span>
      </a>
    </li>
    <li class="list">
      <a href="login.php">
        <span class="icon"><i class="fa-solid fa-right-from-bracket"></i></span>
        <span class="title">Sair</span>
      </a>
    </li>
  </ul>
</div>