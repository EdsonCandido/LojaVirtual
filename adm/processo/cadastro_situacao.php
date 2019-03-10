<?php 

session_start();

include_once("../seguranca.php");

include_once("../bd.php"); 

$nome = $_POST["nome"];

$query = mysql_query("INSERT INTO situacao (nome, criacao) VALUE ('$nome', NOW())");

?>

<!DOCTYPE html>

<html lang="pt-br">

<head>

	<meta charset="utf-8">

</head>

<body>

	<?php

		if (mysql_affected_rows() != 0 ){	

			//URL=http://vaidarcerto.epizy.com/administrativo.php?link=9

			echo "

				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=".$urlSite."/adm/administrativo.php?link=14'>

				<script type=\"text/javascript\">

					alert(\"Situação cadastrado com Sucesso.\");

				</script>

			";		   

		}else{ 	

				echo "

			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=".$urlSite."/adm/administrativo.php?link=14'>

				<script type=\"text/javascript\">

					alert(\"Situação não foi cadastrado com Sucesso.\");

				</script>

			";		   

		}

	?>

	</body>

</html>