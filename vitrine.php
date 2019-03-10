<div class="container">    
    <div class="row">
        <div class="container ">
            <h3>Minhas Ofertas </h3>
            <a href="usuario.php?link=7" class="btn btn-info btn-lado" role="button">Categorias</a>
            <hr>
        </div>
        
        
        <div class="container">
            <div class="row"> 
                <div class="col-xs-12">

                   <?php
                   /*<!-- PÁGINAÇÃO -->*/
                   $pagina  = (isset($_GET['pagina']))? $_GET['pagina'] : 1;
                   $resultadoProduto = mysql_query("SELECT * FROM produtos ");
                   $totalProdutos = mysql_num_rows($resultadoProduto);
                   $qtdPagina = 8;
                   $numPagina = ceil($totalProdutos/$qtdPagina);
                   $inicio = ($qtdPagina*$pagina)-$qtdPagina;

                   $resultadoProdutos = mysql_query("SELECT * FROM produtos LIMIT $inicio, $qtdPagina ");
                   $totalProdutos = mysql_num_rows($resultadoProdutos);
                   echo "<!-- PRODUTOS  -->";
                   while ($linhas = mysql_fetch_array($resultadoProdutos)) {
                    $fotos = $linhas['imagem'];?> 

                    <div class="row panel panel-primary">
                        <div class="col-xs-6 col-md-3">
                            <a href="#" class="thumbnail">
                                <img src="<?php echo "img/$fotos"; ?> " alt="...">
                            </a>
                        </div>
                        <div class="card-body">
                            <h3 class="card-title"> <?php echo $linhas['nome']; ?></h3>
                            <h4>R$<?php echo number_format($linhas['preco'], 2, ",", "."); ?></h4>

                        </div>
                        <div class="">
                            <a href="usuario.php?link=6&idProduto=<?php echo $linhas['id']; ?>"><button type="button" class="btn btn-sm btn-success"> Comprar</button> </a>
                            <a href="usuario.php?link=8&idProdutoCarrinho=<?php echo $linhas['id']; ?>"><button type="button" class="btn btn-sm btn-success"><samp class="glyphicon glyphicon-shopping-cart" > </samp> </button> </a>
                        </div>
                    </div>

                <?php } ?>
            </div>
        </div>
        <?php 
        $pagAnterior = $pagina - 1; 
        $pagPosterior = $pagina + 1; 
        ?>
        <nav class="text-center">
            <ul class="pagination">
                <li>
                    <?php 
                    if($pagAnterior != 0){ ?>
                        <a href="usuario.php?pagina=<?php echo $pagAnterior; ?>" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a> 
                    <?php  }else{ ?>
                        <span aria-hidden="true">&laquo;</span>
                    <?php }           ?>

                </li>
                <?php 
                for ($i=1; $i < $numPagina + 1 ; $i++) {  ?>
                    <li><a href="usuario.php?pagina=<?php echo $i; ?>"><?php echo $i; ?></a></li>

                <?php } ?>

                <li>
                    <?php 
                    if($pagPosterior <= $numPagina){ ?>
                        <a href="usuario.php?pagina=<?php echo $pagPosterior; ?>" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a> 
                    <?php  }else{ ?>
                        <span aria-hidden="true">&raquo;</span>
                    <?php }           ?>

                </li>
            </ul>
        </nav>
    </div>


    <!-- PARTE DA VOTAÇÃO DO BAGULHO ACULA QUE FIZ ONTEM -->

    <div class="container">
        <h2>Ofertas em Voatção </h2>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <?php
                $query_votosr = mysql_query("SELECT * FROM `produtos_votacao` ORDER BY (id)");
                $cas = 0;
                while ($linhas = mysql_fetch_array($query_votosr)) {
                    ?>
                    <li data-target="#myCarousel" data-slide-to="<?php if ($cas == 0) {
                        echo $cas;
                    }
                    ?>" <?php if ($cas == 0) {
                        echo 'class="active"';
                    }
                    ?>></li>
                <?php } ?>
            </ol>

            <!-- Wrapper for slides -->


            <div class="carousel-inner">
                <?php
                $query_votos = mysql_query("SELECT * FROM `produtos_votacao` ORDER BY (id)");
                $casd = 0;
                while ($linhas = mysql_fetch_array($query_votos)) {
                    $fotos = $linhas['imagem'];
                    ?>
                    <div class="item <?php
                    if ($casd == 0) {
                        echo 'active';
                    }
                    ?>">
                    <img src="<?php echo "img/" . $fotos; ?>" style="width:100%;">
                    <div class="carousel-caption">
                        <h3><?php echo $linhas['nome']; ?></h3>
                        <span class="text-warning">&#9733; &#9733; &#9733; &#9733; &#9734;</span>
                        4.0 stars   
                    </div>
                </div>
                <?php $casd++;}?>
            </div>
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Anterior</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Próxima</span>
            </a>
        </div>
    </div>

</div>
</div>
