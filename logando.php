<?php

    session_start();
    include "cabecalho.inc.php";
    include 'connect.php';


$login = addslashes($_POST["email"]);
$pass = addslashes($_POST["senha"]);

if($login && $pass) {
    $sql = mysqli_query($link,"select * from tb_user WHERE email = '$login'");              //consulta
    
    while($dados = mysqli_fetch_array($sql)){ //fetch_array procura dentro de um array      //varredura
        $email = $dados['email'];                                                           //guarda dentro das novas variáveis
        $senha = $dados['senha'];                                                           //a variável passa a ser array, os índices passam a ser o nome dos campos: email e senha
    }

    //verificar se os dados batem com o que temos na tabela do banco de dados
    //início da verificação
    if($login == $email && $pass == $senha){
        
        SESSION_START();
        //variáveis de sessão | para criar arrays
        $_SESSION['email_user'] = $login;
        $_SESSION['senha_user'] = $pass;
        header('Location: minha-conta.php'); 

    } else {
        $_SESSION['msgError'] = "* Usuário ou senha não correspondem!";
        header('Location: login.php');
       
    }
    // fim verificação
} else {
    $_SESSION['msgError'] = "* Você não está cadastrado";
    header('Location: login.php?Nao_tem_Usuario_senha');
    //header('Location: login.php');
}



?>
