<?php
SESSION_START();

//arquivo de conexão com o banco de dados
include "connect.php";

$nome = addslashes($_POST['nome']);
$sobrenome = addslashes($_POST['sobrenome']);
$cep = addslashes($_POST['cep']);
$email = addslashes($_POST['email']);
$telefone = addslashes($_POST['telefone']);
$senha = addslashes($_POST['senha']);
$dica = addslashes($_POST['dica']);
$cadastrar = true;

//verificar se é possível cadastrar
if($nome != "" && $sobrenome != "" && $cep != "" && $email != "" && $telefone != "" && $senha != "" && $dica != ""){
	$cadastrar = true;
	
} else {
	$_SESSION['status'] = "$nome, preencha com todos os dados pedidos<br>";	
	header("location:cadastre-usuario.php");

}

//envia dados ao banco
if($cadastrar) {
    $sql = "INSERT INTO tb_user(
		nome, sobrenome, cep, email, telefone, senha, dica) VALUES
    ('$nome','$sobrenome','$cep','$email','$telefone','$senha','$dica')";

    mysqli_query($link,$sql);	
    header('Location: login.php');
}


//local das imagens dos usuários cadastrados
$pasta = $email;


//criar pasta em php com base em uma verificação
if(file_exists("users/".$pasta)){
	$_SESSION['status'] = "$nome, você já possui login com este e-mail<br>";	
	header("location:cadastre-usuario.php"); //volta pra tela de cadastro caso já possua uma pasta com o mesmo email cadastrado
} else { //se não existir email cadastrado cria nova pasta
	mkdir("users/".$pasta,0777);
}


?>