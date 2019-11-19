<?php
ob_start();
session_start();

    include_once("./conexao.php");
    if(!isset($_GET['cod_imovel'])){ header("Location: dashboard.php"); exit;}//TESTANDO SE HÁ ID NA URL, se não haver redireciona ao painel...
    $cod_imovel = $_GET['cod_imovel'];//Atribuindo ID da URL na variavel $cod_imovel...				

    $login = null;
    $senha = null;

    if(!isset($_SESSION['login']) && (!isset($_SESSION['senha'])) && $_SESSION['w_id_y']){
        header("Location: login.php");exit;
        $name =  $_SESSION['login'];
        
    } else {
        $logged = true;
        $login = $_SESSION['login'];
        $senha = $_SESSION['senha'];
        $cod_usuario = $_SESSION['w_id_y'];
    }

    // INCLUDES PHP
    // include_once("./theme/header.php");
    include_once("../theme/footer.php");
?>
    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Editar Imóvel - iMovel</title>
    
        <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
        <!--
        CSS
        ============================================= -->
        <link rel="stylesheet" href="../assets/css/linearicons.css">
        <link rel="stylesheet" href="../assets/css/owl.carousel.css">
        <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="../assets/css/nice-select.css">
        <link rel="stylesheet" href="../assets/css/magnific-popup.css">
        <link rel="stylesheet" href="../assets/css/bootstrap.css">
        <link rel="stylesheet" href="../assets/css/main.css">
    </head>
    <body>
        <!-- <section class=" relative"> -->
            <!-- START HEADER -->
            <div class="container-fluid pt-120 relative">
            <?php
                // __header();
            ?>
            <!-- END HEADER -->
            </div>
            <section class="about-generic-area pb-100 p">
            <div class="container border-top-generic">
                <h3 class="about-title mt-30 mb-30"></h3>
                <div class="col mb-30 mt-30">
                </div>

                <?php
                    // if(isset($_POST['deletar'])){
                        $deletarImagemCasa=$conn->prepare("DELETE  FROM tab_imagem_casa
                        WHERE cod_casa = $cod_imovel");

                        $deletarEndereco=$conn->prepare("DELETE  FROM tab_endereco_casa
                        WHERE cod_casa = $cod_imovel");
                        
                        $deletarCasa=$conn->prepare("DELETE  FROM tab_casa
                        WHERE cod_casa = $cod_imovel");

                        try {
                            $deletarImagemCasa->execute();
                        
                            $deletarEndereco->execute();

                            $deletarCasa->execute();

                            ?>
                            <div class="mt-20 row align-items-center justify-content-center">
                                <div class='row mt-100'>
                                    <div class='alert alert-info'>
                                        Você excluiu o imóvel com sucesso!
                                        <a href='../dashboard.php' class='genric-btn info-border circle arrow'>
                                            Voltar
                                        <span class='lnr lnr-arrow-right'></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <?php

                        } catch (PDOException $e) {
                            echo $e;
                        }
                        

                    // }
                ?>

            </div>
        </section>
        <?php
            __footer();
        ?>
    
        <!-- <script src="../assets/js/vendor/jquery-2.2.4.min.js"></script> -->
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper/js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/popper.js"></script>
        <script src="../assets/js/vendor/bootstrap.min.js"></script>
        
        <script src="../assets/js/jquery.ajaxchimp.min.js"></script>
        <script src="../assets/js/jquery.nice-select.min.js"></script>
        <script src="../assets/js/jquery.sticky.js"></script>
        <script src="../assets/js/ion.rangeSlider.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script src="../assets/js/jquery.magnific-popup.min.js"></script>
        <script src="../assets/js/main.js"></script>	
    </body>
    </html>