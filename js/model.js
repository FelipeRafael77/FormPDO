function alteraPessoa(){
	//$.ajax({
		//url: "http://localhost/controllerform.php",
		//method: 'POST',
		//data: {action: "update", $('tr').val($(this).attr("id")), $('tr').val($(this).attr("nome")), $('tr').val($(this).attr("value")), dataType: 'html'}}
		//.done(function(data){




		};

function cliqueDuplo(){
	$(function () {
					$("td").dblclick(function () {
						var conteudo = $(this).text();

						$(this).addClass("tabelaEditavel");
						$(this).html("<input type='text' value='" + conteudo + "' />");
						$(this).children().first().focus();

						$(this).children().first().keypress(function (e) {
							if (e.which == 13) {
								var novoConteudo = $(this).val();
								$(this).parent().text(novoConteudo);
								$(this).parent().removeClass("tabelaEditavel");
							}
						});

						$(this).children().first().blur(function(){
							$(this).parent().text(conteudo);
							$(this).parent().removeClass("tabelaEditavel");
						});
					});
				});
}

function encerrarSessao(){
if(isset($_SESSION['login'])){
    // se você possui algum cookie relacionado com o login deve ser removido
    session_destroy();
    header("location: login.php");
    exit();
}
}