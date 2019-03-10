<div class="container">
	<div class="page-header">
			<h1><span class="glyphicon glyphicon-list-alt"></span> Cadastro de Usuários</h1>
	</div>
	<form action="processo/cadastro_usuario.php" method="POST">
		<div class="form-group">
			<label>Nome do Usuario:</label>
			<input type="text" class="form-control" name="nome" placeholder="Digite o nome completo" required>
		</div>
		<div class="form-group">
			<label>Nome da Loja:</label>
			<input type="text" class="form-control" name="NomeLoja" placeholder="Digite o nome da Loja" required>
		</div>
		<div class="form-group">
			<label>Email:</label>
			<input type="email" class="form-control" name="email" placeholder="Digite o Email" required>
		</div>
		<div class="form-group">
			<label>Confirmação de Email:</label>
			<input type="email" class="form-control" name="ConfirEmail" placeholder="Digite o Email" required>
		</div>
		<div class="form-group">
			<label>Senha:</label>
			<input type="password" class="form-control" name="senha" placeholder="Digite a senha" required>
		</div>
		<div class="form-group">
			<label >Confirmação de Senha:</label>
			<input type="password" class="form-control" name="ConfirSenha" placeholder="Digite a senha" required>
		</div>
		<div class="form-group col-sx-3">
			<label>Nivel de Acesso</label>
			<select name="nivel_acesso" class="form-control">
				<option>...</option>
				<option value="2">Vendendor Atacado</option>
				<option value="3">Comprador </option>
			</select>
		</div>
		<br>
		<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Cadastrar</button>
		<br>
	</form>
</div>
<br><br><br><br>