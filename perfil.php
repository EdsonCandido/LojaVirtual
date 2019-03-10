<?php
session_start();
$idUsuario = $_SESSION['idUsuario'];
$query = mysql_query("SELECT * FROM usuarios WHERE id='$idUsuario'");
?>
<br>
        <div class="container theme-showcase modifica-espaco">
            <style>
                .modifica-espaco{
                    margin-top: -24px;
                    margin-left: -10px;
                    margin-right: -8px;
                }
            </style>
            <button type="button" class="btn btn-xl btn-default">Meus Favoritos</button>
            <button type="button" class="btn btn-xl btn-default pull-right">Escolha 02</button>
        </div>
        <div class="container">    
            <div class="row">
                <div class="container theme-showcase">
                    <div class="page-header">
                        <h3>Bem Vindo, <?php echo $_SESSION['usuarioNome']; ?></h3>
                    </div>
                </div>
            </div>
        </div>
        <?php $pesquisa = mysql_fetch_array($query); ?>
        <div class="container-fluid">
            <div class="panel panel-info">
                <div class="panel-heading">Informações básicas: </div>
                <div class="panel-body">Nome: <?php echo $pesquisa['nome'];?></div>
                 <div class="panel-body">Email: <?php echo $pesquisa['email'];?></div>
                 <div class="panel-body">Senha: <?php echo str_repeat("*", strlen($pesquisa['senha']));?></div>
                 <div class="panel-body">Primeiro Acesso: <?php echo date('d/m/Y', strtotime($pesquisa['criacao']));?></div>
            </div>
        </div>