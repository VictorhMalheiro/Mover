
function ajaxPesquisaResidencia()
{
	localizacao = $("#localizacao").val();
	tipoImovel = $("#tipoPropriedade").val();
	quartos = $("#quartos").val();
	banheiro = $("#banheiro").val();


	    $.ajax
	    ({
		    url: 'controller/PesquisaResidencia.php', // form action url
		    type: 'POST', // form submit method get/post
		    dataType: 'JSON', // request type html/json/xml
		    data:
		    {
		    	  'localizacao' : localizacao,
		          'tipoImovel' : tipoImovel,
		          'quartos' : quartos,
		          'banheiro' : banheiro,
		    },
		    success: function(retorno) 
		    {
		    	if(!retorno == true)
		    	{
		    		alert('A pesquisa foi mal sucedida');
		    	}
		    	else
		    	{
		    		alert("A Pesquisa foi bem sucedida");
		    	}
		    }
        });
}