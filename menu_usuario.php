<nav class="navbar navbar-default navbar-fixed-top">



    <div class="container-fluid">

        <div class="navbar-header">



            <button type="button" class="navbar-toggle btn-xs" data-toggle="collapse" data-target="#myNavbar">

                <span class="glyphicon glyphicon-menu-down "></span>



            </button>

            <a class="navbar-brand" href="usuario.php?link=1">Inicial</a>

            <a href="usuario.php?link=2"><button class="btn btn-sm btn-default pull-right"  style="margin-top: 8px; margin-right: 4px;"><span class="glyphicon glyphicon-user"></span> Perfil</button></a>

            <?php
            $idUsuario = $_SESSION['idUsuario'];
            $query_acesso = mysql_query("SELECT * FROM usuarios WHERE id = '$idUsuario'");

            $dados_acesso = mysql_fetch_assoc($query_acesso);
            if ($dados_acesso['primeiroAcesso'] == 0) {
                print('<a href="usuario.php?link=4"><button class="btn btn-sm btn-default pull-right" style="margin-top: 8px; margin-right: 4px;">Aprenda</button></a>');
            }
            ?>
            <a href="usuario.php?link=3"><button class="btn btn-sm btn-default pull-right" style="margin-top: 8px; margin-right: 4px;">Hístórico</button></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="usuario.php?link=2"><span class="glyphicon glyphicon-user"></span>
                        <?php
                        echo $_SESSION['usuarioNome'];
                        ?>
                    </a></li>
                <!--<a href="Telalogin.php">Login</a>-->
                <li><a href="sair.php"><span class="glyphicon glyphicon glyphicon-off"></span> Sair</a></li>
            </ul>
        </div>
    </div>
</nav>

<br><br><br><br>
