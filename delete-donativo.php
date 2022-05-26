<?php
header('context-type: text/html; charset=utf-8');

//arquivo de conexão com o banco de dados
include "connect.php";
include "verifica_login.php";


$sql_code = "SELECT * FROM tb_donativo where email = '$email_logado'";
$sql_query = mysqli_query($link, $sql_code);
$linha = $sql_query->fetch_assoc();

$fotoDon = 'produtos/imgProduto/'.$email_logado.'/'.$linha['fotoDonativo'];
unlink($fotoDon);


$delDonativo = "DELETE FROM tb_donativo WHERE id_donativo = '".$_GET['del_donativo']."'";
$apagarDon = mysqli_query($link, $delDonativo);
header('Location: meus-donativos.php');


?>