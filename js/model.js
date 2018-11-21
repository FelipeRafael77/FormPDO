function alteraPessoa(){

var table = $('table');

table.find('tr').each(function(){
    $(this).find('td').each(function(i){
       alert(this.innerText);

       $("#salvar").dblclick(function(){
          $.ajax({
        url: "http://localhost/updatepessoa.php",
        method: 'POST',
        data: { nome: $("nome").val(), idade: ($("idade").val()), estado_civil: $("ec").val(), data_nascimento: $("dn").val(), profissao: $("prof").val(), valor_total: $("#valor_total").val(),
        dataType: 'html'
        }
    }).done(function(data) {
        $("table").html(data);
    });
  });
    });
});

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