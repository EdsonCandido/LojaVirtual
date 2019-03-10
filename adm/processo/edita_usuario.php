<?php 

session_start();

include_once("../seguranca.php");

include_once("../bd.php");



$id = $_POST["id"];

$nome = $_POST["nome"];

$NomeLoja = $_POST["NomeLoja"];

$email = $_POST["email"];

$ConfirEmail = $_POST["ConfirEmail"];

$ConfirSenha = $_POST["ConfirSenha"];

$nivel_acesso = $_POST["nivel_acesso"];



$query = mysql_query("UPDATE usuarios set nome = '$nome', NomeLoja = '$NomeLoja', email='$email', nivel_de_acesso_id = '$nivel_acesso' WHERE id = '$id'");

?>

<!DOCTYPE html>

<html lang="pt-br">

<head>

	<meta charset="utf-8">

</head>



<body>

	<?php

		if (mysql_affected_rows() != 0 ){	

			//URL=http://vaidarcerto.epizy.com/administrativo.php

			echo "

				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=".$urlSite."/adm/administrativo.php?link=2'>

				<script type=\"text/javascript\">

					alert(\"Usuário editado com Sucesso.\");

				</script>

			";		   

		}else{ 	

				echo "

				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=".$urlSite."/adm/administrativo.php?link=2'>

				<script type=\"text/javascript\">

					alert(\"Usuário não foi edidato com Sucesso.\");

				</script>

			";		   



		}

	?>

	</body>

</html>