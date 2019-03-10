<?php 

session_start();

include_once("../seguranca.php");

include_once("../bd.php");


$cep = $_POST["cep"];
$endereco = $_POST['endereco'];
$bairro = $_POST["bairro"];
$complemento = $_POST["complemento"];
$cidade = $_POST["cidade"];
$estado = $_POST["estado"]
$nome = $_POST["nome"];

$email = $_POST["email"];

$ConfirEmail = $_POST["ConfirEmail"];

$senha = $_POST["senha"];

$ConfirSenha = $_POST["ConfirSenha"];

$nivel_acesso = 2;



$query = mysql_query("INSERT INTO usuarios (`nome`, `email`, `senha`, `nivel_de_acesso_id`, `criacao`, `cep`, `endereco`, `bairro`, `cidade`, `estado`) VALUE ('$nome', '$email', '$senha', '$nivel_acesso', NOW())");

?>

<!DOCTYPE html>

<html lang="pt-br">

<head>

	<meta charset="utf-8">

</head>



<body>

	<?php

		if (mysql_affected_rows() != 0 ){	

			//http://vaidarcerto.epizy.com/administrativo.php

			echo "



				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=".$urlSite."/adm/administrativo.php?link=2'>

				<script type=\"text/javascript\">

					alert(\"Usuário cadastrado com Sucesso.\");

				</script>

			";		   

		}else{ 	

				echo "

				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=".$urlSite."/adm/administrativo.php?link=2'>

				<script type=\"text/javascript\">

					alert(\"Opa, temos um problema nos seus dados !\");

				</script>

			";		   



		}

	?>

	</body>

</html>