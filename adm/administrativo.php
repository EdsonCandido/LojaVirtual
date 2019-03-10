<?php 
session_start();
include_once("seguranca.php");
include_once("bd.php");
error_reporting(0);  
?>
<!DOCTYPE html>
<html>
<head>
	<title>Administração</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<?php 
		include_once("menu_admin.php");
		//AQUI FAZIA ALGUMA COISA, MAS COMO EU DORMIR NÃO SEI MAIS. (+_+)
		$link = $_GET["link"];
		//PÁGINA PÁDRÃO DO USUÁRIO
		$pagina[1] = "bem_vindo.php"; 
		//SESSÃO USUARIOS
		$pagina[2] = "listar_usuarios.php";
		$pagina[3] = "cadastrar_usuario.php";
		$pagina[6] = "editar_usuario.php";
		$pagina[7] = "visualizar_usuario.php";
		//SESSÃO PRODUTOS
		$pagina[4] = "listar_produtos.php";
		$pagina[5] = "cadastrar_produtos.php";
		$pagina[12] = "visualizar_produto.php";
		$pagina[13] = "editar_produtos.php";
		//SESSÃO CATEGORIAS		
		$pagina[8] = "cadastrar_categorias.php";
		$pagina[9] = "listar_categorias.php";
		$pagina[10] = "editar_categorias.php";
		$pagina[11] = "visualizar_categoria.php";
		//SESSÃO SITUAÇÕES
		$pagina[14] = "listar_situacoes.php";
		$pagina[15] = "cadastrar_sistuacoes.php";
        //SESSÃO DAS ENQUETES PARA PROMOÇÕES
        $pagina[16] = "cadastrar_promocoes.php";
        $pagina[17] = "listar_promocoes.php";
        $pagina[18] = "adicionar_loja_promocoes.php";
		
		
		if(!empty($link)){
			if(file_exists($pagina[$link])){
				include $pagina[$link];
			}else{
				include ("bem_vindo.php");
			}
			
		}else{
			include ("bem_vindo.php");
		}
	?>
			<br>
			<nav class="navbar navbar-default navbar-fixed-bottom">
				
			</nav>
		</body>
		</html>