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
	<title>Real Estate</title>

	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
<!--
CSS
============================================= -->
<link rel="stylesheet" href="css/linearicons.css">=
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/nice-select.css">
<link rel="stylesheet" href="css/ion.rangeSlider.css" />
<link rel="stylesheet" href="css/ion.rangeSlider.skinFlat.css" />
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/main.css">
</head>
<style type="text/css">
	*{
		margin: 0px !important;

	}
</style>
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
	<hr>
	<section>
		<div class="row">
			<div class="col-2">
				<div class="container-fluid p-2">
					<div class="col">
						<form method="POST" onsubmit="return false;">
							<div class="form-group  mb-3">
								<h3>Menu</h3>
								<label for="labelLocalizacao">Localização do Imovel</label>
								<input type="text" name="fieldLocalizacao" class="single-input-secondary" id="fieldLocalizacao" placeholder="Digite rua, bairro ou cidade">
							</div>
	
							<div class="form-group mt-1">
								<label for="formGroupExampleInput2">Tipo de Imóveis</label>
								
								<div class="input-group-icon mt-10">
									<div class="icon"><i class="fa fa-home" aria-hidden="true"></i></div>
									<div class="form-select" id="default-select">
										<select style="display: none;" id="fieldTipoImovel">
										<option value="1">Mostrar Todos</option>
										<option value="1">Casa Geminada</option>
										<option value="1">Sobrado</option>
										<option value="1">Bangalô</option>
										<option value="1">Edícula</option>
										<option value="1">Loft</option>
										<option value="1">Apartamento</option>
										<option value="1">Kitnet</option>
										<option value="Flat">Flat</option>
										</select>
									</div>
								</div>
		
							</div>
							<div class="form-row mt-3">
								<div class="col">
									<label for="labelLocalizacao">Preço Minimo</label>
									<input type="number" step=".01" name="fieldPrecoMin" class="single-input-secondary" id="fieldPrecoMin" placeholder="R$0,00">
								</div>
								<div class="col mb-2">
									<label for="labelLocalizacao">Preço Maximo</label>
									<input type="number"  step=".01" name="fieldPrecoMax" class="single-input-secondary" id="fieldPrecoMax" placeholder="R$0,00">
								</div>
							</div>
	
							<div class="form-group mt-2">
								<label for="formGroupExampleInput2">Numero de quartos</label>
								<select class="single-input-secondary" name="fieldNumeroQuartos" id="fieldNumeroQuartos">
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
								</select>
							</div>
							<div class="form-group mt-2 text-center ">
								<input type="Submit" class="btn btn-primary  btn-lg btn-block" name="btnEnviarFiltro" value="Pesquisar" onclick="ajaxPesquisaResidencia()">
								
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="col-10">
				<div class="container-fluid p-5">
						<h3>Imóveis</h3>
					<hr>
					<div>
						<div class="row">
							<div class="single-property col-4">
								<div class="images">
									<img class="img-fluid mx-auto d-block" src="img/s1.jpg" alt="">

								</div>
								<div class="desc">
									<div class="top d-flex justify-content-between">
										<h4><a href="#">Residencia do Vitor</a></h4>
										<h4>R$10.000</h4>
									</div>
									<div class="middle">
										<div class="d-flex justify-content-start">
											<p>Quarto(s): 04</p>
											<p>Banheiro(s): 03</p>
											<p>Area: 200x200</p>
										</div>
										<div class="d-flex justify-content-start">
											<p>Piscina: <span class="gr">Yes</span></p>
											<p>Internet: <span class="rd">No</span></p>
											<p>Faxinera: <span class="rd">No</span></p>
										</div>
									</div>
									<div class="bottom d-flex justify-content-start">
										<p><span class="lnr lnr-heart"></span> 15 Gostei</p>
										<p><span class="lnr lnr-bubble"></span> 02 Comentários</p>
									</div>	
								</div>	
							</div>
							<div class="single-property col-4">
								<div class="images">
									<img class="img-fluid mx-auto d-block" src="img/s1.jpg" alt="">

								</div>

								<div class="desc">
									<div class="top d-flex justify-content-between">
										<h4><a href="#">04 Bed Duplex</a></h4>
										<h4>$3.5M</h4>
									</div>
									<div class="middle">
										<div class="d-flex justify-content-start">
											<p>Bed: 04</p>
											<p>Bath: 03</p>
											<p>Area: 750sqm</p>
										</div>
										<div class="d-flex justify-content-start">
											<p>Pool: <span class="gr">Yes</span></p>
											<p>Internet: <span class="rd">No</span></p>
											<p>Cleaning: <span class="rd">No</span></p>
										</div>
									</div>
									<div class="bottom d-flex justify-content-start">
										<p><span class="lnr lnr-heart"></span> 15 Likes</p>
										<p><span class="lnr lnr-bubble"></span> 02 Comments</p>
									</div>	
								</div>	
							</div>
							<div class="single-property col-4">
								<div class=" images">
									<img class="img-fluid mx-auto d-block" src="img/s1.jpg" alt="">

								</div>
								<div class="desc">
									<div class="top d-flex justify-content-between">
										<h4><a href="#">04 Bed Duplex</a></h4>
										<h4>$3.5M</h4>
									</div>
									<div class="middle">
										<div class="d-flex justify-content-start">
											<p>Bed: 04</p>
											<p>Bath: 03</p>
											<p>Area: 750sqm</p>
										</div>
										<div class="d-flex justify-content-start">
											<p>Pool: <span class="gr">Yes</span></p>
											<p>Internet: <span class="rd">No</span></p>
											<p>Cleaning: <span class="rd">No</span></p>
										</div>
									</div>
									<div class="bottom d-flex justify-content-start">
										<p><span class="lnr lnr-heart"></span> 15 Likes</p>
										<p><span class="lnr lnr-bubble"></span> 02 Comments</p>
									</div>	
								</div>	
							</div>
							<div class="single-property col-4">
								<div class="images">
									<img class="img-fluid mx-auto d-block" src="img/s1.jpg" alt="">

								</div>

								<div class="desc">
									<div class="top d-flex justify-content-between">
										<h4><a href="#">04 Bed Duplex</a></h4>
										<h4>$3.5M</h4>
									</div>
									<div class="middle">
										<div class="d-flex justify-content-start">
											<p>Bed: 04</p>
											<p>Bath: 03</p>
											<p>Area: 750sqm</p>
										</div>
										<div class="d-flex justify-content-start">
											<p>Pool: <span class="gr">Yes</span></p>
											<p>Internet: <span class="rd">No</span></p>
											<p>Cleaning: <span class="rd">No</span></p>
										</div>
									</div>
									<div class="bottom d-flex justify-content-start">
										<p><span class="lnr lnr-heart"></span> 15 Likes</p>
										<p><span class="lnr lnr-bubble"></span> 02 Comments</p>
									</div>	
								</div>	
							</div>
						</div>
					</div>
				</div> 
			</div>
		</div>
	</section>

		<!-- FOOTER START -->
		<?php
		include_once("./theme/footer.php");
		__footer();
		?>
		<!-- END FOOTER -->	

		<script src="js/vendor/jquery-2.2.4.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
		<script src="js/vendor/bootstrap.min.js"></script>
		<script src="https://unpkg.com/popper.js"></script>
		<script src="js/jquery.ajaxchimp.min.js"></script>
		<script src="js/jquery.nice-select.min.js"></script>
		<script src="js/jquery.sticky.js"></script>
		<script src="js/ion.rangeSlider.js"></script>
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
		<script src="js/jquery.magnific-popup.min.js"></script>
		<script src="js/ajaxPesquisaResidencia.js"></script>
		<script src="js/main.js"></script>
	</body>
	</html>