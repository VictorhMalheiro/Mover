<?php 
include "conexao.php";

$pesquisa = array
(
	"localizacao" => $_POST['localizacao'],
	"Imovel" => $_POST['tipoImovel'],
	"precoMin" => $_POST['precoMin'],
	"precoMax" => $_POST['precoMax'],
	"numeroQuartos" => $_POST['numeroQuartos'],
);

$consulta = 'SELECT * FROM';



?>