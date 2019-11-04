<?php 
include("conexao.php");

$pesquisa = array
(
	"localizacao" => $_POST['localizacao'],
	"Imovel" => $_POST['tipoImovel'],
	"precoMin" => $_POST['precoMin'],
	"precoMax" => $_POST['precoMax'],
	"numeroQuartos" => $_POST['numeroQuartos'],
);

$query = 'SELECT * FROM tab_casa';

$consulta = mysqli_query($conn, $query);

print_r($consulta);





?>