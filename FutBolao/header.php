<?php
session_start();

if (empty($_SESSION['usuario'])) {
    echo "<script>alert('Por favor, realize seu login!')
            window.location.href='login.php'</script>";
} else {
    $usuario = $_SESSION['usuario'];
}


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style2.css">
    <script src="https://kit.fontawesome.com/8de9fd41f4.js" crossorigin="anonymous"></script>
    <title>FutBolao</title>
</head>

<body>