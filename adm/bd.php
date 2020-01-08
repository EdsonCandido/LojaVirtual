<?php 

/*$host = "";
$user = "";
$pass = "";
$banco = "";*/

$host = "superbay.mysql.dbaas.com.br";
$user = "superbay";
$pass = "";
$banco = "superbay";
$conexao = mysql_connect($host, $user, $pass);
mysql_select_db($banco);

$urlSite = "http://localhost";

 ?>
