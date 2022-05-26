<?php
include "connect.php";

$nome = addslashes($_POST['nome']);
$sobrenome = addslashes($_POST['sobrenome']);
$cep = addslashes($_POST['cep']);
$telefone = addslashes($_POST['telefone']);
$senha = addslashes($_POST['senha']);
$dica = addslashes($_POST['dica']);

$atualizarUsu = true;
$idUsu =  addslashes($_POST['idUsu']);


if($atualizarUsu) {
    $sql = mysqli_query($link, "UPDATE tb_user SET 
        nome = '$nome', sobrenome = '$sobrenome', cep = '$cep',
        telefone = '$telefone', senha = '$senha', dica = '$dica'
        WHERE email = '$idUsu'
        ");
 
    header('Location: meus-dados.php');
}else{
    header('Location: editar-usuario.php');
}


?>