function alteraPessoa(){
	//$.ajax({
		//url: "http://localhost/controllerform.php",
		//method: 'POST',
		//data: {action: "update", $('tr').val($(this).attr("id")), $('tr').val($(this).attr("nome")), $('tr').val($(this).attr("value")), dataType: 'html'}}
		//.done(function(data){

$(document).ready(function(){
$(document).on('change','table tbody tr td input',function(){
            
            var v = 0;
            
            $(this).closest('tr').find('td').each(function(i,e) {   
            
			if(i > 8)
			{
				return true;
			}
			
            if(i !== 2)
            {
                if ($(e).val())
				{
                  var i = $(e).val().replace(/\,/g,'.');
                  
                  if (isNaN(i)) { $(e).val(''); return; }
                      
                  v += parseFloat(i);
               
                  $(this).closest('tr').find('.total').val( v.toFixed(2));
            
                }
            }
            
            });
            
        });
        });


		};
