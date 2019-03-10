<?php 
	$id = $_GET['id'];
	$result = mysql_query("SELECT * FROM usuarios WHERE id= '$id' LIMIT 1");
	$resultado = mysql_fetch_assoc($result);
 ?>
<div class="container">
	<div class="row">
	<div class="page-header">
			<h1><span class="glyphicon glyphicon-list-alt"></span> Editar Usuário</h1>
	</div>
	<form action="processo/edita_usuario.php" method="POST">
		<div class="form-group">
			<label>Nome do Usuario:</label>
			<input type="text" class="form-control" name="nome" value="<?php echo $resultado['nome']; ?>" placeholder="Nome Completo" required>
		</div>
		<div class="form-group">
			<label>Nome da Loja:</label>
			<input type="text" class="form-control" name="NomeLoja" placeholder="Digite o nome da Loja" value="<?php echo $resultado['NomeLoja']; ?>"required>
		</div>
		<div class="form-group">
			<label>Email:</label>
			<input type="email" class="form-control" name="email" value="<?php echo $resultado['email']; ?>" placeholder="Digite o Email" required>
		</div>
		<input type="hidden" name="id" value="<?php echo $resultado['id'];?>">
		<div class="form-group col-sx-3">
			<label>Nivel de Acesso</label>
			<select name="nivel_acesso" class="form-control">
				<option>...</option>
				<option value="2" <?php if($resultado['nivel_de_acesso_id'] == 2){ echo 'selected';} ?>>Vendendor Atacado</option>
				<option value="3" <?php if($resultado['nivel_de_acesso_id'] == 3){ echo 'selected';} ?>>Comprador </option>
			</select>
		</div>
		<br>
		<button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-floppy-disk"></span> Cadastrar</button>
		<br>
	</form>
</div>
</div>
<br><br><br><br>