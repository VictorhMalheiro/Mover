<?php 
ob_start();
session_start();

    if(isset($_GET['cod_imovel'])){
        $cod_imovelURL = $_GET['cod_imovel'];
    }

    // if(!isset($_SESSION['login']) && (!isset($_SESSION['senha']))){
    //     header("Location: login.php");exit;
    //     $name =  $_SESSION['login'];
    // }

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
    <title>Cadastrar Imóvel - iMovel</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
    <!--
    CSS
    ============================================= -->
    <link rel="stylesheet" href="assets/css/linearicons.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
    <!-- <section class=" relative"> -->
        <!-- START HEADER -->
        <div class="container-fluid pt-120 relative">
        <?php
            __header();
        ?>
        <!-- END HEADER -->
        </div>
    <section class="about-generic-area pb-100 p">
        <div class="container border-top-generic">
            <?php
                // Buscando imoveis do usuario
                $buscaCasa = "SELECT * 
                FROM tab_casa AS tc
                    INNER JOIN tab_endereco_casa AS tec
                        ON tc.cod_casa = tec.cod_casa
                    INNER JOIN tab_imagem_casa AS tic
                        ON tc.cod_casa = tic.cod_casa
                WHERE tc.cod_casa = $cod_imovelURL";
            ?>
            <?php
                // cod_casa,qtd_quarto, qtd_banheiro, qtd_suite, area, aluguel, tipo, garagem, cod_usuario
                try{
                    $res = $conn->prepare($buscaCasa);
                    $res-> execute();
                    
                    $linha = $res->fetchAll();
                    
                    $contar = $res->rowCount();
                    
                    if ($contar > 0) {
                        foreach($linha as $listar){
                            $tipo = $listar["tipo"];
                            switch($tipo){
                                case "1":
                                    $tipo = "Apartamento";
                                    break;
                                case "2":
                                    $tipo = "Casa";
                                break;
                                case "3":
                                    $tipo = "Casa em Condominio";
                                break;
                                case "4":
                                    $tipo = "kitnet";
                                break;
                            }


                            $logradouro = $listar['logradouro'];
                            $cidadeUF = $listar['cidade']." - ".$listar['uf'];
                            $logradouro .= ", ".$listar['numero']." - ".$listar['bairro'].", ".$cidadeUF.", ".$listar['cep']; 
                            ?>
                            <!-- Av. Cap. Felício Gomes, 400 - Gomes, Barretos - SP, 14781-556 -->
                            <iframe
                                width="100%"
                                height="450"
                                frameborder="0" style="border:0"
                                src="https://www.google.com/maps/embed/v1/place?key=AIzaSyCTp_N3HuzLb2L2DXGC0te8fnb2gM2F0WU
                                &q=<?php echo htmlspecialchars($logradouro); ?>
                                &attribution_source=Eco+Posto+Maps+Embed+API
                                &attribution_web_url=http://ecoposto.superuol.com/
                                " allowfullscreen>
                            </iframe>
                            <h1 class="about-title mt-30 mb-30">
                                <!-- Apartamento para alugar com 2 quartos, 82m² -->
                            </h1>
                            <div class="row">
                                <div class="col mb-30 mt-30">
                                <?php
                                ?>
                                    <div class="">
                                        <div class="single-property">
                                            <div class="images">
                                                <img class="img-fluid mx-auto d-block" src="<?php echo "./".$listar["caminho_imagem"]."/".$listar["nome_imagem"]; ?>" alt="">
                                                <span>Para alugar</span>
                                            </div>
                                            
                                            <div class="desc">
                                                <div class="top d-flex justify-content-between">
                                                    <h4><a href="#"><?php echo $tipo ?></a></h4>
                                                    <h4>R$ <?php echo $listar["aluguel"]; ?></h4>
                                                </div>
                                                <div class="middle">
                                                    <div class="d-flex justify-content-start">
                                                    <p>Quartos: <?php echo $listar["qtd_quarto"]; ?></p>
                                                    <p>Suite: <?php echo $listar["qtd_suite"]; ?></p>
                                                    <p>Área: <?php echo $listar["area"]; ?>m²</p>
                                                    </div>
                                                    <div class="d-flex justify-content-start">
                                                    <p>Garagem: <span class="gr"><?php echo $listar["garagem"]; ?></span></p>
                                                    </div>
                                                </div>
                                                <div class="bottom d-flex justify-content-start">
                                                </div>	
                                            </div>
                                        </div>	
                                    </div>
                                </div>
                                <div class="col">
                                    <h1><?php echo $tipo." para alugar com ".$listar['qtd_quarto']." quartos, ".$listar['area']."m²"?></h1>
                                    <div class="col">
                                        <h4 class="mt-20">Endereço</h4>
                                        <span>
                                            <?php echo $logradouro ?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                    }
                }catch(PDOException $erro){
                    echo $erro;
                }
            ?>

            </div>
        </div>
        </section>
    <?php
        __footer();
    ?>

    <!-- <script src="assets/js/vendor/jquery-2.2.4.min.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper/js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/popper.js"></script>
    <script src="assets/js/vendor/bootstrap.min.js"></script>
    
    <script src="assets/js/jquery.ajaxchimp.min.js"></script>
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <script src="assets/js/jquery.sticky.js"></script>
    <script src="assets/js/ion.rangeSlider.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/main.js"></script>	

    <script>
    </script>
</body>
</html>