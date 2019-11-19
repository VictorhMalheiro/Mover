<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="CodePixar">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>Residencias - iMovel</title>

	

<!--
CSS
============================================= -->
<link rel="stylesheet" href="assets/css/linearicons.css">=
<link rel="stylesheet" href="assets/css/font-awesome.min.css">
<link rel="stylesheet" href="assets/css/nice-select.css">
<link rel="stylesheet" href="assets/css/ion.rangeSlider.css" />
<link rel="stylesheet" href="assets/css/ion.rangeSlider.skinFlat.css" />
<link rel="stylesheet" href="assets/css/bootstrap.css">
<link rel="stylesheet" href="assets/css/main.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

 <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</head>
<!-- <style type="text/css">
	*{
		margin: 0px !important;

	}
</style> -->
<body>


	<!-- Start Header Area -->
	<?php				
	include_once("./theme/header.php");
	__header();
	?>
	<!-- End Header Area -->

	<!-- Start service Area -->
	<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="img/header-bg.jpg" class="d-block w-100" alt="...">
			</div>
			<div class="carousel-item">
				<img src="img/header-bg.jpg" class="d-block w-100" alt="...">
			</div>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Anterior</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Próxima</span>
		</a>
	</div>
	<!-- End service Area -->

	<!-- Start Listagem-->
	<?php
		include_once("./theme/buscaPropriedades.php");
		include("./controller/conexao.php");
		buscaPropriedades();
	?>
				<!-- CARREGAMENTO DE IMOVEIS -->
				<section class="about-generic-area section-gap relative" id="property">
				
				<div class="container">		
					<div class="row">
					<?php

					$cidadeBusca = $_POST['cidade'];
					$tipoIM = $_POST['tipo'];
					$qtd_quartoIM = $_POST['qtd_quarto'];

                    // Buscando imoveis do usuario
                    $buscaImovel = "SELECT * FROM tab_casa AS tc
                        INNER JOIN tab_imagem_casa AS tic
                            ON tc.cod_casa = tic.cod_casa
						INNER JOIN tab_endereco_casa AS tec
							ON tc.cod_casa = tec.cod_casa
                    WHERE qtd_quarto = '$qtd_quartoIM'  AND  tipo = '$tipoIM' AND cidade = '$cidadeBusca'";
                    // cod_casa,qtd_quarto, qtd_banheiro, qtd_suite, area, aluguel, tipo, garagem, cod_usuario
                    try{
                        $res = $conn->prepare($buscaImovel);
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
                                <div class="col">
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
                                    </div>	
                                </div>   
                                </div>
                                
                                <?php
                            }
                        }else{
                            echo "";
                    }
                        
                    }catch(PDOException $erro){
                        echo $erro;
                    }
                ?>
				
					</div>
				</div>	
			</section>

		<!-- FOOTER START -->
		<?php
		include_once("./theme/footer.php");
		__footer();
		?>
		<!-- END FOOTER -->	
  	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="assets/js/ajaxPesquisaResidencia.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
    <script src="assets/js/vendor/bootstrap.min.js"></script>
    <script src="assets/js/jquery.ajaxchimp.min.js"></script>
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <script src="assets/js/jquery.sticky.js"></script>
    <script src="assets/js/ion.rangeSlider.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/main.js"></script>

	</body>
	</html>