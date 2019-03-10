  <?php 
  $resultado = mysql_query("SELECT * FROM usuarios ORDER BY 'id'");
  $linhas = mysql_num_rows($resultado);
  ?>
  <div class="container theme-showcase">
    <div class="page-header">
      <h1>Lista de Usuários</h1>
    </div>
    <div class="row">
      <div class="col-lg-10">
        <div class="table">
          <table class="table">
            <thead>
              <tr>
                <th><span class="glyphicon glyphicon-stats"></span> ID</th>
                <th><span class="glyphicon glyphicon-user"> Nome</th>
                  <th><samp class="glyphicon glyphicon-folder-open"></samp> Nivel de Acesso</th>
                  <th><span class="glyphicon glyphicon-map-marker"></span> Nome da Loja</th>
                  <th><samp class="glyphicon glyphicon-wrench"></samp> Ações</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                while($linhas = mysql_fetch_array($resultado)){
                  echo "<tr>";
                  echo "<td>".$linhas['id']."</td>";
                  echo "<td>".$linhas['nome']."</td>";
                  echo "<td>".$linhas['nivel_de_acesso_id']."</td>";
                  echo "<td>".$linhas['NomeLoja']."</td>";
                  ?> 
                  <td><a href="administrativo.php?link=7&id=<?php echo $linhas['id']; ?>"><button type='button' class='btn btn-xs btn-info'>Visualizar</button></a>
                   <a href="administrativo.php?link=6&id=<?php echo $linhas['id']; ?>"><button type='button' class='btn btn-xs btn-warning'>Editar</button></a>
                   <a href="processo/apagar_usuario.php?id=<?php echo $linhas['id']; ?>"><button type='button' class='btn btn-xs btn-danger'>Apagar</button><a/>
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