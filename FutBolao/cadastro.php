<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>CADASTRO</title>
</head>

<body>
    <div class="card-cadastro">
        <div class="titulo">
            <h1>CADASTRO</h1>
        </div>
        <div class="form-cadastro">
            <form name="cad_user" method="POST" action="_scripts/cadastrar.php">
                <div class="textfield">
                    <label for="">Usuário</label>
                    <input type="text" required name="usuario">
                </div>
                <div class="textfield">
                    <label for="">Email</label>
                    <input type="email" required name="email">
                </div>
                <div class="textfield">
                    <label for="">Senha</label>
                    <input type="password" required name="senha">
                </div>
                <div class="textfield">
                    <label for="">Confirmar Senha</label>
                    <input type="password" required name="confirm_senha">
                </div>
                <button onclick="return validar()">CADASTRAR</button>
            </form>
        </div>
    </div>

    <script src="js/validarsenha.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</body>

</html>