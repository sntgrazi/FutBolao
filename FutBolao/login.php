<?php
//Iniciar sessão
session_start();

$_SESSION = array();

//Se é preciso matar a sessão, então os cookies de sessão também devem ser apagados.
if (ini_get("seesion.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(
        session_name(),
        '',
        time() - 42000,
        $params["path"],
        $params["domain"],
        $params["secure"],
        $params["httponly"]
    );
}

//Destrói a sessão
session_destroy();

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>LOGIN</title>
</head>

<body>
    <div class="card-login">
        <div class="img">
            <img src="img/mascote.png" alt="">
            <p>Não tem uma conta ainda? <br> <a href="cadastro.php">Crie uma agora!</a></p>
        </div>
        <div class="form-login">
            <div class="titulo">
                <h1>LOGIN</h1>
            </div>
            <form action="_scripts/autenticar.php" method="POST">
                <div class="textfield">
                    <label for="">Usuário</label>
                    <input type="text" name="usuario">
                </div>
                <div class="textfield">
                    <label for="">Senha</label>
                    <input type="password" name="senha">
                </div>
                <button>Entrar</button>
            </form>
        </div>
    </div>
</body>

</html>