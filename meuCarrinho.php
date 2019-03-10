<?php
include_once("adm/bd.php");

if(isset($_GET['idProdutoCarrinho'])){
	$idproas = $_GET['idProdutoCarrinho'];	
	$qt = mysql_query("SELECT * FROM produtos WHERE id='$idproas'");
	$lista = mysql_fetch_assoc($qt);
	if( $_SESSION['produtos_'.$_GET['idProdutoCarrinho']] != $lista['qtd']){
		$_SESSION['produtos_'.$_GET['idProdutoCarrinho']] += '1';
	}
	
}
if(isset($_GET['menos'])){
	$_SESSION['produtos_'.$_GET['menos']] -- ; 
}
?>
<div class="container">
	<div class="row">
		<div class="col-xs-12">
			<div class="panel panel-info">
				<div class="panel-body">
					
					<?php 

					if($_SESSION){
						foreach ($_SESSION as $nome => $quatidadeProdutos) {
							if($quatidadeProdutos > 0){
								if(substr($nome, 0,9) == 'produtos_'){
									$id = substr($nome, 9, (strlen($nome) - 9));

									$query = mysql_query("SELECT * FROM  produtos WHERE id='$id'");
									while ($listaProdutos = mysql_fetch_assoc($query)) {

										$subTota = $quatidadeProdutos * $listaProdutos['preco'];

										?>
										<div class="row">
											<div class="col-xs-6">
												<h4 class="product-name"><strong><?php echo $listaProdutos['nome']; ?></strong></h4>
											</div>
											<div class="col-xs-6">
												<div class="col-xs-10 text-right">
													<h6><strong><?php echo number_format($listaProdutos['preco'], 2, ",", "."); ?> <span class="text-muted">x <?php echo $quatidadeProdutos; ?></span></strong></h6>
													<a href="usuario.php?link=8&menos=<?php echo $id; ?>"><button type="button" class="btn btn-link btn-xs">
														<span class="glyphicon glyphicon-trash"> </span>
													</button></a>
												</div>
												<div class="col-xs">

												</div>
											</div>
										</div>
										<hr>
										<?php 
									}
								}
								$Total += $subTota;	
							}
						}
						?>
						<div class="row">
							<div class="text-center">
								<div class="col-xs-7">
									<a href="/usuario.php?link=1"><button class="btn btn-default"> Adicionar mais itens</button></a>
								</div>
							</div>
						</div>
					</div>
					<?php if ($Total == 0) { ?>
						<div class="alert alert-info">
							Seu carrinho de compras ainda está vazio
						</div>
					<?php }else{ ?>
						<div class="panel-footer">
							<div class="row text-center">
								<div class="col-xs-5">
									<h4 class="">Total <strong><?php echo number_format($Total, 2, ",", "."); ?></strong></h4>
								</div>
								<div class="col-xs-6">
									<button type="button" class="btn btn-success btn-block">
										Comprar Tudo
									</button>
								</div>
							</div>
						</div>
						<?php
					}
				}
				?>
			</div>
		</div>
	</div>
</div>