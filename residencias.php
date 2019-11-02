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
    <div class="carousel-item">
      <img src="img/header-bg.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
			<!-- End service Area -->

			<!-- Start Listagem-->
			<hr>
			<section>

				  <div class="row">
				    <div class="col-2 d-none d-md-block bg-light ">
				       <form >

						  <div class="form-group mt-2 mb-3">
						  	<h3>Menu</h3>
						    <label for="labelLocalizacao">Localização do Imovel</label>
						    <input type="text" class="form-control" id="fieldLocalizacao" placeholder="Digite rua, bairro ou cidade">
						  </div>

						  <div class="form-group mt-3">
						    <label for="formGroupExampleInput2">Tipo de Imóveis</label>
						     <select class="form-control" id="exampleFormControlSelect1">
						      <option>Mostrar Todos</option>
						    </select>
						  </div>


						  <div class="form-row mt-3">
						    <div class="col">
				  		      <label for="labelLocalizacao">Preço Minimo</label>
						      <input type="text" class="form-control" id="fieldLocalizacao" placeholder="R$">
						    </div>
						    <div class="col mb-2">
						    	<label for="labelLocalizacao">Preço Maximo</label>
						        <input type="text" class="form-control" id="fieldLocalizacao" placeholder="R$">
						    </div>
						  </div>

					      <div class="form-group mt-2">
					   		 <label for="formGroupExampleInput2">Numero de quartos</label>
					     	<select class="form-control" id="exampleFormControlSelect1">
					      		<option>1</option>
					      		<option>2</option>
					      		<option>3</option>
					      		<option>4</option>
					      		<option>5</option>
					    	</select>
					  	  </div>
						</form>
			    	</div>


			    	<div class="container ">
			    		<div class="row">
			    			<div class="col-12 mt-3">
			    				<h3>Imóveis</h3>

			    			</div>

						<hr>
					<div class="col">
					<div class="row mt-5">
						<div class="single-property">
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
						<div class="single-property">
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
							<div class="row mt-5">
						<div class="single-property">
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
						<div class="single-property">
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
					</nav>
					<!-- FIM QUADRO DE OPÇÕES -->

					<!-- COMEÇO DASHBOARD -->



			</section>

			<!-- FOOTER START -->
			<?php
				include_once("./theme/footer.php");
				__footer();
			?>
			<!-- END FOOTER -->	

			<script src="js/vendor/jquery-2.2.4.min.js"></script>
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
		</body>
	</html>