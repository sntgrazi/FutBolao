<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/cad.css">
    <title>Cadastro</title>
</head>
<body>

   <section class="conteudo-esquerda">
   <div class="container">
        <h1>Cadastro</h1>
        <form method="post" action="_scripts/cadastrar.php">
            <div class="inputField">
                <label for="">Usuário</label>
                <input type="text" name="usuario" required>
            </div>
            <div class="inputField">
                <label for="">Email</label>
                <input type="text" name="email" required>
            </div>
            <div class="inputField">
                <label for="">Telefone</label>
                <input type="text" name="telefone" required>
            </div>
            <div class="inputField">
                <label for="">Senha</label>
                <input type="password" name="senha" required>
            </div>
            <div class="btnCadastro">
                <button> Cadastrar</button>
            </div>
        </form>
       
    </div>
   </section>
   <section class="conteudo-direita">
        <div class="img">
            <img src="img/mascote.png" alt="">
        </div>
   </section>
</body>
</html>