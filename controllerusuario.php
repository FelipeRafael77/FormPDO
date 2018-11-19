<?php
//session_start();
//if(!isset($_SESSION['login'])){
	//header('Location: login.php');
	//exit;
//}

include 'usuario.php';
$usuario = new Usuario();

if(!empty($_POST['login'])){



	$usuario->setLogin($_POST['login']);
	$usuario->setSenha($_POST['senha']);
	$usuario->insereUsuario();
	$listUsuario=$usuario->listarUsuario();
	include 'usuario.php';
	

}else{
	if(@$_GET['acao'] == 'excluir'){

		if($usuario->deletaUsuario($_GET['login'])){
			echo "<script>alert('Dado excluído com sucesso!');</script>";
			header('Location: controllerusuario.php');
			
		} else {
			echo "<script>alert('Erro na exclusão!');</script>";
			header('Location: controllerusuario.php');
		}


	}
	$listUsuario=$usuario->listarUsuario();
	include 'usuario.php';
}

?>