<?php 
session_start();
include_once("../seguranca.php");
include_once("../bd.php");

$id = $_GET["id"];

$query = "DELETE FROM produtos_votacao WHERE id = '$id'";
$resultado = mysql_query($query);
$linhas = mysql_affected_rows();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
</head>
<body>
	<?php
		if (mysql_affected_rows() != 0 ){	
			//URL=http://vaidarcerto.epizy.com/administrativo.php?id=9'>
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=".$urlSite."/adm/administrativo.php?link=4'>
				<script type=\"text/javascript\">
					alert(\"Promoção apagada com Sucesso.\");
				</script>
			";		   
		}else{ 	
				echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=".urlSite."/adm/administrativo.php?link=4'>
				<script type=\"text/javascript\">
					alert(\"Promoção não foi apagada com Sucesso.\");
				</script>
			";		   
		}
	?>
	</body>
</html>