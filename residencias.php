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
								buscaPropriedades();
	?>
				<div class="container-fluid p-5 ">
						<h3>Imóveis</h3>
					<hr>
					<div>
						<div class="row">
						<div class="single-property col-6">
								<div class="images">
									<img class="img-fluid mx-auto d-block" src="img/s1.jpg" alt="">
								</div>

								<div class="desc">
									<div class="top d-flex justify-content-between">
										<h4><a href="comprarResidencia.php">Casa 1</a></h4>
										<h4>R$1000</h4>
									</div>
									<div class="middle">
										<div class="d-flex justify-content-start">
											<p>Quartos: 04</p>
											<p>Banheiro: 03</p>
											<p>Area: 20x20</p>
										</div>
										<div class="d-flex justify-content-start">
											<p>Garagem: <span class="gr">Yes</span></p>
											<p>Internet: <span class="rd">No</span></p>
											<p>Tipo:</p>
										</div>
									</div>
									<div class="bottom d-flex justify-content-start">
										<p><span class="lnr lnr-heart"></span> 15 Curtida(s)</p>
										<p><span class="lnr lnr-bubble"></span> 02 Comentario(s)</p>
									</div>	
								</div>	
							</div>
							<div class="single-property col-6">
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
							<div class="single-property col-6">
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
							<div class="single-property col-6">
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