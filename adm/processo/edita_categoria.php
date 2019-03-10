<?php 

session_start();

include_once("../seguranca.php");

include_once("../bd.php");



$id = $_POST["id"];

$nome = $_POST["nome"];

$query = mysql_query("UPDATE categorias set nome = '$nome', modified = NOW() WHERE id = '$id'");

?>

<!DOCTYPE html>

<html lang="pt-br">

<head>

	<meta charset="utf-8">

</head>

<body>

	<?php

		if (mysql_affected_rows() != 0 ){	

			//http://vaidarcerto.epizy.com/administrativo.php?link=9

			echo "

				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=".$urlSite."/adm/administrativo.php?link=9'>

				<script type=\"text/javascript\">

					alert(\"Categoria editado com Sucesso.\");

				</script>

			";		   

		}else{ 	

				echo "

				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=".$urlSite."/adm/administrativo.php?link=9'>

				<script type=\"text/javascript\">

					alert(\"Categoria não foi edidato com Sucesso.\");

				</script>

			";		   

		}

	?>

	</body>

</html>