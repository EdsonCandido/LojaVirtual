<?php
    session_start();
    session_destroy();
    unset(
		$_SESSION['usuarioNome'],
		$_SESSION['usuarioNivelAcesso'],
		$_SESSION['usarioEmail']
	);
    header("Location: Telalogin.php");
?>