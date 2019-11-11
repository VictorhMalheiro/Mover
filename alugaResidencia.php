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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

 <script src="js/vendor/jquery-2.2.4.min.js"></script>
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
	
	<div class="container-fluid p-5 ">

		<div>
			<div class="row">
				<div class="single-property col-6 ">
					<div class="images">
						<img class="img-fluid mx-auto d-block" src="img/s1.jpg" alt="">
					</div>

					
				</div>
				<div class="row ml-5" style="padding-left: 5%">
					<?php
						include_once("mapa.php");
					?>
					<hr>
				</div>
				</div>
				<div class="col form-group ml-4 bg-light">
					<h3 class="mt-3">Residencia da mae Joana do dia 51</h3>	
				</style>
					<form class="form-group" method="POST" onsubmit="return false;"> 

						<label for="labelEmail" class="mt-4">Email: </label>
						<input type="email" class="col form-control mt-2" required="required" name="txtEmailAlugar" id="txtEmailAlugar" placeholder="exemplo@exemplo.com">

						<label for="labelMensagem" class="mt-4">Mensagem: </label>
    					<textarea class="form-control" style="resize: none;" id="txtMensagemAlugar" required="required" rows="6"></textarea>

						<input type="button" name="btnEnviarVendedor" class="btn btn-primary mt-5 btn-lg btn-block" value="Enviar" onclick="ajaxAlugaResidencia();">
					</form>
				</div>
			</div>
		</div> 
	</div>
		
	

		<!-- FOOTER START -->
		<?php
		include_once("./theme/footer.php");
		__footer();
		?>
		<!-- END FOOTER -->	
  	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="js/ajaxPesquisaResidencia.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/ion.rangeSlider.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/ajaxAlugaResidencia.js"></script>

	</body>
	</html>