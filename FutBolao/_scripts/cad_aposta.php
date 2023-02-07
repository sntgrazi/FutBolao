<?php session_start() ?>

<html>
    <link rel="stylesheet" href="../css/style.css">
    <body>
        <script src = "https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

        <?php
        include_once "conexaobd.php";

        date_default_timezone_set('America/Sao_Paulo');
        $user = $_SESSION['usuario'];
        $data = date("Y-m-d");

        $dadosAposta = filter_input_array(INPUT_POST, FILTER_DEFAULT);

        if(!empty($dadosAposta['aposta'])){
            foreach($dadosAposta['timea'] as $chave => $valor){
                $sql = "INSERT INTO aposta (id_dadosjogos, timea, timeb, user, dataAposta) VALUE (?,?,?,?,?)";
                $query = $con->prepare($sql);
                $query->bind_param('sssss', $dadosAposta['jogo'][$chave + 1], $valor, $dadosAposta['timeb'][$chave], $user, $data);
                $query->execute();

                ?>
                <script>
                     swal("", "Palpite salvo com sucesso", "success")
                    .then((value)=>{
                        location.href= "../index.php?r=jogos";
                    });
                </script>
            <?php 
            }
        } else { ?>
            <script>
                 swal("", "Ocorreu um erro ao salvar o palpite", "error")
                    .then((value)=>{
                        location.href= "../index.php?r=jogos";
                    });
            </script>
        
        <?php 
        }
        ?>


    </body>
</html>