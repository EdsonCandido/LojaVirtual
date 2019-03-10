<?php 

/*$host = "sql205.epizy.com";
$user = "epiz_22096312";
$pass = "SVb0Y4J4WtyC";
$banco = "epiz_22096312_banco";*/

$host = "superbay.mysql.dbaas.com.br";
$user = "superbay";
$pass = "superbay123";
$banco = "superbay";
$conexao = mysql_connect($host, $user, $pass);
mysql_select_db($banco);

$urlSite = "http://localhost";

 ?>