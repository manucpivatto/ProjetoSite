<?php

//arquivo de conexao com o banco
$host = "localhost";
$user = "root";
$pass = "";
$banco = "doe";

global $link;

$link = mysqli_connect($host,$user,1234,$banco);
mysqli_set_charset($link,'utf8');

if ($link){

} else {
    echo "Erro de conexão no banco de dados";
}

?>

