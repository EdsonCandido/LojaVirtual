<?php 
session_start();
include_once("bd.php");
$email = $_POST["email"];
$senha = $_POST["senha"];
$inserir = mysql_query("SELECT * FROM usuarios WHERE email='$email' AND senha='$senha' LIMIT 1");
$resultado = mysql_fetch_assoc($inserir);
//echo $resultado['nome'];
if(empty($resultado)){
	$_SESSION['loginErro'] = "<strong>Usuário ou Senha Inválida</strong> ";
	header("Location: Telalogin.php");
}else{
	$_SESSION['usuarioNome'] = $resultado['nome'];
	$_SESSION['usuarioNivelAcesso'] = $resultado['nivel_de_acesso_id'];
	$_SESSION['usarioEmail'] = $resultado['email'];
        $_SESSION['idUsuario'] = $resultado['id'];
	if($_SESSION["usuarioNivelAcesso"] == 1){
		header("Location: administrativo.php");
	}else{
		header("Location: ../usuario.php");
	}
}
?>
