<!DOCTYPE html>
<head>
	<title>Formulário de Cadastro</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.min.css">
	
	<body>

		<form action="controllerform.php" method="POST">
			<div id="form">

				<h1>Dados Pessoais</h1>

				Nome: <input type="text" name="nome"></input><br><br>
				Idade: <input type="text" name="idade"></input><br><br>
				Estado civil: <input type="text" name="ec"></input><br><br>
				Data de nascimento: <input type="text" name="dn"></input><br><br>
				Profissão: <input type="text" name="prof"></input><br><br>


			</div>

			<table>
				<td>
					<input type="submit" name="enviar" value="Enviar"></td><td><input type="reset" name="enviar" value="Limpar Campos"></td></table>

			<table class="table table-striped">
				<thead>
					<th>idPessoa</th>
					<th>nome</th>
					<th>idade</th>
					<th>estado_civil</th>
					<th>data_nascimento</th>
					<th>profissao</th>
				</thead>
				<?php
				foreach ($listPessoas as $key) {
					echo "<tr><td>".$key['idPessoa']."</td><td>".$key['nome']."</td><td>".$key['idade']."</td><td>".$key['estado_civil']."</td><td>".$key['data_nascimento']."</td><td>".$key['profissao']."</td></tr>";
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

				<script src="js/model.js"></script>

			</head>