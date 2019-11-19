<?php 
ob_start();
session_start();

    include_once("controller/conexao.php");
    if(!isset($_GET['cod_imovel'])){ header("Location: dashboard.php"); exit;}//TESTANDO SE HÁ ID NA URL, se não haver redireciona ao painel...
    $cod_imovel = $_GET['cod_imovel'];//Atribuindo ID da URL na variavel $cod_imovel...				

    $login = null;
    $senha = null;

    if(!isset($_SESSION['login']) && (!isset($_SESSION['senha'])) && $_SESSION['w_id_y']){
        header("Location: login.php");exit;
        $name =  $_SESSION['login'];
        
    } else {
        $logged = true;
        $login = $_SESSION['login'];
        $senha = $_SESSION['senha'];
        $cod_usuario = $_SESSION['w_id_y'];
    }

    // INCLUDES PHP
    include_once("./theme/header.php");
    include_once("./theme/footer.php");
    
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Imóvel - iMovel</title>

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
        <?php 
            //selecionando dados do banco
            $buscaImovel=$conn->prepare("SELECT * 
            FROM tab_casa AS tc
                INNER JOIN tab_endereco_casa AS tec
                    ON tc.cod_casa = tec.cod_casa
                INNER JOIN tab_imagem_casa AS tic
                    ON tc.cod_casa = tic.cod_casa
                INNER JOIN tab_usuario AS tu
                    ON tc.cod_usuario = $cod_usuario
            WHERE tc.cod_casa='$cod_imovel'");
            
            $buscaImovel->execute();
            $linha = $buscaImovel->fetchAll(PDO::FETCH_ASSOC);

            try{//testando para ver se existe Imovel cadastrados com este ID, se tiver ele executa...
                if($linha > 0){
                    foreach ($linha as $listar) {	
                        //atribuindo dados a variaveis, para ficar mais facil!...
                        //Listando dados do endereco
                        $cod_endereco = $listar['cod_endereco'];
                        $logradouro = $listar['logradouro'];
                        $numero = $listar['numero'];
                        $bairro = $listar['bairro'];
                        $cidade = $listar['cidade'];
                        $uf = $listar['uf'];
                        $cep = $listar['cep'];
                        //listando dados da casa
                        $cod_casa = $listar['cod_casa'];
                        $qtd_quarto = $listar['qtd_quarto'];
                        $qtd_banheiro = $listar['qtd_banheiro'];
                        $qtd_suite = $listar['qtd_suite'];
                        $area = $listar['area'];
                        $aluguel = $listar['aluguel'];
                        $tipo = $listar['tipo'];
                        $garagem = $listar['garagem'];
                        $cod_usuario = $listar['cod_usuario'];
                        //Listando dados de imagem
                        $cod_imagem = $listar['cod_imagem'];
                        $nome_imagem = $listar['nome_imagem'];
                        $caminho_imagem = $listar['caminho_imagem'];

                        $tipo = $listar["tipo"];
                        switch($tipo){
                            case "1":
                                $tipo_show = "Apartamento";
                                break;
                            case "2":
                                $tipo_show = "Casa";
                            break;
                            case "3":
                                $tipo = "Casa em Condominio";
                            break;
                            case "4":
                                $tipo = "kitnet";
                            break;
                        }
                    }

            ?>
    <section class="about-generic-area pb-100 p">
        <div class="container border-top-generic">
            <h3 class="about-title mt-30 mb-30">Editar Imóvel</h3>
            <div class="col mb-30 mt-30">
                <img id="img" value="<?php echo "./".$caminho_imagem."/".$nome_imagem ?>" class="img-fluid" alt=""/>
            </div>

            

            <form method="POST" enctype="multipart/form-data" action="controller/editarImovel.php">
                <h5>Envie as informações do seu imóvel</h5>

                <h5 class="mt-10">Endereço</h5 class="mt-10">
                <input type="hidden" name="cod_casa" value="<?php echo $cod_casa ?>">
                <div class="mt-10">
                    <input type="text" value="<?php echo $cep ?>" onblur="" name="cep" placeholder="CEP" required="" class="single-input">
                </div>
                <div class="mt-10">
                    <input type="text" name="logradouro" value="<?php echo $logradouro ?>" placeholder="Logradouro ex: Av. Paulista" required="" class="single-input">
                </div>

                <div class="row">    
                    <div class="form-select mt-15 col-lg-6 col-sm-12" id="default-select" "="">
                        <select id="uf" name="uf" style="display: none;">
                            <option value="<?php echo $uf?>" selected><?php echo $uf?></option>
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
                        <!-- <div class="nice-select" tabindex="0">
                            <span class="current">Estado - UF</span>
                            <ul class="list">
                                <li data-value="<?php echo $uf?>" class="option"><?php echo $uf?></li>
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
                        </div> -->
                    </div>

                    <div class="mt-15 col-lg-6 col-sm-12">
                        <input type="text" name="cidade" value="<?php echo $cidade ?>" placeholder="Cidade" required="" class="single-input">
                    </div>
                </div>
                
                <div class="row">
                    <div class="mt-15 col-lg-6 col-sm-12">
                        <input type="text" name="numero" value="<?php echo $numero ?>" placeholder="Número" required="" class="single-input">
                    </div>
                    <div class="mt-15 col-lg-6 col-sm-12">
                        <input type="text" value="<?php echo $bairro ?>" name="bairro" placeholder="Bairro" required="" class="single-input">
                    </div>
                </div>
                <div class="row">
                    <div class="mt-15 col-lg-6 col-sm-12">
                        <input type="number" name="area" value="<?php echo $area ?>" placeholder="Área em m²" required="" step="0.01" class="single-input">
                    </div>
                    <div class="mt-15 col-lg-6 col-sm-12">
                        <input type="number" required="" value="<?php echo $aluguel ?>" step="0.01" min="0" name="aluguel" class="single-input" placeholder="Valor do aluguel">
                    </div>
                </div>
                
                <div class="row">
                    <!-- RADIOS -->
                    <div class="col">
                        <h5 class="mt-20">Tipo de imóvel</h5>
                        <div  class="form-select" id="default-select" "="">
                            <select id="tipo" name="tipo" style="display: none;">
                                <option value="<?php echo $tipo?>" selected><?php echo $tipo ?></option>
                                <option value="1">Apartamento</option>
                                <option value="2">Casa</option>
                                <option value="3">Casa em Condominio</option>
                                <option value="4">Kitnet</option>
                            </select>
                            <!-- <div class="nice-select" tabindex="0">
                                <span class="current">Tipo de imóvel</span>
                                <ul class="list">
                                    <li data-value="1" class="option">Apartamento</li>
                                    <li data-value="2" class="option">Casa</li>
                                    <li data-value="3" class="option">Casa em Condominio</li>
                                    <li data-value="4" class="option">Kitnet</li>
                                </ul>
                            </div> -->
                        </div>
                    </div>
                    <div class="col">
                        <h5 class="mt-20">Quantos quartos?</h5>
                        <input type="number" required="" value="<?php echo $qtd_quarto ?>" name="qtd_quarto" min="0" class="single-input" placeholder="Quantidade de Quartos">
                    </div>
                    <!-- FIM RADIOS -->
                </div>
                
                
                <!-- qtd_quarto
                <li data-value="1" class="option">qtd_banheiro, qtd_suite, area, aluguel, tipo, garagem, cod_usuario -->
                <div class="row">
                    <!-- RADIOS -->
                    <div class="col">
                        <h5 class="mt-20">Quantos banheiros?</h5>
                        <input type="number" name="qtd_banheiro" value="<?php echo $qtd_banheiro ?>" id="qtd_banheiro" required="" class="single-input" min="0">
                    </div>
                    <div class="col">
                        <h5 class="mt-20">Quantas suites?</h5>
                        <input type="number" name="qtd_suite" value="<?php echo $qtd_suite ?>" id="qtd_suite" required="" class="single-input" min="0">
                    </div>
                    <div class="col">
                        <h5 class="mt-20">Possui garagem para quantos carros?</h5>
                        <input type="number" required="" value="<?php echo $garagem ?>" name="garagem" min="0" class="single-input" placeholder="Quantidade de vagas na garagem">
                    </div>
                    <!-- FIM RADIOS -->
                </div>
                <div class="row mt-20">
                    <div class="col">
                        <h5 class="mt-20 mb-25">Imagem</h5>
                        <input type="file" required="" value="" id="imagem" name="imagem" class="single-input" placeholder="Imagem">
                    </div>
                </div>
                <!-- <div class="single-gallery-image"> -->
                    
                <!-- </div> -->
                <div class="mt-20 row align-items-center justify-content-center">
                    <input type="submit" name="atualizar" class="genric-btn success circle" value="Atualizar">
                    
                    <div id="resultado"></div>
                </div>
            </form>

            <?php
            }else{
                    echo '<div class="alert alert-danger">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>Aviso!</strong> Não há dados cadastrados com o id informado.
                    </div>';exit;
                }

            }catch(PDOException $e){
                echo $e;
            }
            ?>
        </div>
    </section>
    <?php
        __footer();
    ?>

    <!-- <script src="assets/js/vendor/jquery-2.2.4.min.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
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

    $(function(){
        $('#imagem').change(function(){
            const file = $(this)[0].files[0];
            const fileReader = new FileReader();

            fileReader.onloadend = function(){
                $('#img').attr('src', fileReader.result);
            }
            fileReader.readAsDataURL(file);
        })
    })


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
        var cep = $("input[name=cep]").val();

        // var fd = new FormData();
        var files = $('#imagem')[0].files[0];
        // fd.append('imagem',files);

        // var uf = $("select[option=uf]").val();
        // var formData = new FormData(this);
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
            files: imagem
        },function(data) {
            $("#resultado").html(data)
        })
        return false;
    }
    </script>
</body>
</html>