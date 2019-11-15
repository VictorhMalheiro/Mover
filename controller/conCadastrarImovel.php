<?php
$sql = "INSERT INTO tab_imovel(id_casa) VALUES (:id_casa)";
	
	$stmt = $conn->prepare($sql);

	$stmt->bindParam(':nome', $_POST['nome'], PDO::PARAM_STR);


	$stmt->execute();
	$last_id = $conn->lastInsertId($sql);

	$contar = $stmt->rowCount();
	if($contar>0){
		echo "<div class='alert alert-info'>Que legal! Posto Cadastrado...</div>";
	}
	else{
		echo "<div class='alert alert-dnanger'>Nossa! :( não deu, o posto não foi cadastrado!</div>";
	}

$buscaposto=$conn->query("SELECT * FROM `tb_posto`");
$postos = $buscaposto->rowCount();
echo "<button class='btn btn-primary' type='button'>
		Quantidade de postos cadastrados <span class='badge'>".$postos."</span>
	  </button>";
			
			
		
			
//--------->CADASTRAR IMAGEM<-----///
if(isset($_POST['cadastrar'])){//VER SE EXISTE ALGO NO BOTAO CADASTRAR...
	if(getimagesize($_FILES['imagem']['tmp_name']) == FALSE) {//VER SE EXISTE IMG
	   echo "Por favor, selecione a imagem";
	} else {// SE EXISTIR... ELE vai criar as variaveis e atribuir valores....
	   $localizacao = addslashes($_FILES['imagem']['tmp_name']);
	   $img_Nome 	= addslashes($_FILES['imagem']['name']);//NOME DA IMAGEM
	   $img 		= file_get_contents($localizacao);
	   $img 		= base64_encode($img);//CODIGO DA IMAGEM...
	///  salva_imagem($img_Nome,$img,$last_id);//CHAMA A FUNÇÃO salva_imagem e coloca seus parametros de nome e codigo da img...
	}
}  


//function salva_imagem($n,$i,$id) {
   $ligacao = mysqli_connect('localhost', 'root', '','superuol_ecopostoatt');
   if (!$ligacao) {
	   die('Não conectado: ' . mysqli_error());
   }
	//$idant =  mysqli_insert_id();
   $comando = "INSERT INTO	tb_imagemposto (nomeImgPost,arqImg,cod_posto) VALUES ('$img_Nome','$img','$last_id')";
   //$comando = "INSERT INTO	tb_imagemposto (nomeImgPost,arqImg) VALUES ('$img_Nome','$img')";

       
   if( !$stmt = mysqli_prepare($ligacao, $comando) ) {
	   echo "<div class='alert alert-dnanger'>Nossa! :( não deu, Falhou na hora de preparar - IMAGEM NÃO INSERIDA!</div>";
   } else {
	   echo "<div class='alert alert-info'>Imagem $img_Nome inserida com sucesso!</div>";
   }
	 $stmt->execute();



   mysqli_close($ligacao);
//}
?>