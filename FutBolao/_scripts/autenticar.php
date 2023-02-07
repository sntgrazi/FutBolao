<?php session_start(); ?>

<html>
    <link rel="stylesheet" href="../css/style.css">
    <body>
        <script src = "https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>    

        <?php 
            include "conexaobd.php";

            $usuario = $_POST['usuario'];
            $senha = md5($_POST['senha']);


            $sql = "SELECT id FROM login WHERE usuario = '$usuario'";
            $query = $con->query($sql);
            $total = $query->num_rows;

            if($total == 0){?>
                <script>
                    swal("Ops", "Login não encontrado", "error")
                    .then((value) =>{
                        location.href="../login.php";
                    })
                </script>
            <?php }  else {

                $sql = "SELECT id FROM login WHERE usuario = '$usuario' and senha = '$senha'";
                $query = $con->query($sql);
                $total = $query->num_rows;

                if($total == 0){ ?>
                    <script>
                        swal("Ops", "Senha Incorreta", "error")
                        .then((value) =>{
                        location.href="../login.php";
                        })
                    </script>
                <?php }else{
                    $_SESSION['usuario'] = $usuario;
                    echo "<script> window.location.href='../index.php'; </script>";
                }
            }
        ?>
    </body>
</html>

