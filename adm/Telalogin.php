<?php session_start();  ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login - Atacado Coletivo</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<?php 
	unset(
		$_SESSION['usuarioNome'],
		$_SESSION['usuarioNivelAcesso'],
		$_SESSION['usarioEmail']
	);
	?>
	<div class="container">
	<form class="form-signin">
				<?php 
				if(isset($_SESSION['loginErro'])){?>
				<div class="alert alert-danger">
				<p class="text-center"><?php
					echo $_SESSION['loginErro'];
					unset($_SESSION['loginErro']);
				}
				?>
			</p>
			</div>
		</form>

		<form class="form-signin" method="POST" action="login.php" autocomplete="off">
			<h2 class="form-signin-heading text-center">Login</h2><br>
			<input type="email" name="email" id="inputEmail" class="form-control" placeholder="Digite o Email " required autofocus>
			<br>
			<input name="senha" type="password" id="inputPassword" class="form-control" placeholder="Digite a Senha" required>
			
			<button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button><br>
		</form>
		<form class="form-signin">
			<div class="alert alert-info">
 				<a href="../CadastrarCliente.php"><p class="text-center"><u>Você é novo aqui ?<strong> Cadastre-se </strong></u> </p></a>
			</div>
		</form>
		
	</div>
	<script type="text/javascript" href="js/bootstrap.js"></script>
</body>
</html>