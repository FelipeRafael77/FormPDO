<!DOCTYPE html>
<html>
<head>
	<title>Página Principal</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="js/model.js"></script>
</head>
<body>

    <a class="btn btn-dark" href="http://localhost/controllerform.php">Cadastro de Pessoa</a>
	<a class="btn btn-secondary" href="http://localhost/controllerusuario.php">Cadastro de Usuário</a>
	

	<?php
      
      session_start();
       if(!isset($_SESSION['login'])){
	   header('Location: login.php');
	   exit;
}

	?>

</body>
</html>