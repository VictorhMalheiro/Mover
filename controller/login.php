<?php

  include_once("conexao.php");
  
  if(isset($_SESSION['login']) && (isset($_SESSION['senha']))){
    header("Location: dashboard.php");exit;
  }
  if(isset($_POST['logar'])){
    $login = trim(strip_tags($_POST['login']));
    $senha = trim(strip_tags($_POST['senha']));

    $buscausuario = "SELECT * FROM `tab_usuario` WHERE login = :login and senha = :senha";
    
    try{
        $resultado = $conn->prepare($buscausuario);
        $resultado->bindParam(':login', $login, PDO::PARAM_STR);
        $resultado->bindParam(':senha', $senha, PDO::PARAM_STR);
        $resultado->execute();
        
        $contar = $resultado->rowCount();
        $linha = $resultado->fetch(PDO::FETCH_ASSOC);
        
        if($contar>0){
            $login = $_POST['login'];
            $senha = $_POST['senha']; 
            $_SESSION['w_id_y'] = $linha['cod_usuario']; 
            $_SESSION['login'] = $login;
            $_SESSION['senha'] = $senha;
            ?>
              <section class="generic-banner relative">
                <div class="container pt-30">
                    <div class="row generic-banner-content align-items-center justify-content-center">
                      <div class='lds-ellipsis'>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                      </div>
                    </div>
                </div>
            </section>
            <?php
           

            echo "<h1> veio aqui...";
            header("Refresh: 1, dashboard.php"); exit;
            
            echo "<h1> veio aqui...2";
        }else{
            ?>
              <h2 class='text-white text-center'>Dados incorretos</h2>
            <?php
             header("Refresh: 2, ../index.php"); exit;
      
      }
      }catch(PDOException $e){
        echo $e;
      }
    }
?>