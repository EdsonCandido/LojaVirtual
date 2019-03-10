<nav class="navbar navbar-default">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>                        
			</button>
			<a class="navbar-brand" href="administrativo.php?link=1">HOME</a>
		</div>
		<div class="collapse navbar-collapse" id="myNavbar">
			<ul class="nav navbar-nav">
				<li class=""><a href="../usuario.php">Página de Vendas</a></li>
				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">Clientes
						<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="administrativo.php?link=2"> Listar Usuários</a>
							<li><a href="administrativo.php?link=3"> Cadastrar Usuários</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#">Produtos
								<span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="administrativo.php?link=4"> Listar Produtos</a></li>
									<li><a href="administrativo.php?link=5"> Cadastrar Produtos</a></li>
								</ul>
							</li>
							<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#">Categorias
								<span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="administrativo.php?link=9"> Listar Categorias</a></li>
									<li><a href="administrativo.php?link=8"> Cadastrar Categorias</a></li>
								</ul>
							</li>
							<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#">Configurações
								<span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="administrativo.php?link=14"> Listar Situações</a></li>
									<li><a href="administrativo.php?link=15"> Cadastrar Sistuações</a></li>
								</ul>
							</li>
                                                        <li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#">Ofertas de Promoções
								<span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="administrativo.php?link=17"> Listar Promoções</a></li>
									<li><a href="administrativo.php?link=16"> Cadastrar Promoção</a></li>
                                                                        <li><a href="administrativo.php?link=18"> Adicionar Promoção à Página de vendas</a></li>
								</ul>
							</li>
						</ul>
						<ul class="nav navbar-nav navbar-right">
							<li><a href="#"><span class="glyphicon glyphicon-user"></span> 
								<?php 
								echo $_SESSION['usuarioNome'];
								?>
							</a></li>
							<!--<a href="Telalogin.php">Login</a>-->
							<li><a href="sair.php"><span class="glyphicon glyphicon glyphicon-off"></span> Sair</a></li>
						</ul>
					</div>
				</div>
			</nav>