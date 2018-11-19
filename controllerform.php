<?php
session_start();
if(!isset($_SESSION['login'])){
	header('Location: login.php');
	exit;
}

include 'pessoa.php';
$pessoa = new Pessoa();

if(!empty($_POST['nome'])){



	$pessoa->setNome($_POST['nome']);
	$pessoa->setIdade($_POST['idade']);
	$pessoa->setEstadoCivil($_POST['ec']);
	$pessoa->setDataNascimento($_POST['dn']);
	$pessoa->setProfissao($_POST['prof']);
	$pessoa->inserePessoa();
	$listPessoas=$pessoa->listarPessoa();
	include 'formulario.php';
	

}else{
	if(@$_GET['acao'] == 'excluir'){

		if($pessoa->deletaPessoa($_GET['id'])){
			echo "<script>alert('Dado excluído com sucesso!');</script>";
			header('Location: controllerform.php');
			
		} else {
			echo "<script>alert('Erro na exclusão!');</script>";
			header('Location: controllerform.php');
		}


	}
	$listPessoas=$pessoa->listarPessoa();
	include 'formulario.php';
}

?>