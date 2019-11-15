<?php
    include_once("./conexao.php");
    $sql = "INSERT INTO tab_usuario(cod_usuario,nome,email_usuario,login,senha,nivel) 
    VALUES (NULL,:nome,:email_usuario,:login,:senha,'1')";

    try{
        $stmt = $conn->prepare($sql);

        $stmt->bindParam(':nome', $_POST['nome'], PDO::PARAM_STR);
        $stmt->bindParam(':email_usuario', $_POST['email_usuario'], PDO::PARAM_STR);
        $stmt->bindParam(':login', $_POST['login'], PDO::PARAM_STR);
        $stmt->bindParam(':senha', $_POST['senha'], PDO::PARAM_STR);

        $stmt->execute();
        $last_id = $conn->lastInsertId($sql);

        $contar = $stmt->rowCount();
        if($contar>0){
            echo "<div class='alert alert-info'>Que legal ".$_POST['nome']."
            ! Você foi cadastrado, faça login para usar: <a href='login.php' 
            class='genric-btn info-border circle arrow'>Entrar
            <span class='lnr lnr-arrow-right'></span>
        </a></div>";
        exit;
        }
        else{
            echo "<div class='alert alert-dnanger'>Nossa! :( não deu, Você foi não foi cadastrado!</div>";
        }
    }catch(PDOException $e){
		echo $e->getMessage();
	}
?>