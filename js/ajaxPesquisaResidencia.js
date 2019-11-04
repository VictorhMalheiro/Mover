function ajaxPesquisaResidencia()
{
	localizacao = $("#fieldLocalizacao").val();
	tipoImovel = $("#fieldTipoImoveis").val();
	precoMin = $("#fieldPrecoMin").val();
	precoMax = $("#fieldPrecoMax").val();
	numeroQuartos = $("#fieldNumeroQuartos").val();

	    $.ajax
	    ({
		    url: 'controller/PesquisaResidencia.php', // form action url
		    type: 'POST', // form submit method get/post
		    dataType: 'JSON', // request type html/json/xml
		    data:
		    {
		    	  'localizacao' : localizacao,
		          'tipoImovel' : tipoImovel,
		          'precoMin' : precoMin,
		          'precoMax' : precoMax,
		          'numeroQuartos' : numeroQuartos,
		    },
		    success: function(retorno) 
		    {
		    	alert('retorno');
		    }
        });
}