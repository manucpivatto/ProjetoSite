<?php

header('context-type: text/html; charset=utf-8');

//arquivo de conexão com o banco de dados
include "connect.php";
include "verifica_login.php";


$sql_code = "SELECT * FROM tb_user where email = '$email_logado'";
$sql_query = mysqli_query($link, $sql_code);
$linha = $sql_query->fetch_assoc();

$delUser = "DELETE FROM tb_user WHERE email = '".$_GET['del_user']."'";
$apagarUser = mysqli_query($link, $delUser);

$delUserDon = "DELETE FROM tb_donativo WHERE email = '".$_GET['del_user']."'";
$apagarUserDon = mysqli_query($link, $delUserDon);
header('Location: index.php');



?>