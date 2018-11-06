<?php

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
	$listPessoas=$pessoa->listarPessoa();
	include 'formulario.php';
}


?>