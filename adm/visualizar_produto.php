<?php 
$id = $_GET['id'];
$result =  mysql_query("SELECT * FROM produtos WHERE id ='$id' LIMIT 1");
$resultado = mysql_fetch_assoc($result);
?>
<div class="container">
	<div class="page-header">
		<h1><span class="glyphicon glyphicon-list-alt"></span> Visualizar Produtos</h1>
	</div>
	<div class="row">
		<div class="pull-right">
			<a href="administrativo.php?link=4"><button type='button' class='btn btn-info'>Listar</button></a>
			<a href="administrativo.php?link=13&id=<?php echo $resultado['id']; ?>"><button type='button' class='btn btn-warning'>Editar</button></a>
			<a href="processo/apagar_produto.php?id=<?php echo $resultado['id']; ?>"><button type='button' class='btn btn-danger'>Apagar</button><a/>;
			</div>
		</div>
		<br>
		<div class="row">
			<ul class="list-group">
				<li class="list-group-item"><span class="glyphicon glyphicon-stats"></span> ID: <?php echo $resultado['id']; ?></li>
				<li class="list-group-item"><span class="glyphicon glyphicon-stats"></span> Nome: <?php echo $resultado['nome']; ?></li>
				<li class="list-group-item"><span class="glyphicon glyphicon-calendar"></span> Data de Criação: <?php echo $resultado['criacao']; ?></li> 
				<li class="list-group-item"><span class="glyphicon glyphicon-calendar"></span> Data de Modificação: <?php echo $resultado['modificacao']; ?></li> 
				<li class="list-group-item"> Imagem do Produto : <button type="button" class="btn btn-info btn-xs" id="myBtn">Ver imagem</button>
			<div id="myModal" class="modal fade" role="dialog">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title"><?php echo $resultado['nome']; ?></h4>
						</div>
						<div class="modal-body">
							<?php $fotos = $resultado['imagem']; ?>
							<img src="<?php echo "../img/$fotos"; ?> " class="img-responsive">
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
						</div>
					</div> 
				</div>
			</div>
				</li>
			</ul>
		</div>
		
		<script>
			$(document).ready(function () {
				$("#myBtn").click(function () {
					$("#myModal").modal();
				});
			});
		</script>
	</div>
	<br><br>