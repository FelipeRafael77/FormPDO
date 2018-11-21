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