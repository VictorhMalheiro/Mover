<?php 
ob_start();
session_start();

    if(!isset($_SESSION['login']) && (!isset($_SESSION['senha']))){
        header("Location: login.php");exit;
        $name =  $_SESSION['login'];
    }

    // INCLUDES PHP
    include_once("./theme/header.php");
    include_once("./theme/footer.php");
    include_once("controller/conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
    <!--
    CSS
    ============================================= -->
    <link rel="stylesheet" href="assets/css/linearicons.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/ion.rangeSlider.css" />
    <link rel="stylesheet" href="assets/css/ion.rangeSlider.skinFlat.css" />
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
    <section class="generic-banner relative">
        <!-- START HEADER -->
        <?php
            __header();
        ?>
        <!-- END HEADER -->
        <div class="container pt-30">
            <div class="row height align-items-center justify-content-center">                
                <div class="col-lg-10">
                    <div class="generic-banner-content">
                        <h2 class="text-white text-center"><?php ?></h2>
                        <p class="text-white">
                            <?php
                                include("controller/conexao.php");
                                $logged = false;
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
                                        }
                                    }
                                }catch(PDOException $erro){
                                    echo $erro;
                                }
                            ?>
                            BEM VINDO <?php echo $nomeUsuario;?>
                        </p>
                                                
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
        __footer();
    ?>
</body>
</html>