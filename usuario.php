<?php
session_start();
include_once ("adm/bd.php");
include_once("adm/seguranca.php");
error_reporting(0);  
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Atacado Coletivo</title>
    <meta name="ZUKO" content="Loja Virtual">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/styler.css">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>

    <?php 
    include_once("menu_usuario.php");
		//AQUI FAZIA ALGUMA COISA, MAS COMO EU DORMIR NÃO SEI MAIS. (+_+)
    $link = $_GET["link"];
		//PÁGINA PÁDRÃO DO USUÁRIO
    $pagina[1] = "vitrine.php";
    $pagina[2] = "perfil.php";
    $pagina[3] = "historico.php";
    $pagina[4] = "usando.php";
    $pagina[5] = "categoria.php";
    $pagina[6] = "produtoSelecionado.php";
    $pagina[7] = "categorias.php";
    $pagina[8] = "meuCarrinho.php";
    $pagina[9] = "pesquisarProduto.php";


    if(!empty($link)){
       if(file_exists($pagina[$link])){
        include $pagina[$link];
    }else{
        include ("vitrine.php");
    }
}else{
   include ("vitrine.php");
}
?>
       <!-- <div class="container">    
            <div class="row">
                <div class="col-sm-4">
                    <div class="panel panel-primary">
                        <div class="panel-heading">MELHORES DESCONTOS</div>
                        <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
                        <div class="panel-footer">Compre Gratis</div>
                    </div>
                </div>
                <div class="col-sm-4"> 
                    <div class="panel panel-danger">
                        <div class="panel-heading">MELHORES DESCONTOS</div>
                        <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
                        <div class="panel-footer">Compre Gratis</div>
                    </div>
                </div>
                <div class="col-sm-4"> 
                    <div class="panel panel-success">
                        <div class="panel-heading">MELHORES DESCONTOS</div>
                        <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
                        <div class="panel-footer">Compre Gratis</div>
                    </div>
                </div>
            </div>
        </div><br>
    </div>-->
</br>

</br>
</body>
</html>