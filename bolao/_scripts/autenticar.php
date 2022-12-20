<?php
session_start();
?>

<html>
    <body>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        
<?php 
    include "config.php";
    $usuario = $_POST['usuario'];
    $senha = md5($_POST['senha']);

    $sql = "SELECT id FROM login WHERE usuario = '$usuario'";
    $query = $mysqli->query($sql);
    $total = $query->num_rows;

    if($total==0){?>
        <script type="text/javascript"> 
            Swal.fire({
                title: 'Ops',
                text: 'Login não encontrado',
                icon: 'Error',
                confirmButtonText: 'Ok'
            }).then((result)=>{
                if(result.isConfirmed){
                    location.href="../login.php";
                }
            })
    </script>
    <?php } else {
        $sql = "SELECT id FROM login WHERE usuario = '$usuario' and senha = '$senha'";
        $query = $mysqli->query($sql);
        $total = $query->num_rows;

        if($total == 0){ ?>
            <script type="text/javascript">
            Swal.fire({
            title:'Ops!',
            text:'Senha incorreta',
            icon:'error',
            confirmButtonText:'Ok'
        }).then((result)=>{
            if(result.isConfirmed){
                location.href="../login.php";
            }
        })
            </script>

    <?php } else{
        $_SESSION['usuario'] = $usuario;
        echo "<script>window.location.href='../index.php';</script>";

        }
    }
?>
    </body>
</html