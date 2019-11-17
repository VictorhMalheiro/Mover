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
    <title>Cadastrar Imóvel - iMovel</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
    <!--
    CSS
    ============================================= -->
    <link rel="stylesheet" href="assets/css/linearicons.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/main.css">
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

                <h5 class="mt-10">Endereço</h5 class="mt-10">
                <div class="mt-10">
                    <input type="text" onblur="" name="CEP" placeholder="CEP" required="" class="single-input">
                </div>
                <div class="mt-10">
                    <input type="text" name="logradouro" placeholder="Logradouro ex: Av. Paulista" required="" class="single-input">
                </div>

                <div class="row">    
                    <div class="form-select mt-15 col-lg-6 col-sm-12" id="default-select" "="">
                        <select name="uf" style="display: none;">
                            <option value="1">Acre - AC</option>
                            <option value="1">Alagoas - AL</option>
                            <option value="1">Amapá - AP</option>
                            <option value="1">Amazonas - AM</option>                                
                            <option value="1">Bahia  - BA</option>
                            <option value="1">Ceará - CE</option>
                            <option value="1">Distrito Federal  - DF</option>
                            <option value="1">Espírito Santo - ES</option>
                            <option value="1">Goiás - GO</option>
                            <option value="1">Maranhão - MA</option>
                            <option value="1">Mato Grosso - MT</option>
                            <option value="1">Mato Grosso do Sul - MS</option>
                            <option value="1">Minas Gerais - MG</option>                                
                            <option value="1">Pará - PA</option>
                            <option value="1">Paraíba - PB</option>
                            <option value="1">Paraná - PR</option>
                            <option value="1">Pernambuco - PE</option>
                            <option value="1">Piauí - PI</option>
                            <option value="1">Rio de Janeiro - RJ</option>
                            <option value="1">Rio Grande do Norte - RN</option>
                            <option value="1">Rio Grande do Sul - RS</option>                                
                            <option value="1">Rondônia - RO</option>
                            <option value="1">Roraima - RR</option>
                            <option value="1">Santa Catarina - SC</option>
                            <option value="1">São Paulo - SP</option>
                            <option value="1">Sergipe - SE</option>
                            <option value="1">Tocantins - TO</option>
                        </select>
                        <div class="nice-select" tabindex="0">
                            <span class="current">Estado - UF</span>
                            <ul class="list">
                                <li data-value="AC" class="option">Acre - AC</li>
                                <li data-value="AL" class="option">Alagoas - AL</li>
                                <li data-value="AP" class="option">Amapá - AP</li>
                                <li data-value="AA" class="option">Amazonas - AM</li>                                
                                <li data-value="AA" class="option">Bahia  - BA</li>
                                <li data-value="AA" class="option">Ceará - CE</li>
                                <li data-value="AA" class="option">Distrito Federal  - DF</li>
                                <li data-value="AA" class="option">Espírito Santo - ES</li>
                                <li data-value="AA" class="option">Goiás - GO</li>
                                <li data-value="AA" class="option">Maranhão - MA</li>
                                <li data-value="AA" class="option">Mato Grosso - MT</li>
                                <li data-value="AA" class="option">Mato Grosso do Sul - MS</li>
                                <li data-value="AA" class="option">Minas Gerais - MG</li>                                
                                <li data-value="AA" class="option">Pará - PA</li>
                                <li data-value="AA" class="option">Paraíba - PB</li>
                                <li data-value="AA" class="option">Paraná - PR</li>
                                <li data-value="AA" class="option">Pernambuco - PE</li>
                                <li data-value="AA" class="option">Piauí - PI</li>
                                <li data-value="AA" class="option">Rio de Janeiro - RJ</li>
                                <li data-value="AA" class="option">Rio Grande do Norte - RN</li>
                                <li data-value="AA" class="option">Rio Grande do Sul - RS</li>                                
                                <li data-value="AA" class="option">Rondônia - RO</li>
                                <li data-value="AA" class="option">Roraima - RR</li>
                                <li data-value="AA" class="option">Santa Catarina - SC</li>
                                <li data-value="AA" class="option">São Paulo - SP</li>
                                <li data-value="AA" class="option">Sergipe - SE</li>
                                <li data-value="AA" class="option">Tocantins - TO</li>
                            </ul>
                        </div>
                    </div>

                    <div class="mt-15 col-lg-6 col-sm-12">
                        <input type="text" name="cidade" placeholder="Cidade" required="" class="single-input">
                    </div>
                </div>
                
                <div class="row">
                    <div class="mt-15 col-lg-6 col-sm-12">
                        <input type="text" name="numero" placeholder="Número" required="" class="single-input">
                    </div>
                    <div class="mt-15 col-lg-6 col-sm-12">
                        <input type="text" name="bairro" placeholder="Bairro" required="" class="single-input">
                    </div>
                </div>
                <div class="row">
                    <div class="mt-15 col-lg-6 col-sm-12">
                        <input type="text" name="area" placeholder="Área em m²" required="" class="single-input">
                    </div>
                    <div class="mt-15 col-lg-6 col-sm-12">
                        <input type="text" name="aluguel" placeholder="Valor do aluguel" required="" class="single-input">
                    </div>
                </div>
                
                <div class="row">
                    <!-- RADIOS -->
                    <div class="col">
                        <h5 class="mt-20">Tipo de imóvel</h5>
                        <div class="mt-10  btn-group btn-group-toggle" data-toggle="buttons">
                            <label class="btn btn-principal active">
                                <input type="radio" name="tipo" id="tipo" autocomplete="off" checked> Apartamento
                            </label>
                            <label class="btn  btn-principal">
                                <input type="radio" name="tipo" id="tipo" autocomplete="off"> Kitnet
                            </label>
                            <label class="btn btn-principal">
                                <input type="radio" name="tipo" id="tipo" autocomplete="off"> Casa
                            </label>
                            <label class="btn btn-principal">
                                <input type="radio" name="tipo" id="tipo" autocomplete="off"> Casa em Condomínio
                            </label>
                        </div>
                    </div>
                    <div class="col">
                        <h5 class="mt-20">Quantos quartos?</h5>
                        <div class="mt-10  btn-group btn-group-toggle" data-toggle="buttons">
                            <label class="btn btn-principal active">
                                <input type="radio" name="qtd_quarto" id="qtd_quarto" autocomplete="off" checked> 0
                            </label>
                            <label class="btn btn-principal">
                                <input type="radio" name="qtd_quarto" id="qtd_quarto" autocomplete="off"> 1
                            </label>
                            <label class="btn  btn-principal">
                                <input type="radio" name="qtd_quarto" id="qtd_quarto" autocomplete="off"> 2
                            </label>
                            <label class="btn btn-principal">
                                <input type="radio" name="qtd_quarto" id="qtd_quartos" autocomplete="off"> 3
                            </label>
                            <label class="btn btn-principal">
                                <input type="radio" name="qtd_quarto" id="qtd_quarto" autocomplete="off"> 4
                            </label>
                            <label class="btn btn-principal">
                                <input type="radio" name="qtd_quarto" id="qtd_quarto" autocomplete="off"> 5
                            </label>
                            <label class="btn btn-principal">
                                <input type="radio" name="qtd_quarto" id="qtd_quarto" autocomplete="off"> 6
                            </label>
                        </div>
                    </div>
                    <!-- FIM RADIOS -->
                </div>
                
                
                <!-- qtd_quarto
                <li data-value="1" class="option">qtd_banheiro, qtd_suite, area, aluguel, tipo, garagem, cod_usuario -->
                <div class="row">
                    <!-- RADIOS -->
                    <div class="col">
                        <h5 class="mt-20">Quantos banheiros?</h5>
                        <div class="mt-10  btn-group btn-group-toggle" data-toggle="buttons">
                            <label class="btn btn-principal active">
                                <input type="radio" name="qtd_banheiro" id="qtd_banheiro" autocomplete="off" checked> 0
                            </label>
                            <label class="btn  btn-principal">
                                <input type="radio" name="qtd_banheiro" id="qtd_banheiro" autocomplete="off"> 1
                            </label>
                            <label class="btn  btn-principal">
                                <input type="radio" name="qtd_banheiro" id="qtd_banheiro" autocomplete="off"> 2
                            </label>
                            <label class="btn btn-principal">
                                <input type="radio" name="qtd_banheiro" id="qtd_banheiro" autocomplete="off"> 3
                            </label>
                            <label class="btn btn-principal">
                                <input type="radio" name="qtd_banheiro" id="qtd_banheiro" autocomplete="off"> 4
                            </label>
                            <label class="btn btn-principal">
                                <input type="radio" name="qtd_banheiro" id="qtd_banheiro" autocomplete="off"> 5
                            </label>
                            <label class="btn btn-principal">
                                <input type="radio" name="qtd_banheiro" id="qtd_banheiro" autocomplete="off"> 6
                            </label>
                        </div>
                    </div>
                    <div class="col">
                        <h5 class="mt-20">Quantas suites?</h5>
                        <div class="mt-10  btn-group btn-group-toggle" data-toggle="buttons">
                            <label class="btn btn-principal active">
                                <input type="radio" name="options" id="apartamento" autocomplete="off" checked> 1
                            </label>
                            <label class="btn  btn-principal">
                                <input type="radio" name="options" id="kitnet" autocomplete="off"> 2
                            </label>
                            <label class="btn btn-principal">
                                <input type="radio" name="options" id="casa" autocomplete="off"> 3
                            </label>
                            <label class="btn btn-principal">
                                <input type="radio" name="options" id="casaEmCondominio" autocomplete="off"> 4
                            </label>
                            <label class="btn btn-principal">
                                <input type="radio" name="options" id="casaEmCondominio" autocomplete="off"> 5
                            </label>
                            <label class="btn btn-principal">
                                <input type="radio" name="options" id="casaEmCondominio" autocomplete="off"> 6
                            </label>
                        </div>
                    </div>
                    <div class="col">
                        <h5 class="mt-20">Possui garagem para quantos carros?</h5>
                        <div class="mt-10  btn-group btn-group-toggle" data-toggle="buttons">
                            <label class="btn btn-principal active">
                                <input type="radio" name="garagem" id="garagem" autocomplete="off" checked> 0
                            </label>
                            <label class="btn btn-principal">
                                <input type="radio" name="garagem" id="garagem" autocomplete="off"> 1
                            </label>
                            <label class="btn  btn-principal">
                                <input type="radio" name="garagem" id="garagem" autocomplete="off"> 2
                            </label>
                            <label class="btn btn-principal">
                                <input type="radio" name="garagem" id="garagem" autocomplete="off"> 3
                            </label>
                            <label class="btn btn-principal">
                                <input type="radio" name="garagem" id="garagem" autocomplete="off"> 4
                            </label>
                            <label class="btn btn-principal">
                                <input type="radio" name="garagem" id="garagem" autocomplete="off"> 5
                            </label>
                            <label class="btn btn-principal">
                                <input type="radio" name="garagem" id="garagem" autocomplete="off"> 6
                            </label>
                        </div>
                    </div>
                    <!-- FIM RADIOS -->
                </div>

                <div class="mt-20 row align-items-center justify-content-center">
                    <input type="submit" name="cadastrar" class="genric-btn success circle" value="Enviar">
                    
                    <div id="resultado"></div>
                </div>
            </form>
        </div>
    </section>
    <?php
        __footer();
    ?>

    <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper/js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/popper.js"></script>
    <script src="assets/js/vendor/bootstrap.min.js"></script>
    
    <script src="assets/js/jquery.ajaxchimp.min.js"></script>
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <script src="assets/js/jquery.sticky.js"></script>
    <script src="assets/js/ion.rangeSlider.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/main.js"></script>	

    <script>
    function cadastrarImovelPHP() {

        var qtd_quarto  = $("input[name=qtd_quarto]").val();
        var qtd_banheiro  = $("input[name=qtd_banheiro]").val();
        var qtd_suite  = $("input[name=qtd_suite]").val();
        var area  = $("input[name=area]").val();
        var aluguel  = $("input[name=aluguel]").val();
        var tipo  = $("input[name=tipo]").val();
        var garagem  = $("input[name=garagem]").val();
        var logradouro = $("input[name=logradouro]").val();
        var numero = $("input[name=numero]").val();
        var bairro = $("input[name=bairro]").val();
        var cidade = $("input[name=cidade]").val();
        var uf = $("select[option=uf]").val();
        var cep = $("input[name=cep]").val();

        $.post("controller/conCadastrarImovel.php",
        {
            qtd_quarto: qtd_quarto,
            qtd_banheiro: qtd_banheiro,
            qtd_suite: qtd_suite,
            area:area,
            aluguel: aluguel,
            tipo: tipo,
            garagem: garagem,
            logradouro: logradouro,
            numero: numero,
            bairro: bairro,
            cidade: cidade,
            uf: uf,
            cep: cep            
        },function(data) {
            $("#resultado").html(data)
        })
        return false;
    }
    </script>
</body>
</html>