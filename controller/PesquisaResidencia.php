	<?php 
	include("conexao.php");

	$localizacao = $_POST['localizacao'];
	$tipoImovel = $_POST['tipoImovel'];
	$quarto = $_POST['quartos'];
	$banheiro = $_POST['banheiro'];


	$buscausuario = "SELECT * FROM tab_casa WHERE tipo ='".$tipoImovel."'";
	$consulta = "SELECT qtd_quarto, qtd_banheiro, tipo FROM tab_casa WHERE qtd_banheiro = $banheiro OR qtd_quarto = $quarto OR tipo = '$tipoImovel'";

	//Procura no banco
	$resultado = $conn->prepare($consulta);
	$resultado->bindParam(':tipo', $tipo, PDO::PARAM_STR);
	$resultado->execute();



	$contar = $resultado->rowCount();

	//Tratar caso se a pesquisa for invalida
	if($contar == 0)
	{
		echo json_encode(false);
	}
	else
	{
		$linha = $resultado->fetch(PDO::FETCH_ASSOC);
		echo json_encode(true);
	}

    








?>