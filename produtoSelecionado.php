<?php
include_once("adm/bd.php");
$idProduto = $_GET['idProduto'];
$query_prod = mysql_query("SELECT * FROM `produtos` WHERE id='$idProduto'");
$pesquisa = mysql_fetch_assoc($query_prod);
?>
<div class="container">
	<div class="row">
		<div class="container">
			<div class="container theme-showcase">
				<div class="page-header">
					<h2> <?php echo $pesquisa['nome']; ?></h2>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row"> 
				<div class="col-xs-12">
					<div class="col-lg-9">
						<div class="card">
							<img class="img-responsive" src="<?php echo "img/".$pesquisa['imagem']; ?>" alt="">
							<div class="card-body">
								<h3 class="card-title"> <?php echo $pesquisa['nome']; ?></h3>
								<h4><?php echo "R$". number_format($pesquisa['preco'], 2, ",", "."); ?></h4>
								<hr>
								<p class="card-text"> Descrição: <?php echo $pesquisa['descricao']; ?></p>
							</div>
						</div>
					</div>
					<div class="panel-footer">
						<a href="usuario.php?idProdutoCarrinho=<?php echo $linhas['id']; ?>"><button type="button" class="btn btn-sm btn-success"><samp class="glyphicon glyphicon-shopping-cart" > </samp> </button> </a>
					</div>
				</div>
			</div>
		</div>
	</br></br>
</div>
</div>