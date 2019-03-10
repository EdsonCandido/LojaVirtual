<?php
session_start();
include_once("../seguranca.php");
include_once("../bd.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
    </head>
    <?php
    $id = $_POST["id"];
    $nome = $_POST["nome"];
    $descricao = $_POST["descricao"];
    $preco = $_POST["preco"];
    $tag = $_POST["tag"];
    $imagem = $_POST['arquivo'];
    $categoria = $_POST["categoria_id"];
    $situacao = $_POST["situacao_id"];
    $qtd = $_POST["qtd"];
    $quer = mysql_query("INSERT INTO `produtos`(`nome`, `descricao`, `preco`, `tag`, `imagem`, `criacao`, `situacao_id`, `categoria_id`, `qtd`) VALUES ('$nome', '$descricao', '$preco', '$tag', '$imagem', NOW(), '$situacao', '$categoria', '$qtd')");
    if (mysql_affected_rows() != 0) {
        echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=".$urlSite."/adm/administrativo.php?link=4'>
				<script type=\"text/javascript\">
					alert(\"Promoção adicionada com Sucesso.\");
				</script>
			";
    } else {
        //Upload não efetuado com sucesso, exibe a mensagem
        echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=".$urlSite."/adm/administrativo.php?link=4'>
				<script type=\"text/javascript\">
					alert(\"Promoção não foi adicionada com Sucesso.\");
				</script>
			";
    }
    ?>
</body>
</html>