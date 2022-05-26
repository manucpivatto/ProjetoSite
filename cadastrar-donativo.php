<?php
header('context-type: text/html; charset=utf-8');

//arquivo de conexão com o banco de dados
include "connect.php";
include "verifica_login.php";


//aqui, nesta include, inserimos todos os caomandos do PHP para o rcebimento de dados do formulário e o envio destes dados para cadastro na base de dados
$nome_donativo  = $_POST['nome_donativo'];
$descricao      = $_POST['descricao_donativo'];
$qtdeItem       = $_POST['qtdeItem'];
$entrega        = $_POST['entregaSouN'];
$novo_usado     = $_POST['novo_usado'];
$fotoDonativo   = $_FILES['fotoDonativo']['name'];
$id_categoria   = $_POST['id_categoria'];

$cadastrar = true;


if($cadastrar) {
$sql = "INSERT INTO tb_donativo(
    nome_donativo, descricao_donativo, qtdeItem, entregaSouN, novo_usado, fotoDonativo, email, id_categoria) VALUES 
    ('$nome_donativo','$descricao',$qtdeItem,'$entrega','$novo_usado','$fotoDonativo','$email_logado', $id_categoria)";

mysqli_query($link,$sql);
header('Location: meus-donativos.php');
}


//Pasta onde o arquivo vai ser salvo
$pasta = $email_logado;


//Criar a pasta de foto do produto
mkdir("produtos/imgProduto/".$pasta,0777);

//Incluir imagem na pasta
move_uploaded_file($_FILES["fotoDonativo"]['tmp_name'], "produtos/imgProduto/".$pasta."/".$fotoDonativo); 


?>