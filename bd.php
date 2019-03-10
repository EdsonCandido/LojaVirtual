<?php 
//informações do seu banco de dados 
$host = "locahost";
$user = "admin";
$pass = "admin";
$banco = "loja_virtual";
$conexao = mysql_connect($host, $user, $pass);
mysql_select_db($banco);

$urlSite = "http://localhost";
?>
