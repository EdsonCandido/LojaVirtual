<?php 
$id = $_GET['id'];
$result =  mysql_query("SELECT * FROM categorias WHERE id ='$id' LIMIT 1");
$resultado = mysql_fetch_assoc($result);
?>
<div class="container">
	<div class="page-header">
		<h1><span class="glyphicon glyphicon-list-alt"></span> Visualizar Categoria</h1>
	</div>
	<div class="row">
		<div class="pull-right">
			<a href="administrativo.php?link=9"><button type='button' class='btn btn-info'>Listar</button></a>
			<a href="administrativo.php?link=10&id=<?php echo $resultado['id']; ?>"><button type='button' class='btn btn-warning'>Editar</button></a>
			<a href="processo/apagar_categoria.php?id=<?php echo $resultado['id']; ?>"><button type='button' class='btn btn-danger'>Apagar</button><a/>;
			</div>
		</div>
		<br>
		<div class="row">
			<ul class="list-group">
				<li class="list-group-item list-group-item-info"></li>
				<li class="list-group-item"><span class="glyphicon glyphicon-stats"></span> ID: <?php echo $resultado['id']; ?></li>
				<li class="list-group-item"><span class="glyphicon glyphicon-stats"></span> Nome: <?php echo $resultado['nome']; ?></li>
				<li class="list-group-item"><span class="glyphicon glyphicon-calendar"></span> Data de Criação: <?php echo $resultado['criacao']; ?></li> 
				<li class="list-group-item"><span class="glyphicon glyphicon-calendar"></span> Data de Modificação: <?php echo $resultado['modificacao']; ?></li> 
			</ul>
		</div>
	</div>
	<br><br>