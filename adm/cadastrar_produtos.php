<div class="container">
    <div class="row">
        <div class="page-header">
            <h1><span class="glyphicon glyphicon-list-alt"></span> Cadastrar Produto</h1>
        </div>
        <form method="POST" action="processo/cadastro_produto.php" enctype="multipart/form-data">
            <div class="form-group">
                <label>Nome do Produto:</label>
                <input type="text" class="form-control" name="nome" placeholder="Nome do Produto" required>
            </div>
            <div class="form-group">
                <label>Discrição do Produto:</label>
                <textarea class="form-control" rows="3" name="descricao" placeholder="Descrição do Produto" id="comment"></textarea>
            </div>
            <div class="form-group">
                <label for="exampleInputFile">Imagem do Produto</label>
                <input  type="file" name="arquivo">
            </div>
            <div class="form-group">
                <label>Preço do Produto:</label>
                <input type="text" class="form-control" name="preco" placeholder="Preço do Produto" required>
            </div>
            <div class="form-group">
                <label>Tag para ajudar na pesquisa do Produto:</label>
                <input type="text" class="form-control" name="tag" placeholder="Discrição do Produto" required>
            </div>
            
            <div class="form-group">
                <label>Quantidade de Itens no Estoque:</label>
                <input type="number" class="form-control" name="qtd" placeholder="Quantidade No Estoque" required>
            </div>
            <div class="form-group col-sx-3">
                <label>Categorias</label>
                <select name="categoria_id" class="form-control">
                    <option selected>...</option>
                    <?php
                    $resultado = mysql_query("SELECT * FROM categorias");
                    while ($dados = mysql_fetch_assoc($resultado)) {
                        ?>
                        <option value="<?php echo $dados['id']; ?>">
                            <?php echo $dados['nome']; ?></option>
                    <?php } ?>
                </select>
            </div>
			
            <div class="form-group col-sx-3">
                <label>Situação</label>
                <select name="situacao_id" class="form-control">
                    <option selected>...</option>
                    <?php
                    $resultado = mysql_query("SELECT * FROM situacao");
                    while ($dados = mysql_fetch_assoc($resultado)) {
                        ?>
                        <option value="<?php echo $dados['id']; ?>">
                            <?php echo $dados['nome']; ?></option>
                    <?php } ?>
                </select>
            </div>

            <br>
            <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-floppy-disk"></span> Cadastrar</button>
            <br>
        </form>
    </div>
</div>
<br><br><br><br>