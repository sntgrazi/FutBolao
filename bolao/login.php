<?php
// Inicializa a sessão.
// Se estiver sendo usado session_name("something"), não esqueça de usá-lo agora!
session_start();

// Apaga todas as variáveis da sessão
$_SESSION = array();

// Se é preciso matar a sessão, então os cookies de sessão também devem ser apagados.
// Nota: Isto destruirá a sessão, e não apenas os dados!
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// Por último, destrói a sessão
session_destroy();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>Login</title>
</head>
<body>
    <section class="login"> 
        <h1>LOGIN</h1>
        <div class="container">
            <form method="post" action="_scripts/autenticar.php">
                <div class="inputField">
                    <input type="text" name="usuario" placeholder="nome de usuário" required>
                    <label for="">Usuário</label>
                </div>
                <div class="inputField">
                    <input type="password" name="senha" placeholder="senha" required>
                    <label for="">Senha</label>
                </div>
               <a class="novaSenha"href="#">Esqueceu sua senha?</a>
                <div class="btnEntrar">
                    <button>Entrar</button>
                </div>
            </form>
        </div>
       <h4>Não tem conta ainda? <a href="cadastro.php">Crie uma agora!</a></h4>
    </section>
</body>
</html>