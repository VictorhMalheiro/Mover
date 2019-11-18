<?php
ob_start();
session_start();
	include_once("./conexao.php");

    // $logged = false;
    $login = null;
    $senha = null;
    if(isset($_SESSION['login']) && (isset($_SESSION['senha']))){
        $logged = true;
        $login = $_SESSION['login'];
        $senha = $_SESSION['senha'];
    }
    
	//SELECIONAR OS DADOS DO USUARIO
	$buscaUsuario = "SELECT * FROM tab_usuario WHERE login=:login AND senha=:senha";
	try{
		$res = $conn->prepare($buscaUsuario);
		$res->bindParam('login',$login, PDO::PARAM_STR);
		$res->bindParam('senha',$senha, PDO::PARAM_STR);
		$res-> execute();
		$contar = $res->rowCount();
		
		if($contar == 1){
			$linha = $res->fetchAll();
			
			foreach($linha as $listar){
				$nomeUsuario = $listar['nome'];
				$cod_usuario = $listar['cod_usuario'];
			}
		}
	}catch(PDOException $erro){
		echo $erro;
	}

    $nome_imagem = $_FILES['formData']['name'];

    $nome_img64 = base64_encode($nome_imagem);

    $tipo_imagem = $_FILES['formData']['type'];

    $tamanho_imagem = $_FILES['formData']['size'];

    //condição para o tamanho da imagem...

    if($tamanho_imagem <= 1000000){
        $des = $_SERVER['DOCUMENT_ROOT'].'/assets/upload/';

        move_uploaded_file($_FILES['imagem']['tmp_name'],$des.$nome_img64);
    } else {
        echo "<div class='alert alert-danger'>Tamanho da imagem não permitido</div>";
    }

    $sql = "INSERT INTO tab_casa(cod_casa, qtd_quarto, qtd_banheiro, qtd_suite, area, aluguel, tipo, garagem, cod_usuario) 
	VALUES (NULL, :qtd_quarto, :qtd_banheiro, :qtd_suite, :area, :aluguel, :tipo, :garagem, :cod_usuario)";
	
	$sql2 = "INSERT INTO tab_endereco_casa
		(cod_endereco, logradouro, numero, bairro, cidade, uf, cep, cod_casa)
	VALUES
		(NULL, :logradouro, :numero, :bairro, :cidade, :uf, :cep, :cod_casa)";
	
	try{
        $stmt = $conn->prepare($sql);
		$stmt2 = $conn->prepare($sql2);

        $stmt->bindParam(':qtd_quarto', $_POST['qtd_quarto'], PDO::PARAM_INT);
        $stmt->bindParam(':qtd_banheiro', $_POST['qtd_banheiro'], PDO::PARAM_INT);
        $stmt->bindParam(':qtd_suite', $_POST['qtd_suite'], PDO::PARAM_INT);
        $stmt->bindParam(':area', $_POST['area'], PDO::PARAM_STR);
        $stmt->bindParam(':aluguel', $_POST['aluguel'], PDO::PARAM_STR);
        $stmt->bindParam(':tipo', $_POST['tipo'], PDO::PARAM_STR);
        $stmt->bindParam(':garagem', $_POST['garagem'], PDO::PARAM_STR);
        $stmt->bindParam(':cod_usuario', $cod_usuario, PDO::PARAM_INT);
		
		$stmt->execute();
		$last_id = $conn->lastInsertId($sql);
		
        $stmt2->bindParam(':logradouro', $_POST['logradouro'], PDO::PARAM_STR);
        $stmt2->bindParam(':numero', $_POST['numero'], PDO::PARAM_STR);
        $stmt2->bindParam(':bairro', $_POST['bairro'], PDO::PARAM_STR);
        $stmt2->bindParam(':cidade', $_POST['cidade'], PDO::PARAM_STR);
        $stmt2->bindParam(':uf', $_POST['uf'], PDO::PARAM_STR);
        $stmt2->bindParam(':cep', $_POST['cep'], PDO::PARAM_STR);
        $stmt2->bindParam(':cod_casa', $last_id, PDO::PARAM_INT);

		$stmt2->execute();

		
        $contar = $stmt->rowCount();
        $contar2 = $stmt2->rowCount();
        if($contar > 0 && $contar2 > 0){
            echo "<div class='alert alert-info'>Que legal ".$nomeUsuario."
            ! Você cadastrou um imóvel veja : <a href='login.php' 
            class='genric-btn info-border circle arrow'>Ver imóvel
            <span class='lnr lnr-arrow-right'></span>
        </a></div>";
        exit;
        }
        else{
            echo "<div class='alert alert-dnanger'>Nossa! :( não deu, o imóvel não foi cadastrado!</div>";
        }
    }catch(PDOException $e){
		echo $e->getMessage();
	}
?>