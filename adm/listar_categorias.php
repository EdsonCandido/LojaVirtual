<?php 
$resultado = mysql_query("SELECT * FROM categorias ORDER BY 'id'");
$linhas = mysql_num_rows($resultado);
?>
<div class="container theme-showcase">
	<div class="page-header">
		<h1>Lista de Categorias</h1>
	</div>
	<div class="col-lg-10">
		<div class="table">
			<table class="table">
				<thead>
					<tr>
						<th><span class="glyphicon glyphicon-stats"></span> ID</th>
						<th><span class="glyphicon glyphicon-tags"></span> Nome da Categoria</th>
					</tr>
				</thead>

				<tbody>
					<?php 
						while($linhas = mysql_fetch_array($resultado)){
							echo "<tr>";
							echo "<td>".$linhas['id']."</td>";
							echo "<td>".$linhas['nome']."</td>";
							?> 
							<td><a href="administrativo.php?link=11&id=<?php echo $linhas['id']; ?>"><button type='button' class='btn btn-xs btn-info'>Visualizar</button></a>
								<a href="administrativo.php?link=10&id=<?php echo $linhas['id']; ?>"><button type='button' class='btn btn-xs btn-warning'>Editar</button> </a>
								<a href="processo/apagar_categoria.php?id=<?php echo $linhas['id']; ?>"><button type="button" class="btn btn-xs btn-danger"> Apagar</button> </a>
								<?php
								echo "<tr>";
						}
						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<br>
