	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/elements/fav.png">
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
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/nice-select.css">
		    <link rel="stylesheet" href="css/ion.rangeSlider.css" />
		    <link rel="stylesheet" href="css/ion.rangeSlider.skinFlat.css" />
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/main.css">
		</head>
		<body>

			<section class="generic-banner relative">
				<!-- START HEADER -->
				<?php
					include_once("./theme/header.php");
					__header();
				?>
				<!-- END HEADER -->
			<div class="container pt-30">
				<div class="row height align-items-center justify-content-center">
					<div class="col-lg-10">
						<div class="generic-banner-content">
							<h2 class="text-white text-center">Login</h2>
							<p class="text-white">
								Faça login e gerencie sua conta.
							</p>
							<div class="">
								<form action="#">
									<div class="mt-10">
										<input type="text" name="first_name" placeholder="Usuário" onfocus="this.placeholder = ''" onblur="this.placeholder = 'usuario'" required="" class="single-input">
									</div>
									<div class="mt-10"></div>
										<input type="password" name="first_name" placeholder="Senha" onfocus="this.placeholder = ''" onblur="this.placeholder = 'password'" required="" class="single-input">
									</div>
									<div class="mt-10">
										<input type="submit" class="genric-btn disable circle" value="Entrar">
									</div>
								</form>
							</div>							
						</div>							
					</div>
				</div>
			</div>
			</section>		
			<!-- End banner Area -->			
			<!-- About Generic Start -->
			<div class="main-wrapper">
				<!-- FOOTER START -->
				<?php
					include_once("./theme/footer.php");
					__footer();
				?>
				<!-- END FOOTER -->
			</div>
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