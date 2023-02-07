<html>
    <link rel="stylesheet" href="../css/style.css">
    <body>
    <script src = "https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <?php

        session_start();
        include "conexaobd.php";

        $usuarioLogado = $_SESSION['usuario'];
        $foto_perfil = $_FILES['foto_perfil']['name'];

        if($foto_perfil == ""){?>
            <script>
            swal("", "Escolha uma foto de perfil", "info")
            .then((value)=>{
                location.href= "../index.php?r=perfil";
            });
        </script>
    <?php
        }else{
            move_uploaded_file($_FILES['foto_perfil']['tmp_name'],"../users/".$usuarioLogado."/".$foto_perfil);

            $sql = "UPDATE login set perfil='$foto_perfil' WHERE usuario = '$usuarioLogado'";
            $query = $con->query($sql);


            header("location:../index.php?r=perfil");
        }

        ?>
    </body>    
</html>

