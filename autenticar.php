<?php

include 'conexao.php';

session_start();

$login = $_POST['login'];
$senha = $_POST['senha'];
$conexao = Conexao::Singleton();
$stmt = $conexao->getStmt("SELECT * FROM usuario WHERE login=:login and senha=:senha limit 1");
$stmt->bindParam(":login", $login);
$stmt->bindParam(":senha", $senha);
if($stmt->execute()){
  if($reg=$stmt->fetchObject()){
  	$_SESSION['login'] = $login;
  	header("Location: controllerform.php");
  	exit;
  }else{
  	header("Location: login.php");	
	exit;
  	}
}else{
  	throw new \Exception("Erro na validação de autenticação de usuário!");
}




?>