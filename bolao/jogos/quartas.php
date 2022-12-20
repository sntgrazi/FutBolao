<?php
session_start();
if(empty($_SESSION['usuario'])){
    echo "<script>alert('Por favor, realize seu login!')
            window.location.href='login.php'</script>";
}else{
    $usuario = $_SESSION['usuario'];
}
include "../_scripts/functions.php";
include "../_scripts/config.php"
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/quaoit.css">
    <link rel="stylesheet" href="../css/menu.css">
    <link rel="stylesheet" href="../css/buttons.css">
    <link rel="stylesheet" href="../css/cards.css">
    <title>Quartas</title>
</head>

<body>
    
<?php include "../menu02.php" ?>

    <div class="items">
    <?php include '../buttons.php'?>
    <form method="post" action="../processa.php">
    <div class="container">
        <button class="voltarTopo" onclick="voltarTopo()"><img src="img/pra-cima.png" alt=""></button>
        <h2 id="oitavas">Quartas de Final</h2>
        <div class="partidas">
            <?php
                $sql = "SELECT * FROM dados_jogos WHERE tipo LIKE 'QUARTAS%'";
                $query = $mysqli->query($sql);
                $a = 1;
                $j = 2;
                while ($dados = $query->fetch_array()){
            ?>
            <input type="hidden" name="jogo[<?php echo $a; ?>]" value="<?php echo $dados['id']; ?>">
            <div class="jogos">
                <div class="info">
                   <h4> <?php echo $dados['tipo']; ?>  </h4>
                   <h4> <?php echo $dados['rodada']; ?> </h4>
                </div> 
                <div class="rodada">
                    <div class="timeA">
                       <div class="dados">
                            <img src="../_images/<?php echo $dados['timea']; ?>.png" maxlength="2" required>
                            <h3><?php echo $dados['timea']; ?></h3>
                       </div>
                       <input type="text" class="form-control" width="20px" name="timea[]">
                    </div>
                    <span>X</span>
                    <div class="timeB">
                        <input type="text" name="timeb[]" class="form-control" width="20px" maxlength="2" required>
                        <div class="dados">
                            <img src="../_images/<?php echo $dados['timeb']; ?>.png"><br>
                            <h3><?php echo $dados['timeb']; ?></h3>
                        </div>
                    </div>
                </div>
                <div class="data">
                        <h4><?php echo $dados['data']; ?> </h4> 
                        <h4><?php echo $dados['horario']; ?> </h4>
                </div>
            </div>
            <?php $a++;$j++;} ?>
        </div>
        <input class="btn_enviar" type="submit" value="Salvar" name="aposta">
    </div>
    </form>
    </div>
    
</body>

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

<script src="js/animacao.js"></script>
<script src="js/scroll.js"></script>

</html>