<?php
ob_start();
session_start();
include_once("controller/conexao.php");

if (isset($_SESSION['login']) && (isset($_SESSION['senha']))) {
	header("Location: dashboard.php");
	exit;
}
?>
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
    <title>iMovel</title>

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

    <!-- <script src="assets/js/ajaxScripts.js"></script> -->
    <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


</head>



<?php

	// INCLUDES PHP
	include_once("./theme/header.php");
	include_once("./theme/footer.php");
	?>

<body>

    <section class="generic-banner relative">
        <!-- START HEADER -->
        <?php
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
                        <div>
                            <?php
						if (isset($_POST['logar'])) {
							$login = trim(strip_tags($_POST['login']));
							$senha = trim(strip_tags($_POST['senha']));

							$buscausuario = "SELECT * FROM `tab_usuario` WHERE login = :login and senha = :senha";

							try {
								$resultado = $conn->prepare($buscausuario);
								$resultado->bindParam(':login', $login, PDO::PARAM_STR);
								$resultado->bindParam(':senha', $senha, PDO::PARAM_STR);
								$resultado->execute();

								$contar = $resultado->rowCount();
								$linha = $resultado->fetch(PDO::FETCH_ASSOC);

								if ($contar > 0) {
									$login = $_POST['login'];
									$senha = $_POST['senha'];
									$_SESSION['w_id_y'] = $linha['cod_usuario'];
									$_SESSION['login'] = $login;
									$_SESSION['senha'] = $senha;

									?>
                            <div class="row height align-items-center justify-content-center">
                                <div class='lds-ellipsis'>
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                </div>
                            </div>
                            <?php
									header("refresh: 3, url=dashboard.php");
									exit;
								} else {
								?>
                            <div class="alert alert-warning" role="alert">
                                Dados incorretos
                            </div>
                            <?php
								}
							} catch (PDOException $e) {
								echo $e;
							}
						}
						?>
                            <form method="POST" action="#">
                                <div class="mt-10">
                                    <input type="text" onblur="" name="login" placeholder="Usuário"
                                        required="" class="single-input" autocomplete="username"
                                    >
                                </div>
                                <div class="mt-10"></div>
                                <input type="password" name="senha" placeholder="Senha" 
                                    autocomplete="current-password"
                                    required="" class="single-input"
                                >
								</div>
							<div class="col">
                            <div class="mt-2 row align-items-center justify-content-center">
								<input type="submit" name="logar" class="genric-btn success circle" value="Entrar">
                                &nbsp
                                <a href="cadastrar.php" class="genric-btn info-border circle arrow">
                                    Cadastrar
                                    <span class="lnr lnr-arrow-right"></span>
                                </a>
                            </div>
                            </div>
                            
							</form>
                        <div class="mt-2 row align-items-center justify-content-center">
                            <div id="resultado"></div>
                        </div>
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
			__footer();
			?>
        <!-- END FOOTER -->
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
        integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous">
    </script>
    <script type="text/javascript"
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
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