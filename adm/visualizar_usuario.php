<?php 
$id = $_GET['id'];
$result =  mysql_query("SELECT * FROM usuarios WHERE id ='$id' LIMIT 1");
$resultado = mysql_fetch_assoc($result);
?>
<div class="container">
	<div class="page-header">
		<h1><span class="glyphicon glyphicon-list-alt"></span> Visualizar Usuário</h1>
	</div>
	<div class="row">
		<div class="pull-right">
			<a href="administrativo.php?link=2"><button type='button' class='btn btn-info'>Listar</button></a>
			<a href="administrativo.php?link=6&id=<?php echo $resultado['id']; ?>"><button type='button' class='btn btn-warning'>Editar</button></a>
			<a href="processo/apagar_usuario.php?id=<?php echo $resultado['id']; ?>"><button type='button' class='btn btn-danger'>Apagar</button><a/>;
			</div>
		</div>
		<br>
		<div class="row">
			<ul class="list-group">
				<li class="list-group-item list-group-item-info"></li>
				<li class="list-group-item"><span class="glyphicon glyphicon-stats"></span> ID: <?php echo $resultado['id']; ?></li>
				<li class="list-group-item"><span class="glyphicon glyphicon-stats"></span> Nome: <?php echo $resultado['nome']; ?></li>
				<li class="list-group-item"><span class="glyphicon glyphicon-envelope"></span> E-mail: <?php echo $resultado['email']; ?></li> 
				<li class="list-group-item"><span class="glyphicon glyphicon-folder-open"> </span> Nível de Acesso: <?php echo $resultado['nivel_de_acesso_id']; ?></li> 
				<li class="list-group-item"><span class="glyphicon glyphicon-map-marker"></span> Nome da Loja: <?php echo $resultado['NomeLoja']; ?></li> 
				<li class="list-group-item"><span class="glyphicon glyphicon-calendar"></span> Data de Criação: <?php echo $resultado['criacao']; ?></li> 
			</ul>
		</div>
	</div>

	<br><br>