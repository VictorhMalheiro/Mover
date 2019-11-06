<?php 
include("conexao.php");


$tipoImovel = $_POST['tipoImovel'];
$precoMin = $_POST['precoMin'];
$precoMax = $_POST['precoMax'];
$numeroQuartos = $_POST['numeroQuartos'];


$buscausuario = "SELECT * FROM tab_casa WHERE tipo ='".$tipoImovel."'";
$consulta = "SELECT * FROM  tab_casa WHERE qtd_quarto = 2 AND qtd_banheiro = 2";

		    
        $resultado = $conn->prepare($buscausuario);
        $resultado->bindParam(':tipo', $tipo, PDO::PARAM_STR);
        $resultado->execute();
        
        $contar = $resultado->rowCount();
        $linha = $resultado->fetch(PDO::FETCH_ASSOC);

        echo json_encode(true);

    







?>