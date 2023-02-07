<html>
    <link rel="stylesheet" href="../css/style.css">
    <body>
        <script src = "https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <?php

        include "conexaobd.php";

        $usuario = $_POST['usuario'];
        $email = $_POST['email'];
        $senha = md5($_POST['senha']);

        $sql = "SELECT id FROM login WHERE usuario = '$usuario'";
        $query = $con->query($sql);
        $total = $query->num_rows;

        if($total>=1){
            ?>
                <script>
                    swal("", "Usuário já cadastrado", "info")
                    .then((value)=>{
                        location.href= "../login.php";
                    });
                </script>
            <?php
        } else {
            $sql = "INSERT INTO login (usuario, email, senha) VALUES ('$usuario', '$email', '$senha')";
            $query = $con->query($sql);

            if($query){
                ?>
                <script>
                    swal("", "Usuário cadastrado com sucesso", "success")
                    .then((value)=>{
                        location.href= "../login.php";
                    });
                </script>
            <?php
            } else {
                echo 'Problema na query';
            }
        }

        ?>
         
    </body>

</html>