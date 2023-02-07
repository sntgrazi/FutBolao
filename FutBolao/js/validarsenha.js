let btn_enviar = document.getElementById('btn_enviar');


function validar(){
    let senha = cad_user.senha.value;
    let rep_senha = cad_user.confirm_senha.value;

    if(senha != rep_senha){
        swal("", "As senhas não coincidem", "error") ;
        return false;
    }
}
