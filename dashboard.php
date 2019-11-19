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
    <title>Dashboard - iMovel</title>

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
    <!-- <section class=" relative"> -->
        <!-- START HEADER -->
        <section class="generic-banner relative">
        <div class="container-fluid pt-100 pb-50 relative">
        <?php
            __header();
        ?>
            <!-- <div class="container-fluid  relative"> -->
                <h2 class="text-white about-title pt-50 text-center">Imóveis cadastrados</h2>
            <!-- </div> -->
        <!-- END HEADER -->
        </div>
        </section>
    <section class="about-generic-area pb-100 p">
        <div class="container border-top-generic">
            <!--  -->
            <div class="col mb-30">
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
                            $cod_usuario = $listar['cod_usuario'];
                        }
                    }
                }catch(PDOException $erro){
                    echo $erro;
                }
            ?>  
            
                <?php
                    // Buscando imoveis do usuario
                    $buscaCasaUsuario = "SELECT * FROM tab_casa AS tc
                        INNER JOIN tab_imagem_casa AS tic
                            ON tc.cod_casa = tic.cod_casa
                    WHERE cod_usuario = '$cod_usuario'";
                    // cod_casa,qtd_quarto, qtd_banheiro, qtd_suite, area, aluguel, tipo, garagem, cod_usuario
                    try{
                        $res = $conn->prepare($buscaCasaUsuario);
                        $res->bindParam('cod_usuario',$cod_usuario, PDO::PARAM_STR);
                        $res-> execute();

                        $linha = $res->fetchAll();

                        $contar = $res->rowCount();

                        if ($contar > 0) {
                            ?>
                            <div class="row mt-20 mb-20">
                            <?php
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
                                ?>
                                <div class="col-lg-4">
                                    <div class="single-property">
                                    <div class="images">
                                        <img class="img-fluid mx-auto d-block" src="<?php echo "./".$listar["caminho_imagem"]."/".$listar["nome_imagem"]; ?>" alt="">
                                        <a href="./imovel.php?&cod_imovel=<?php echo $listar['cod_casa'];?>"><span>Ver imóvel</span></a>
                                    </div>
                                    
                                    <div class="desc">
                                        <div class="top d-flex justify-content-between">
                                            <h4><a href="#"><?php echo $tipo; ?></a></h4>
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
                                            <p><a href="./controller/deletarImovel.php?&cod_imovel=<?php echo $listar['cod_casa'];?>"><span></span>Excluir</a></p>
                                            <p><a href="./editarImovel.php?&cod_imovel=<?php echo $listar['cod_casa'];?>"><span></span>Editar</a></p>
                                        </div>	
                                    </div>	
                                </div>   
                                </div>
                                
                                <?php
                            }
                        }else{
                            echo "
                            <div class='row mt-100'>
                            <div class='alert alert-info'>".$nomeUsuario."
                            você ainda não possui imóveis cadastrados, insira algum? <a href='cadastrarImovel.php' 
                            class='genric-btn info-border circle arrow'>Cadastrar
                            <span class='lnr lnr-arrow-right'></span>
                            </a></div>";
                    }
                        
                    }catch(PDOException $erro){
                        echo $erro;
                    }
                ?>
                        </div>
                        
                        <div class="col mb-30 mt-30">
            </div>
        </div>
        </section>
    <?php
        __footer();
    ?>
</body>
</html>