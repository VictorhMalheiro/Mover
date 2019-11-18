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
            <form method="POST" enctype="multipart/form-data" onsubmit="return cadastrarImovelPHP()" action="#">
                <h5>Envie as informações do seu imóvel</h5>

                <h5 class="mt-10">Endereço</h5 class="mt-10">
                <div class="mt-10">
                    <input type="text" onblur="" name="cep" placeholder="CEP" required="" class="single-input">
                </div>
                <div class="mt-10">
                    <input type="text" name="logradouro" placeholder="Logradouro ex: Av. Paulista" required="" class="single-input">
                </div>

                <div class="row">    
                    <div class="form-select mt-15 col-lg-6 col-sm-12" id="default-select" "="">
                        <select id="uf" style="display: none;">
                            <option value="AC">Acre - AC</option>
                            <option value="AL">Alagoas - AL</option>
                            <option value="AP">Amapá - AP</option>
                            <option value="AM">Amazonas - AM</option>                                
                            <option value="BA">Bahia  - BA</option>
                            <option value="CE">Ceará - CE</option>
                            <option value="DF">Distrito Federal  - DF</option>
                            <option value="ES">Espírito Santo - ES</option>
                            <option value="GO">Goiás - GO</option>
                            <option value="MA">Maranhão - MA</option>
                            <option value="MT">Mato Grosso - MT</option>
                            <option value="MS">Mato Grosso do Sul - MS</option>
                            <option value="MG">Minas Gerais - MG</option>                                
                            <option value="PA">Pará - PA</option>
                            <option value="PB">Paraíba - PB</option>
                            <option value="PR">Paraná - PR</option>
                            <option value="PE">Pernambuco - PE</option>
                            <option value="PI">Piauí - PI</option>
                            <option value="RJ">Rio de Janeiro - RJ</option>
                            <option value="RN">Rio Grande do Norte - RN</option>
                            <option value="RS">Rio Grande do Sul - RS</option>                                
                            <option value="RO">Rondônia - RO</option>
                            <option value="RR">Roraima - RR</option>
                            <option value="SC">Santa Catarina - SC</option>
                            <option value="SP">São Paulo - SP</option>
                            <option value="SE">Sergipe - SE</option>
                            <option value="TO">Tocantins - TO</option>
                        </select>
                        <div class="nice-select" tabindex="0">
                            <span class="current">Estado - UF</span>
                            <ul class="list">
                                <li data-value="AC" class="option">Acre - AC</li>
                                <li data-value="AL" class="option">Alagoas - AL</li>
                                <li data-value="AP" class="option">Amapá - AP</li>
                                <li data-value="AM" class="option">Amazonas - AM</li>                                
                                <li data-value="BA" class="option">Bahia  - BA</li>
                                <li data-value="CE" class="option">Ceará - CE</li>
                                <li data-value="DF" class="option">Distrito Federal  - DF</li>
                                <li data-value="ES" class="option">Espírito Santo - ES</li>
                                <li data-value="GO" class="option">Goiás - GO</li>
                                <li data-value="MA" class="option">Maranhão - MA</li>
                                <li data-value="MT" class="option">Mato Grosso - MT</li>
                                <li data-value="MS" class="option">Mato Grosso do Sul - MS</li>
                                <li data-value="MG" class="option">Minas Gerais - MG</li>                                
                                <li data-value="PA" class="option">Pará - PA</li>
                                <li data-value="PB" class="option">Paraíba - PB</li>
                                <li data-value="PR" class="option">Paraná - PR</li>
                                <li data-value="PE" class="option">Pernambuco - PE</li>
                                <li data-value="PI" class="option">Piauí - PI</li>
                                <li data-value="RJ" class="option">Rio de Janeiro - RJ</li>
                                <li data-value="RN" class="option">Rio Grande do Norte - RN</li>
                                <li data-value="RS" class="option">Rio Grande do Sul - RS</li>                                
                                <li data-value="RO" class="option">Rondônia - RO</li>
                                <li data-value="RR" class="option">Roraima - RR</li>
                                <li data-value="SC" class="option">Santa Catarina - SC</li>
                                <li data-value="SP" class="option">São Paulo - SP</li>
                                <li data-value="SE" class="option">Sergipe - SE</li>
                                <li data-value="TO" class="option">Tocantins - TO</li>
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
                        <input type="number" name="area" placeholder="Área em m²" required="" step="0.01" class="single-input">
                    </div>
                    <div class="mt-15 col-lg-6 col-sm-12">
                        <input type="number" required="" step="0.01" min="0" name="aluguel" class="single-input" placeholder="Valor do aluguel">
                    </div>
                </div>
                
                <div class="row">
                    <!-- RADIOS -->
                    <div class="col">
                        <h5 class="mt-20">Tipo de imóvel</h5>
                        <div  class="form-select" id="default-select" "="">
                            <select id="tipo" style="display: none;">
                                <option value="1">Apartamento</option>
                                <option value="2">Casa</option>
                                <option value="3">Casa em Condominio</option>
                                <option value="4">Kitnet</option>
                            </select>
                            <div class="nice-select" tabindex="0">
                                <span class="current">Tipo de imóvel</span>
                                <ul class="list">
                                    <li data-value="1" class="option">Apartamento</li>
                                    <li data-value="2" class="option">Casa</li>
                                    <li data-value="3" class="option">Casa em Condominio</li>
                                    <li data-value="4" class="option">Kitnet</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <h5 class="mt-20">Quantos quartos?</h5>
                        <input type="number" required="" name="qtd_quarto" min="0" class="single-input" placeholder="Quantidade de Quartos">
                    </div>
                    <!-- FIM RADIOS -->
                </div>
                
                
                <!-- qtd_quarto
                <li data-value="1" class="option">qtd_banheiro, qtd_suite, area, aluguel, tipo, garagem, cod_usuario -->
                <div class="row">
                    <!-- RADIOS -->
                    <div class="col">
                        <h5 class="mt-20">Quantos banheiros?</h5>
                        <input type="number" name="qtd_banheiro" id="qtd_banheiro" required="" class="single-input" min="0">
                    </div>
                    <div class="col">
                        <h5 class="mt-20">Quantas suites?</h5>
                        <input type="number" name="qtd_suite" id="qtd_suite" required="" class="single-input" min="0">
                    </div>
                    <div class="col">
                        <h5 class="mt-20">Possui garagem para quantos carros?</h5>
                        <input type="number" required="" name="garagem" min="0" class="single-input" placeholder="Quantidade de vagas na garagem">
                    </div>
                    <!-- FIM RADIOS -->
                </div>
                <div class="col">
                        <h5 class="mt-20">Imagem</h5>
                        <input type="file" required="" name="imagem" class="single-input" placeholder="Imagem">
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

        var qtd_quarto = $("input[name=qtd_quarto]").val();
        var qtd_banheiro  = $("input[name=qtd_banheiro]").val();
        var qtd_suite  = $("input[name=qtd_suite]").val();
        var area  = $("input[name=area]").val();
        var aluguel  = $("input[name=aluguel]").val();
        var tipo = $("#tipo option:selected").val();
        var garagem  = $("input[name=garagem]").val();
        var logradouro = $("input[name=logradouro]").val();
        var numero = $("input[name=numero]").val();
        var bairro = $("input[name=bairro]").val();
        var cidade = $("input[name=cidade]").val();
        var uf = $("#uf option:selected").val();
        // var uf = $("select[option=uf]").val();
        var cep = $("input[name=cep]").val();
        var formData = new FormData(this);
        // var imagem = $("input[name=imagem]").file();

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
            cep: cep,            
            formData: formData            
        },function(data) {
            $("#resultado").html(data)
        })
        return false;
    }
    </script>
</body>
</html>