<?php 
	$id = $_GET['id'];
	$result = mysql_query("SELECT * FROM categorias WHERE id= '$id' LIMIT 1");
	$resultado = mysql_fetch_assoc($result);
 ?>
<div class="container">
	<div class="row">
	<div class="page-header">
			<h1><span class="glyphicon glyphicon-list-alt"></span> Editar Categorias</h1>
	</div>
	<form action="processo/edita_categoria.php" method="POST">
		<div class="form-group">
			<label>Nome da Categoria:</label>
			<input type="text" class="form-control" name="nome" value="<?php echo $resultado['nome']; ?>" placeholder="Nome da Categoria" required>
		</div>
		<input type="hidden" name="id" value="<?php echo $resultado['id']; ?>">
		<br>
		<button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-floppy-disk"></span> Modificar</button>
		<br>
	</form>
</div>
</div>
<br><br><br><br>