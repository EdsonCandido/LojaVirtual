<div class="container">
    <div class="row">
        <div class="page-header">
            <h1><span class="glyphicon glyphicon-list-alt"></span> Cadastrar Produto Para Promção</h1>
        </div>
        <form method="POST" action="processo/cadastro_produto_promocao.php" enctype="multipart/form-data">
            <div class="form-group">
                <label>Nome do Produto:</label>
                <input type="text" class="form-control" name="nome" placeholder="Nome do Produto" required>
            </div>

            <div class="form-group">
                <label for="exampleInputFile">Imagem do Produto</label>
                <input  type="file" name="arquivo">
            </div>
            <div class="form-group">
                <label>Preço do Produto:</label>
                <input type="text" class="form-control" name="preco" placeholder="Preço do Produto" required>
            </div>     
            <br>
            <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-floppy-disk"></span> Cadastrar</button>
            <br>
        </form>
    </div>
</div>
<br><br><br><br>