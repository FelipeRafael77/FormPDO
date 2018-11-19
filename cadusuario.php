<!DOCTYPE html>
<html>
<head>
	<title>CadUsuário</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="js/model.js"></script>
	<script src="js/ajax.js"></script>

</head>
<body>

	<form action="controllerusuario.php" method="post">
        
        <h1>Cadastro de Usuário</h1><br>

		Login: <input class="form-control mr-sm-2" type="text" name="login">
		Senha: <input class="form-control mr-sm-2" type="text" name="senha">

		<br><table class="table table-striped">
				<thead>
					<th>Login</th>
					<th>Senha</th>

				</thead>
				<?php
				foreach ($listUsuario as $key) {
					echo "<tr onclick='cliqueDuplo()'><td>".$key['login']."</td><td>".$key['senha']."</td></td></tr>";
				}
				?>
			</table>
	
	</form>

	<br><footer class="footer">
      <div class="container">
        <span class="text-muted">SI - 2018</span>
      </div>
    </footer>

</body>
</html>