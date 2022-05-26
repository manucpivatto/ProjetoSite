<?php
include "connect.php";

//recuperar a sessão
SESSION_START();

//$em de email
$em = isset($_SESSION["email_user"])?$_SESSION["email_user"]:""; //?=então | se email_user tiver valor definido, então, recebe uma valor uma variável, se não, recebe vazio
//$se de senha
$se = isset($_SESSION["senha_user"])?$_SESSION["senha_user"]:"";


if($em != "" && $se != "") {
    //se for diferente de vazio, permanece na tela logado
    $dados = mysqli_query($link,"select * from tb_user WHERE email = '$em'");              
    
    while($d = mysqli_fetch_array($dados)){    
        $nome_logado = $d['nome'];                                                         
        $email_logado = $d['email'];   
        $sobrenome_logado = $d['sobrenome'];  
        $cep_logado = $d['cep'];    
        $telefone_logado = $d['telefone'];  
        $senha_logado = $d['senha']; 
        $dica_logado = $d['dica'];      
         
    }   
     
} else {    
    header('Location: login.php?Usuario_senha_Incorreta'); //volta para a tela de login se tiver vazio ou errado os dados
}



?>
