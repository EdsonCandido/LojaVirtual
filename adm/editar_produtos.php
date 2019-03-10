<?php
    $id = $_GET['id'];
    $result = mysql_query("SELECT * FROM produtos WHERE id= '$id' LIMIT 1");
    $resultado = mysql_fetch_assoc($result);
    $id_produto = $resultado['id'];
?>
<div class="container">
    <div class="row">
        <div class="page-header">
            <h1><span class="glyphicon glyphicon-list-alt"></span> Editar Produto</h1>
        </div>
        <form action="processo/edita_produto.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label>Nome do Produto:</label>
                <input value="<?php echo $resultado['nome']; ?>" type="text" class="form-control" name="nome" placeholder="Nome do Produto" required>
            </div>
            <div class="form-group">
                <label>Discrição do Produto:</label>
                <textarea class="form-control"  rows="3" name="descricao" placeholder="Descrição do Produto" id="comment"><?php echo $resultado['descricao'] ?></textarea>
            </div>
             <div class="form-group">
                <label>Preço do Produto:</label>
                <input type="text" class="form-control" value="<?php echo $resultado['preco']; ?>" name="preco" placeholder="Preço do Produto" required>
            </div>
            <div class="form-group">
                <label>Tag para ajudar na pesquisa do Produto:</label>
                <input value="<?php echo $resultado['tag']; ?>" type="text" class="form-control" name="tag" placeholder="Tag" required>
            </div>
            <?php
            $fotos = $resultado['imagem'];
            if ($fotos == "") {
                ?>
                <div class='form-group'>
                    <div class='container'>
                        <div class='row'>
                          <div class='alert alert-warning col-xs-4'>
                            <strong>Atenção:</strong> Esse produto não contem imagem!
                         </div>
                         </div>
                    </div>
                </div>
                <div class="form-group">
                <label  class="control-label">Foto do Produto</label>
                <input name="arquivo" type="file"/> <br>
          </div>
                <?php
            }
            if ($fotos != "") {
                ?>
                        <div class="form-group">
                            <label>Imagem Antiga do Produto</label>
                            <br>
                            <button type="button" class="btn btn-info btn-xs" id="myBtn">Ver imagem</button>
                            <input type="hidden" name="img_antiga" value="<?php echo $fotos; ?>">
                             <div id="myModal" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title"><?php echo $resultado['nome']; ?></h4>
                                </div>
                                <div class="modal-body">
                                    <img src="<?php echo "../img/$fotos"; ?>" class="img-responsive" >
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
                <script>
                    $(document).ready(function () {
                        $("#myBtn").click(function () {
                            $("#myModal").modal();
                        });
                    });
                </script>
            <?php } ?>
			 <div class="form-group">
                <label>Quantidade de Itens no Estoque:</label>
                <input value="<?php echo $resultado['qtd']; ?>" type="number" class="form-control" name="qtd" placeholder="Quantidade" required>
            </div>
           <?php $categoria_id = $resultado['categoria_id'];  ?>
            <div class="form-group col-sx-3">
                <label>Categoria</label>
                <select name="categoria_id" class="form-control">
                    <option >...</option>
                  <?php 
                        $result_cat =mysql_query("SELECT * FROM categorias");
                        while($dados = mysql_fetch_assoc($result_cat)){
                            $id_categoria = $dados['id'];
                            ?>
                                <option value="<?php echo $dados["id"]; ?>"<?php if($id_categoria == $categoria_id){ echo 'selected'; } ?>
                                ><?php echo $dados["nome"];?></option>
                            <?php
                        }
                    ?>
                </select>
            </div>
          <?php $situacao_id = $resultado['situacao_id'];?>
            <div class="form-group col-sx-3">	
                <label>Situação</label>
                <select name="situacao_id" class="form-control">
                   <option>...</option>
                  <?php 
                        $result_sit =mysql_query("SELECT * FROM situacao");
                        while($dados = mysql_fetch_assoc($result_sit)){
                            $id_situacao = $dados['id'];
                            ?>
                                <option value="<?php echo $dados["id"]; ?>"
                                <?php if($id_situacao == $situacao_id){ echo 'selected'; } ?>
                                ><?php echo $dados["nome"];?></option>
                            <?php
                        }
                    ?>
                </select>
            </div>
            <br>
            <input type="hidden" name="id" value="<?php echo $id_produto; ?>">
            <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Editar </button>
            <br>
        </form>
    </div>
</div>
<br><br><br>