
<?php 
$perfil = exibir($_SESSION['usuario'])['perfil'];
$usuario = $_SESSION['usuario'];
?>

<div class="perfil">
    <form  method="post" action="./_scripts/alterar_foto.php" enctype="multipart/form-data">
    <div class="foto-perfil">
      <img src="<?php 
        if($perfil == "icon.png"){
          echo "./img/$perfil";
        }else{
          echo "./users/$usuario/$perfil";
        }
      ?>"
       alt="foto de perfil">
    </div>
    <ul class="alterar-foto">
        <li><img src="./img/cam.png" alt="camera"></li>
        <ul class="lista">
            <li><input type="file" name="foto_perfil" ></li>
            <li><a href="./_scripts/remover_foto.php">Remover foto</a></li>
        </ul>
    </ul>


    <div class="alterar-dados">
        <div class="textfield">
            <label for="">Usuário</label>
            <input type="text" name="usuario" value="<?php echo exibir($_SESSION['usuario'])['usuario'];?>" disabled >
        </div>
        <div class="textfield">
            <label for="">Email</label>
            <input type="text" name="email" value="<?php echo exibir($_SESSION['usuario'])['email']; ?>" disabled>
        </div>
        <button>Salvar</button>
    </div>
    
    </form>
   
</div>