<?php
header('context-type: text/html; charset=utf-8');
include "connect.php";
include "verifica_login.php";

$nome_donativo  = $_POST['nome_donativo'];
$descricao      = $_POST['descricao_donativo'];
$qtdeItem       = $_POST['qtdeItem'];
$entrega        = $_POST['entregaSouN'];
$novo_usado     = $_POST['novo_usado'];
$fotoDonativo   = $_FILES['fotoDonativo']['name'];
$id_categoria   = $_POST['id_categoria'];

$atualizarDon = true;
$idDon = $_POST['idDon'];


if($atualizarDon) {
    $sql = mysqli_query($link, "UPDATE tb_donativo SET 
        nome_donativo = '$nome_donativo', descricao_donativo = '$descricao', qtdeItem = $qtdeItem, entregaSouN = '$entrega', 
        novo_usado = '$novo_usado', fotoDonativo = '$fotoDonativo', email = '$email_logado', id_categoria =  $id_categoria
        WHERE id_donativo = '$idDon'
        ");
 
    header('Location: meus-donativos.php');
}else{
    header('Location: meus-donativos.php');
}

//Pasta onde o arquivo vai ser salvo
$pasta = $email_logado;


//Criar a pasta de foto do produto
mkdir("produtos/imgProduto/".$pasta,0777);

//Incluir imagem na pasta
move_uploaded_file($_FILES["fotoDonativo"]['tmp_name'], "produtos/imgProduto/".$pasta."/".$fotoDonativo);

?>