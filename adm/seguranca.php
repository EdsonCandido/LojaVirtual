<?php 
ob_start();
if(($_SESSION['usuarioNivelAcesso'] == "") || ($_SESSION['usarioEmail'] == "") || ($_SESSION['usuarioNome'] == "") ){
	unset(
		$_SESSION['usuarioNome'],
		$_SESSION['usuarioNivelAcesso'],
		$_SESSION['usarioEmail']
	);
	$_SESSION['loginErro'] = "<strong>Área Restrita</strong>";
	header("Location: adm/Telalogin.php");
}
