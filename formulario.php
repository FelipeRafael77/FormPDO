<!DOCTYPE html>
<head>
	<title>Formulário de Cadastro</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
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
					<input class="btn btn-dark" type="submit" name="enviar" value="Enviar"></td><td><input class="btn btn-secondary" type="reset" name="enviar" value="Limpar Campos"></td></table>

			<br><table class="table table-striped">
				<thead>
					<th>id</th>
					<th>Nome</th>
					<th>Idade</th>
					<th>Estado Civil</th>
					<th>Data de Nascimento</th>
					<th>Profissão</th>
					<th>Excluir</th>
				</thead>
				<?php
				foreach ($listPessoas as $key) {
					echo "<tr disabled><td>".$key['idPessoa']."</td><td>".$key['nome']."</td><td>".$key['idade']."</td><td>".$key['estado_civil']."</td><td>".$key['data_nascimento']."</td><td>".$key['profissao']."</td><td><a href='controllerform.php?acao=excluir&id=".$key['idPessoa']."'>Excluir</a><td><a href='controllerform.php' onclick = 'alteraPessoa();'".$key['idPessoa']."'>Alterar</a></td></tr>";
				}
				?>
			</table>
			
			<script type="text/javascript">
				$(function () {
					$("td").dblclick(function () {
						var conteudoOriginal = $(this).text();

						$(this).addClass("celulaEmEdicao");
						$(this).html("<input type='text' value='" + conteudoOriginal + "' />");
						$(this).children().first().focus();

						$(this).children().first().keypress(function (e) {
							if (e.which == 13) {
								var novoConteudo = $(this).val();
								$(this).parent().text(novoConteudo);
								$(this).parent().removeClass("celulaEmEdicao");
							}
						});

						$(this).children().first().blur(function(){
							$(this).parent().text(conteudoOriginal);
							$(this).parent().removeClass("celulaEmEdicao");
						});
					});
				});
			</script>

			</form>

<footer class="footer">
      <div class="container">
        <span class="text-muted">SI - 2018</span>
      </div>
    </footer>

				</body>

				

			</head>