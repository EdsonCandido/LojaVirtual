<?php
include_once("/adm/bd.php");
$cat = $_GET['cat'];
$query_cate = mysql_query("SELECT * FROM `categorias` WHERE id='$cat'");
$nome = mysql_fetch_assoc($query_cate);
?>
<div class="container">   
    <div class="row">
         <div class="container theme-showcase">
            <div class="page-header">
                <h1><?php echo $nome['nome']; ?></h1>
            </div>
        </div>
        <div class="container">
            <div class="row"> 
                <div class="col-xs-12">
                    <?php
                    $query_pro = mysql_query("SELECT * FROM produtos WHERE categoria_id = '$cat'");
                    /* @var $query_pro type */
                    while ($linhas = mysql_fetch_array($query_pro)) {
                        $fotos = $linhas['imagem'];
                        ?> 
                        <div class="col-sm-4"> 
                            <div class="panel panel-primary">
                                <div class="panel-heading"><?php echo $linhas['nome']; ?></div>
                                <div class="panel-body img-responsive"><img src="<?php echo "img/$fotos"; ?> " style="width: 100%" alt="Image"></div>
                                <div class="panel-footer">
                                    <a href="usuario.php?link=6&idProduto=<?php echo $linhas['id']; ?>"><button type="button" class="btn btn-xs btn-success"> Comprar</button> </a>
                                    <a href="usuario.php?link=6&idProduto=<?php echo $linhas['id']; ?>"><button type="button" class="btn btn-xs btn-success">.<samp class="glyphicon glyphicon-shopping-cart" > </samp>. </button> </a>
                                    <h4 class="pull-right" style="margin-top: 2px;">R$<?php echo number_format($linhas['preco'], 2, ",", "."); ?></h4>
                                </div>
                            </div>
                        </div>
                    <?php } ?></div>
            </div>
        </div>
    </div>
</div>