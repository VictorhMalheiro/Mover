	<?php
	ob_start();
	session_start();	
	?>
	<!DOCTYPE html>
	<html lang="pt-br" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="assets/img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="CodePixar">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>iMovel</title>

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
			<!-- Start Header Area -->
			<?php				
				include_once("./theme/header.php");
				__header();
			?>
			<!-- End Header Area -->

			<!-- start banner Area -->
			<section class="banner-area relative" id="home">
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row fullscreen align-items-center justify-content-center" style="height: 915px;">
						<div class="banner-content col-lg-12 col-md-12">
							<?php
								include_once("./theme/buscaPropriedades.php");
								buscaPropriedades();
							?>

							<!-- <div class="search-field">
								<form class="search-form" action="#">
									 <div class="row">
									 	<div class="col-lg-12 d-flex align-items-center justify-content-center toggle-wrap">
											<div class="row">
												<div class="col">
													<h4 class="search-title">Search Properties For</h4>
												</div>
												<div class="col">
													<div class="onoffswitch3 d-block mx-auto">
													    <input type="checkbox" name="onoffswitch3" class="onoffswitch3-checkbox" id="myonoffswitch3" checked>
													    <label class="onoffswitch3-label" for="myonoffswitch3">
													        <span class="onoffswitch3-inner">
													            <span class="onoffswitch3-active">
													            	<span class="onoffswitch3-switch">Sell</span>
													            	<span class="lnr lnr-arrow-right"></span>
													            </span>
													            <span class="onoffswitch3-inactive">
													            	<span class="lnr lnr-arrow-left"></span>
													            	<span class="onoffswitch3-switch">Rent</span>
													            </span>
													        </span>
													    </label>
													</div>													
												</div>
											</div>
									 	</div>
									    <div class="col-lg-3 col-md-6 col-xs-6">
											<select name="location" class="app-select form-control" required>
												<option data-display="Choose locations">Choose locations</option>
												<option value="1">Dhaka</option>
												<option value="2">Rangpur</option>
												<option value="3">Bogra</option>
											</select>
									    </div>
									    <div class="col-lg-3 col-md-6 col-xs-6">
											<select name="property-type" class="app-select form-control" required>
												<option data-display="Property Type">Property Type</option>
												<option value="1">Property type 1</option>
												<option value="2">Property type 2</option>
												<option value="3">Property type 3</option>
											</select>
									    </div>
									    <div class="col-lg-3 col-md-6 col-xs-6">
											<select name="bedroom" class="app-select form-control" required>
												<option data-display="Bedrooms">Bedrooms</option>
												<option value="1">One</option>
												<option value="2">Two</option>
												<option value="3">Three</option>
											</select>
									    </div>
									    <div class="col-lg-3 col-md-6 col-xs-6">
											<select name="bedroom" class="app-select form-control" required>
												<option data-display="Bedrooms">Bedrooms</option>
												<option value="1">One</option>
												<option value="2">Two</option>
												<option value="3">Three</option>
											</select>
									    </div>
									    <div class="col-lg-4 range-wrap">
									    	<p>Price Range:</p>
									    	<input type="text" id="range" value="" name="range" />
									    </div>	
									    <div class="col-lg-4 range-wrap">
									    	<p>Area Range(sqm):</p>
									    	<input type="text" id="range2" value="" name="range" />
									    </div>										    
									    <div class="col-lg-4 d-flex justify-content-end">
											<button class="primary-btn mt-50" style="height: 45px;">Search Properties<span class="lnr lnr-arrow-right"></span></button>
										</div>						  
									  </div>
							  	</form>
							</div> -->
						</div>
					</div>
				</div>
			</section>
			<!-- End banner Area -->

			<!-- Start service Area -->
			<section class="service-area section-gap" id="service">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="col-md-8 pb-40 header-text">
							<h1>Comprometimento</h1>
							<p>
								A sua vontade de encontrar o seu espaço, é o nosso maior comprometimento!.
							</p>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-4 col-md-6 pb-30">
							<div class="single-service">
								<h4><span class="lnr lnr-user"></span>Rapido e Facil!</h4>
								<p>
									Locadores sempre a disposição e com maior facilidade de comunicação.
								</p>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 pb-30">
							<div class="single-service">
								<h4><span class="lnr lnr-license"></span>Profissionais de Maestria</h4>
								<p>
									Filtre e encontre o que precisa com precisão.
								</p>								
							</div>
						</div>
						<div class="col-lg-4 col-md-6 pb-30">
							<div class="single-service">
								<h4><span class="lnr lnr-phone"></span>Ótimo Suporte</h4>
								<p>
									Equipe técnica com atendimento rapido e com maior eficácia.
								</p>								
							</div>
						</div>
					</div>
				</div>	
			</section>
			<!-- End service Area -->

			<!-- Start property Area -->
			<section class="property-area section-gap relative" id="property">
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="col-md-8 pb-40 header-text">
							<h1>Menores preços</h1>
							<p>
								Está querendo economizar?
							</p>
						</div>
					</div>
					<div class="row">
						<?php 
							include_once("theme/blocosCasas.php");
							casasValorAsc();
						?>
					</div>
				</div>	
			</section>
			<!-- End property Area -->	
				
			<!-- Start city Area -->
			<!-- <section class="city-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-4 col-md-4 mb-10">
						  <div class="content">
						    <a href="#" target="_blank">
						      <div class="content-overlay"></div>
						  		 <img class="content-image img-fluid d-block mx-auto" src="assets/img/p1.jpg" alt="">
						      <div class="content-details fadeIn-bottom">
						        <h3 class="content-title">San Fransisco Properties</h3>
						      </div>
						    </a>
						  </div>
						</div>
						<div class="col-lg-8 col-md-8 mb-10">
							<div class="content">
							    <a href="#" target="_blank">
							      <div class="content-overlay"></div>
							  		 <img class="content-image img-fluid d-block mx-auto" src="assets/img/p2.jpg" alt="">
							      <div class="content-details fadeIn-bottom">
							        <h3 class="content-title">New York Properties</h3>
							      </div>
							    </a>
						  	</div>
							<div class="row city-bottom">
								<div class="col-lg-6 col-md-6 mt-30">
									<div class="content">
									    <a href="#" target="_blank">
									      <div class="content-overlay"></div>
									  		 <img class="content-image img-fluid d-block mx-auto" src="assets/img/p3.jpg" alt="">
									      <div class="content-details fadeIn-bottom">
									        <h3 class="content-title">Boston Properties</h3>
									      </div>
									    </a>
									</div>
								</div>
								<div class="col-lg-6 col-md-6 mt-30">
									<div class="content">
									    <a href="#" target="_blank">
									      <div class="content-overlay"></div>
									  		 <img class="content-image img-fluid d-block mx-auto" src="assets/img/p4.jpg" alt="">
									      <div class="content-details fadeIn-bottom">
									        <h3 class="content-title">Elay Properties</h3>
									      </div>
									    </a>
									</div>
								</div>								
							</div>
						</div>
					</div>
				</div>	
			</section> -->
			<!-- End city Area -->

			<!-- Start About Area -->
			<!-- <section class="about-area">
				<div class="container-fluid">
					<div class="row d-flex justify-content-end align-items-center">
						<div class="col-lg-6 about-left">
							<div class="single-about pb-30">
								<h4>Why Choose Us</h4>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
								</p>
							</div>
							<div class="single-about pb-30">
								<h4>Our Properties</h4>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
								</p>
							</div>
							<div class="single-about">
								<h4>legal notice</h4>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
								</p>
							</div>																
						</div>			
						<div class="col-lg-6 about-right no-padding">
							<img class="img-fluid" src="assets/img/about-img.jpg" alt="">
						</div>			
					</div>
				</div>	
			</section> -->
			<!-- End About Area -->		
		
			<!-- Start contact-info Area -->

			<section class="contact-info-area section-gap">
				<div class="container">
					<div class="row">
						<div class="single-info col-lg-3 col-md-6">
							 <h4>Visite Nosso Escritório</h4>
							 <p>
							 	Av. C-12, nº 1555 - Cristiano de Carvalho, Barretos - SP, 14781-449
							 </p>                                   
						</div>
						<div class="single-info col-lg-3 col-md-6">
							 <h4>Converse com a gente</h4>
							 <p>
								Telefone Cel: (17)99999999
							 </p>                                   
						</div>
						<div class="single-info col-lg-3 col-md-6">
							 <h4>Emails Pessoais</h4>
							 <p>
								Vitor@Mover.com<br>
								Filipe@Mover.com<br>
								Evandro@Mover.com<br>
								Bruno@Mover.com
							 </p>                                   
						</div>
						<div class="single-info col-lg-3 col-md-6">
							 <h4>Email para Suporte Avançado</h4>
							 <p>
							 	suporte@Mover.com 
							 </p>                                   
						</div>																		
					</div>
				</div>	
			</section>
			<!-- End contact-info Area -->
                        
			<!-- Start Contact Area -->
			<section class="contact-area" id="contact">
				<div class="container-fluid">
					<div class="row">
						<div class="col-12 mx-auto">
						   <iframe
							  width="40%"
			                  height="450"
							  frameborder="0" style="border:0; margin-left: 5% !important;" class="frame"
							  src="https://www.google.com/maps/embed/v1/place?key=AIzaSyCTp_N3HuzLb2L2DXGC0te8fnb2gM2F0WU&q=Faculdade+Barretos" 

							   &origin=Oslo+Norway
								  &destination=Telemark+Norway
								  &avoid=tolls|highways

							  allowfullscreen>
							</iframe>
						</div>
					</div>
				</div>

				<div class="container-fluid">
					<div class="row align-items-center d-flex justify-content-start">
						<div class="col-lg-6 col-md-12 contact-left no-padding">
	      					<div style=" width:100%;
	                height: 450px;" id="map"></div>
						</div>
						<div class="col-lg-4 col-md-12 " style="margin-top: -55% !important;">
							<form class="form-area" id="myForm" action="mail.php" method="post" class="contact-form text-right">
								<h4 class="text-dark">Mensagem para o Suporte :</h4>
								<input name="fname" placeholder="Digite seu nome..." onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" class="common-input mt-10" required="" type="text">
								<input name="email" placeholder="Digite seu email..." pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" class="common-input mt-10" required="" type="email">
								<textarea class="common-textarea mt-10" name="message" placeholder="Digite sua mensagem..." onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required=""></textarea>
								<button class="primary-btn mt-20">Enviar Mensagem<span class="lnr lnr-arrow-right"></span></button>
								<div class="alert-msg">
								</div>
							</form>
						</div>
					</div>
				</div>
			</section>
			<!-- End Contact Area -->	

			<!-- start footer Area -->
		<div class="text-center">
			<footer class="footer-area section-gap ">
				<div class="container">
					<div class="row">
						<div class="col-lg-3  col-md-6 col-sm-6 ">
							<div class="single-footer-widget">
								<h6>Sobre nos</h6>
								<p>
									Empresa qualificada e com grandes responsabilidades com seus usuarios.
								</p>
							</div>
						</div>
						<div class="col-lg-3  col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>Volte a Home</h6>
								<p></p>
								<div class="" id="mc_embed_signup">

										

										<div class="flex-row">
				                            	<a href="index.php"><button class="primary-btn" href="index.php" >Home<span class="lnr lnr-arrow-right"></span><div></div></button></a>
				                            	<div style="position: absolute; left: -5000px;">
													
												</div>
				                          	
											<!-- <div class="col-lg-4 col-md-4">
												<button class="bb-btn btn"><span class="lnr lnr-arrow-right"></span></button>
											</div>  -->
										</div>		
										<div class="info"></div>
									
								</div>
							</div>
						</div>						
						<div class="col-lg-3  col-md-6 col-sm-6">
							<div class="single-footer-widget mail-chimp " >
								<h6 class="mb-20">Instragram</h6>
								<ul class="instafeed d-flex flex-wrap">
									<li><img src="assets/img/i1.jpg" alt=""></li>
									<li><img src="assets/img/i2.jpg" alt=""></li>
									<li><img src="assets/img/i3.jpg" alt=""></li>
									<li><img src="assets/img/i4.jpg" alt=""></li>
									<li><img src="assets/img/i5.jpg" alt=""></li>
									<li><img src="assets/img/i6.jpg" alt=""></li>
									<li><img src="assets/img/i7.jpg" alt=""></li>
									<li><img src="assets/img/i8.jpg" alt=""></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6">
							<div class="single-footer-widget ">
								<h6>Siga-nos</h6>
								<div class="footer-social d-flex align-items-center" style="margin-left: 40% !important;">
									<a href="#"><i class="fa fa-facebook"></i></a>
									<a href="#"><i class="fa fa-twitter"></i></a>

								</div>
							</div>
						</div>							
					</div>
		
				</div>
			</footer>	
		</div>	
		<!-- End footer Area -->		

			<!-- SCRIPTS JS -->
			<script src="assets/js/vendor/jquery-2.2.4.min.js" type="98fd3c3ae924310ab1e0f775-text/javascript"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous" type="98fd3c3ae924310ab1e0f775-text/javascript"></script>
			<script type="98fd3c3ae924310ab1e0f775-text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
			<script src="assets/js/vendor/bootstrap.min.js" type="98fd3c3ae924310ab1e0f775-text/javascript"></script>
			<script src="assets/js/jquery.ajaxchimp.min.js" type="98fd3c3ae924310ab1e0f775-text/javascript"></script>
			<script src="assets/js/jquery.nice-select.min.js" type="98fd3c3ae924310ab1e0f775-text/javascript"></script>
			<script src="assets/js/jquery.sticky.js" type="98fd3c3ae924310ab1e0f775-text/javascript"></script>
			<script src="assets/js/ion.rangeSlider.js" type="98fd3c3ae924310ab1e0f775-text/javascript"></script>
			<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js" type="98fd3c3ae924310ab1e0f775-text/javascript"></script>
			<script src="assets/js/jquery.magnific-popup.min.js" type="98fd3c3ae924310ab1e0f775-text/javascript"></script>
			<script src="assets/js/main.js" type="98fd3c3ae924310ab1e0f775-text/javascript"></script>

		</body>
	</html>