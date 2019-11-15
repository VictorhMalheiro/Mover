
function ajaxAlugaResidencia()
{
	email = $("#txtEmailAlugar").val();
	mensagem = $("#txtMensagemAlugar").val();


	    $.ajax
	    ({
		    url: 'controller/AlugaResidencia.php', // form action url
		    type: 'POST', // form submit method get/post
		    dataType: 'JSON', // request type html/json/xml
		    data:
		    {
		    	  'email' : email,
		          'mensagem' : mensagem,
		    },
		    success: function(retorno) 
		    {
		    	if(!retorno == true)
		    	{
		    		/*alert('A pesquisa foi mal sucedida');*/
		    	}
		    	else
		    	{

		    		alert("Sucesso ao Enviar a mensagem");
	
		    	}
		    }
        });
}