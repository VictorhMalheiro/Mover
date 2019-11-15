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
    <title>Cadastrar Imóvel</title>

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
            <h3 class="about-title mt-30 mb-30">Cadastrar Imóvel</h3>
            <form method="POST" onsubmit="return cadastrarImovelPHP()" action="#">
                <h5>Envie as informações do seu imóvel</h5>
                <div class="mt-10">
                    <input type="text" onblur="" name="CEP" placeholder="CEP" required="" class="single-input">
                </div>
                <div class="mt-10">
                    <input type="text" name="nome" placeholder="Seu Nome" required="" class="single-input">
                </div>
                <!-- RADIOS -->
                <h5 class="mt-20">Tipo de imóvel</h5>
                <div class="mt-10  btn-group btn-group-toggle" data-toggle="buttons">
                    <label class="btn btn-principal active">
                        <input type="radio" name="options" id="apartamento" autocomplete="off" checked> Apartamento
                    </label>
                    <label class="btn  btn-principal">
                        <input type="radio" name="options" id="kitnet" autocomplete="off"> Kitnet
                    </label>
                    <label class="btn btn-principal">
                        <input type="radio" name="options" id="casa" autocomplete="off"> Casa
                    </label>
                    <label class="btn btn-principal">
                        <input type="radio" name="options" id="casaEmCondominio" autocomplete="off"> Casa em Condomínio
                    </label>
                </div>
                <!-- FIM RADIOS -->
                <div class="mt-15">
                        <input type="text" name="endereco" placeholder="Endereço ex: Av. Paulista" required="" class="single-input">
                    </div>
                <div class="row">
                    <div class="mt-15 col-lg-6 col-sm-12">
                        <input type="text" name="numero" placeholder="Número" required="" class="single-input">
                    </div>
                    <div class="mt-15 col-lg-6 col-sm-12">
                        <input type="text" name="complemento" placeholder="Complemento" required="" class="single-input">
                    </div>
                </div>
                <div class="mt-20 row align-items-center justify-content-center">
                    <input type="submit" name="cadastrar" class="genric-btn success circle" value="Enviar">
                </div>

            </form>
        </div>
    </section>
    <?php
        __footer();
    ?>

    <!-- SCRIPTS JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
        integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous">
    </script>
    <script type="text/javascript"
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/ion.rangeSlider.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/main.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/js/bootstrap.js"></script>

    <script>
    function cadastrarImovelPHP() {

        var cep = $("input[name=cep]").val();
        var nome = $("input[name=nome]").val();
        var options = $("input[name=options]").val();
        var endereco = $("input[name=endereco]").val();
        var numero = $("input[name=numero]").val();
        var complemento = $("input[name=complemento]").val();

        $.post("controller/login.php", {
                cep: cep,
                nome: nome,
                options: options,
                endereco: endereco,
                numero: numero,
                complemento: complemento
            },
            function(data) {
                $("#resultado").html(data)
            })
        return false;
    }
    </script>
</body>
</html>