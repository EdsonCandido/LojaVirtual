<?php
include_once("/adm/bd.php");
$query_cate = mysql_query("SELECT * FROM `categorias` ");
?>
<div class="container">   
    <div class="row">
       <div class="container theme-showcase">
        <div class="page-header">
            <h3>Categorias</h3>
        </div>
        <div class="container">
          <ul class="nav nav-pills nav-stacked">
            <?php while ($categoria = mysql_fetch_array($query_cate)) {  ?>
                <li role="presentation"><a href="usuario.php?link=5&cat=<?php echo $categoria['id']; ?>"><?php echo $categoria['nome']; ?></a></li>
            <?php } ?>
          </ul>
      </div>
  </div>