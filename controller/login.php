<?php
include("blocos.php");
func_header();
  
  if(isset($_SESSION['email']) && (isset($_SESSION['senha']))){
    header("Location: painel.php");exit;
  }  
  include("conexao.php");
  if(isset($_POST['logar'])){
    $email = trim(strip_tags($_POST['email']));
    $senha = trim(strip_tags($_POST['senha']));

    $buscausuario = "SELECT * FROM `tb_usuario` WHERE email = :email and senha = :senha";

    try{
        $resultado = $conn->prepare($buscausuario);
        $resultado->bindParam(':email', $email, PDO::PARAM_STR);
        $resultado->bindParam(':senha', $senha, PDO::PARAM_STR);
        $resultado->execute();

        $contar = $resultado->rowCount();
        $linha = $resultado->fetch(PDO::FETCH_ASSOC);
        
        if($contar>0){
            $email = $_POST['email'];
            $senha = $_POST['senha'];
            header("Refresh: 3, painel.php"); exit;
        }else{
         echo "<div class='alert alert-danger'>Falha ao logar! Os dados estão incorretos!</div>";
        }
      }catch(PDOException $e){
        echo $e;
      }
    }
?>