<!DOCTYPE html>
<head>
	<title>Formulário de Cadastro</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="js/model.js"></script>
	<script src="js/ajax.js"></script>
	
	
	
	<body>

		<form action="controllerform.php" method="POST">
			<div id="form">

				<h1>Formulário</h1><br>

				Nome: <input class="form-control mr-sm-2" type="text" name="nome"></input><br><br>
				Idade: <input class="form-control mr-sm-2" type="text" name="idade"></input><br><br>
				Estado civil: <input class="form-control mr-sm-2" type="text" name="ec"></input><br><br>
				Data de nascimento: <input class="form-control mr-sm-2" type="text" name="dn"></input><br><br>
				Profissão: <input class="form-control mr-sm-2" type="text" name="prof"></input><br><br>


			</div>

			<table>
				<td>
					<input class="btn btn-dark" type="submit" name="enviar" value="Enviar"></td><td>&nbsp;<input class="btn btn-secondary" type="reset" name="enviar" value="Limpar Campos"><input class="btn btn-dark" type="submit" name="logout" value="Logout" onclick="encerrarSessao()"></td></table>

			<br><table class="table table-striped">
				<thead>
					<th>id</th>
					<th>Nome</th>
					<th>Idade</th>
					<th>Estado Civil</th>
					<th>Data de Nascimento</th>
					<th>Profissão</th>
					<th>Excluir</th>
					<th>Alterar</th>
				</thead>
				<?php
				foreach ($listPessoas as $key) {
					echo "<tr onclick='cliqueDuplo()'><td>".$key['idPessoa']."</td><td>".$key['nome']."</td><td>".$key['idade']."</td><td>".$key['estado_civil']."</td><td>".$key['data_nascimento']."</td><td>".$key['profissao']."</td><td><a class='glyphicon glyphicon-trash' href='controllerform.php?acao=excluir&id=".$key['idPessoa']."'></a><td><a class='glyphicon glyphicon-floppy-disk' href='#'".$key['idPessoa']."'></td></tr>";
				}
				?>
			</table>

			</form>

<footer class="footer">
      <div class="container">
        <span class="text-muted">SI - 2018</span>
      </div>
    </footer>

				</body>

				

			</head>