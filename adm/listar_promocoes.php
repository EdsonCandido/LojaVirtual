<?php
$resultado = mysql_query("SELECT * FROM produtos_votacao ORDER BY 'id'");
$linhas = mysql_num_rows($resultado);
?>
<div class="container theme-showcase">
    <div class="page-header">
        <h1>Lista de Promoções</h1>
    </div>
    <div class="col-lg-10">
        <div class="table">
            <table class="table">
                <thead>
                    <tr>

                        <th><span class="glyphicon glyphicon-font"></span> Nome do Produto</th>
                        <th><span class="glyphicon glyphicon-usd"></span> Preço</th>
                        <th><span class="glyphicon glyphicon-wrench"></span> Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($linhas = mysql_fetch_array($resultado)) {
                        echo "<tr>";

                        echo "<td>" . $linhas['nome'] . "</td>";
                        echo "<td>" . $linhas['preco'] . "</td>";
                        ?> 
                    <td>
                        <a href="processo/apagar_produto_promocao.php?id=<?php echo $linhas['id']; ?>"><button type="button" class="btn btn-xs btn-danger"> Apagar</button> </a>
                        <a href="administrativo.php?link=18&id=<?php echo $linhas['id']; ?>"><button type="button" class="btn btn-xs btn-danger"> Adicionar Promoção</button> </a>
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
