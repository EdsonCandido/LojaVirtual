  <?php 
  $resultado = mysql_query("SELECT * FROM situacao ORDER BY 'id'");
  $linhas = mysql_num_rows($resultado);
  ?>
  <div class="container theme-showcase">
    <div class="page-header">
      <h1>Lista de Situações</h1>
    </div>
	<div class="row espaco">
		<div class="pull-right">
			<a href='administrativo.php?link=15&id=<?php echo $resultado['id']; ?>'><button type='button' class='btn btn-sm btn-success'>Cadastrar</button></a>				
		</div>
	</div>
    <div class="row">
      <div class="col-lg-10">
        <div class="table">
          <table class="table">
            <thead>
              <tr>
                <th><span class="glyphicon glyphicon-bookmark"></span> Situações Possíveis</th>
                  <th><span class="glyphicon glyphicon-wrench"></span> Ações</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                while($linhas = mysql_fetch_array($resultado)){
                  echo "<tr>";
                  echo "<td>".$linhas['nome']."</td>";
                  ?> 
                  <td>
                   <a href="processo/apagar_situacao.php?id=<?php echo $linhas['id']; ?>"><button type='button' class='btn btn-xs btn-danger'>Apagar</button></a>
                    <?php
                  echo "<tr>";
                }
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <br>