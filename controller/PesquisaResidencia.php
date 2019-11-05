<?php 
include("conexao.php");

/*
$pesquisa = array
(
	"localizacao" => $_POST['localizacao'],
	"Imovel" => $_POST['tipoImovel'],
	"precoMin" => $_POST['precoMin'],
	"precoMax" => $_POST['precoMax'],
	"numeroQuartos" => $_POST['numeroQuartos'],
);*/

$stmt = $conn->prepare('SELECT qtd_quarto, qtd_banheiro  FROM tab_casa');
$resultado->bindParam(':qtd_quarto', $qtd_quarto, PDO::PARAM_STR);
$resultado->bindParam(':qtd_banheiro', $qtd_banheiro, PDO::PARAM_STR);
$resultado->execute();

    







?>