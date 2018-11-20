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

</head>
<body>

	<form action="controllerusuario.php" method="post">
        
        <br><h1>Cadastro de Usuário</h1><br>

		Login: <input class="form-control mr-sm-2" type="text" name="login">
		Senha: <input class="form-control mr-sm-2" type="text" name="senha">

		<br><input class="btn btn-dark" type="submit" name="enviar" value="Enviar"></td><td>&nbsp;<input class="btn btn-secondary" type="reset" name="enviar" value="Limpar Campos">&nbsp;<input class="btn btn-dark" type="submit" name="logout" value="Logout" onclick="encerrarSessao()">

		<br><br><table class="table table-striped">
				<thead>
					<th>Id</th>
					<th>Login</th>
					<th>Senha</th>
					<th>Excluir</th>

				</thead>
				<?php
				foreach ($listUsuario as $key) {
					echo "<tr onclick='cliqueDuplo()'><td>".$key['id_usuario']."</td><td>".$key['login']."</td><td>".$key['senha']."</td><td><a class='glyphicon glyphicon-trash' href='controllerusuario.php?acao=excluir&id_usuario=".$key['id_usuario']."'></a></td></tr>";
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