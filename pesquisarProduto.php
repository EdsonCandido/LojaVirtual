<?php
include_once("adm/processo/seguranca.php");

include_once("adm/bd.php");

$pesquisaProduto = $_POST['pesquisaProduto'];


?>

<hr>
<footer class="container-fluid text-center">
  <p>SuperComprasBye</p>  
  <form class="form-inline" method="POST" action="usuario.php?link=9&pesquisaProduto">
    <div class="input-group">
        <input type="text" class="form-control" name="pesquisaProduto" placeholder="Pesquisar por Produto">
        <div class="input-group-btn">
          <button class="btn btn-default btn-vermelho" type="submit">
            <i class="glyphicon glyphicon-search"></i>
        </button>
    </div>
</div>
</form>
</footer>