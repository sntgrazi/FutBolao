<html>
    <body>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php

    include "config.php";

    $usuario = $_POST['usuario'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $senha = md5($_POST['senha']);

    $sql = "SELECT id FROM login WHERE usuario = '$usuario'";
    $query = $mysqli->query($sql);
    $total = $query->num_rows;

    if($total>=1){ ?>
        <script> 
        Swal.fire('Usuário já cadastrado')
        .then((result)=>{
            if(result.isConfirmed){
                location.href="../cadastro.php"
            }
        })
        </script>
    <?php } else{
        $sql = "INSERT INTO login values (NULL, '$usuario', '$email', '$telefone', '$senha')";
        $query = $mysqli->query($sql);

        if($query){ ?>
        <script> 
        Swal.fire({
         title: 'Sucesso!',
         text: 'Cadastro realizado com sucesso',
         icon: 'success',
         confirmButtonText: 'Ok'
        }).then((result)=>{
            if(result.isConfirmed){
                location.href="../login.php";
            }
         })
        </script>
    <?php }else{ 
        echo "Problema na query";
    }
    
   }
    
   ?>

    </body>
</html>