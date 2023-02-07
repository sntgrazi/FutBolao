<html>
    <link rel="stylesheet" href="../css/style.css">
<body>
    <script src = "https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <?php
    include "functions.php";
    include "conexaobd.php";
    session_start();

    $perfil = exibir($_SESSION['usuario'])['perfil'];
    $usuario = $_SESSION['usuario'];

    $foto_perfil = "../users/$usuario/$perfil";
    unlink($foto_perfil);

    $sql = "UPDATE login set perfil = 'icon.png'";
    $query = $con->query($sql);

    header("location:../index.php?r=perfil");


    
    ?>
</body>

</html>