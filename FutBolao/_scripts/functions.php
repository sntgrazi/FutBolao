<?php
    function converteData($data){
        if (strstr($data, "/")){//verifica se tem a barra /
            $d = explode ("/", $data);//tira a barra
            $rstData = "$d[2]-$d[1]-$d[0]";//separa as datas $d[2] = ano $d[1] = mes etc...
            return $rstData;
        }
        else if(strstr($data, "-")){
            $data = substr($data, 0, 10);
            $d = explode ("-", $data);
            $rstData = "$d[2]/$d[1]/$d[0]";
            return $rstData;
        }
        else{
            return '';
        }
    }

    function Compare(){
    
    include "conexaobd.php";
    $sql = "SELECT aposta.timea, aposta.timeb, dados_jogos.rt1, dados_jogos.rt2  FROM dados_jogos, aposta where dados_jogos.id = aposta.id_dadosjogos and aposta.user = '$_SESSION[usuario]'";
    $query = $con->query($sql);
    $a = 0;
    while ($dados = $query->fetch_array()) {

        if ($dados['timea'] == $dados['rt1'] and $dados['timeb'] == $dados['rt2']) {
            $a += 1;
          
        }
        
    }
    $sql2 = "UPDATE login set pontos = '$a' where usuario = '$_SESSION[usuario]'";
    $query = $con->query($sql2);
    echo $a;

    }

    function CustomInput($login,$id){
        include "conexaobd.php";
        $sql = "SELECT dados_jogos.id, aposta.id_dadosjogos 
                FROM dados_jogos, aposta 
                WHERE dados_jogos.id = aposta.id_dadosjogos AND aposta.user = '$login' and id_dadosjogos = '$id'";
        $query = $con->query($sql);
        $dados = $query->num_rows;
       
        return $dados;
    }

    function exibir($login)
    {
    include "conexaobd.php";
    $sql = "SELECT * from login WHERE usuario = '$login'";
    $query = $con->query($sql);
    $dados = $query->fetch_array();


    return $dados;
    }

?>