<?php 
ob_start();
session_start();

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
    include_once("./controller/conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Perfil - iMovel</title>

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
    <!-- <section class=" relative"> -->
        <!-- START HEADER -->
        <section class="generic-banner relative">
        <div class="container-fluid pt-100 pb-50 relative">
        <?php
            __header();
        ?>
            <!-- <div class="container-fluid  relative"> -->
                <h2 class="text-white about-title pt-50 text-center">Perfil do Usuário</h2>
            <!-- </div> -->
        <!-- END HEADER -->
        </div>
        </section>
    <section class="about-generic-area pb-100 p">
        <div class="container border-top-generic">
            <!--  -->
            <div class="col mb-30">
            <?php
                //SELECIONAR OS DADOS DO USUARIO
                // $buscaUsuario = "SELECT * 
                // FROM tab_usuario AS tu
                //     INNER JOIN tab_endereco_usuario AS teu
                //         ON tu.cod_usuario = teu.cod_usuario
                // WHERE tu.login=:$login AND tu.senha = $senha
                // ";
                $buscaUsuario = "SELECT * FROM tab_usuario WHERE login=:login AND senha=:senha";
                
                try {
                    $res = $conn->prepare($buscaUsuario);
                    $res->bindParam('login',$login, PDO::PARAM_STR);
                    $res->bindParam('senha',$senha, PDO::PARAM_STR);
                    $res-> execute();
                    $contar = $res->rowCount();

                    if($contar == 1){
                        $linha = $res->fetchAll();
                        
                        foreach($linha as $listar){
                            $nomeUsuario = $listar['nome'];
                            $email = $listar['email_usuario'];
                            $cod_usuario = $listar['cod_usuario'];
                        }
                    }

                } catch (PDOException $e) {
                    echo $e;
                }
                
                ?>
 <div class="container-fluid">
    <div class="row my-2">
        <div class="col-lg-8 order-lg-2 mt-5">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a href="" data-target="#profile" data-toggle="tab" class="nav-link active">Perfil</a>
                </li>
                <li class="nav-item">
                    <a href="" data-target="#messages" data-toggle="tab" class="nav-link">Mensagens</a>
                </li>
                <li class="nav-item">
                    <a href="" data-target="#edit" data-toggle="tab" class="nav-link">Editar </a>
                </li>
            </ul>    
            <div class="tab-content py-4" >
                <div class="tab-pane active" id="profile">
                    <div class="row">
                       <div class="tab-pane" >
                    <form role="form">
                    <input type="hidden" name="cod_usuario" value="<?php echo $cod_usuario ?>">

                        <h5 class="mb-4 ml-2">Sobre:</h5>
                        <div class="form-group row ml-5">
                            <label class="col-lg-3 col-form-label form-control-label">Nome</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="text" value="<?php echo $nomeUsuario ?>" disabled>
                            </div>
                        </div>
                        <div class="form-group row ml-5">
                            <label class="col-lg-3 col-form-label form-control-label">Email</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="email" value="<?php echo $email ?>" disabled>
                            </div>
                        </div>
                        <div class="form-group row ml-5">
                            <label class="col-lg-3 col-form-label form-control-label">Endereço</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="text"  value="Rua Geronimo" disabled>
                            </div>
                        </div>
                        <div class="form-group row ml-5">
                            <label class="col-lg-3 col-form-label form-control-label">Cidade/UF</label>
                            <div class="col-lg-6">
                                <input class="form-control" type="text" value="Barretos" disabled>
                            </div>
                            <div class="col-lg-3">
                                <input class="form-control" type="text"  value="SãoPaulo" disabled>
                            </div>
                        </div>

                        <div class="form-group row ml-5">
                            <label class="col-lg-3 col-form-label form-control-label">Usuário</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="text" value="<?php echo $login; ?>" disabled>
                            </div>
                        </div>
                        <div class="form-group row ml-5">
                            <label class="col-lg-3 col-form-label form-control-label">Password</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="password" value="<?php echo $senha; ?>" disabled>
                            </div>
                        </div>
                    </form>
                </div>
                        
                            
                    </div>
                    <!--/row-->
                </div>
                <div class="tab-pane" id="messages">
                    <div class="alert alert-info alert-dismissable">
                        <a class="panel-close close" data-dismiss="alert">×</a>Voce possiu mensagens novas !
                    </div>
                    <table class="table table-hover table-striped">
                        <tbody>                                    
                            <tr>
                                <td>
                                   <span class="float-right font-weight-bold">Evandro</span>Adorei essa casa!
                                </td>
                            </tr>
                        </tbody> 
                    </table>
                </div>
                <div class="tab-pane" id="edit">
                    <form role="form">
                        <div class="form-group row ml-5">
                            <label class="col-lg-3 col-form-label form-control-label">Nome</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="text" value="Jane" >
                            </div>
                        </div>
                        <div class="form-group row ml-5">
                            <label class="col-lg-3 col-form-label form-control-label">Email</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="email" value="email@gmail.com" >
                            </div>
                        </div>
                        <div class="form-group row ml-5">
                            <label class="col-lg-3 col-form-label form-control-label">Endereço</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="text"  value="Rua Geronimo">
                            </div>
                        </div>
                        <div class="form-group  row ml-5">
                            <label class="col-lg-3 col-form-label form-control-label">Cidade/UF</label>
                            <div class="col-lg-6">
                                 <select class="form-select form-control" id="uf" name="uf" >
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
                            </div>
                            <div class="col-lg-3">
                                <input class="form-control" type="text"  value="SãoPaulo">
                            </div>
                        </div>

                        <div class="form-group row ml-5">
                            <label class="col-lg-3 col-form-label form-control-label">Usuário</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="text" value="<?php echo $nomeUsuario; ?>">
                            </div>
                        </div>
                        <div class="form-group row ml-5">
                            <label class="col-lg-3 col-form-label form-control-label">Password</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="text" value="<?php echo $senha; ?>" >
                            </div>
                        </div>


                            <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label"></label>
                            <div class="col-lg-9" style="padding-left: 5%">
                                <input type="reset" class="btn btn-secondary" value="Cancel">
                                <input type="button" class="btn btn-primary" value="Save Changes">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-lg-4 order-lg-1 text-center mt-5 ">
            <img src="//placehold.it/150" class="mx-auto img-fluid img-circle d-block" alt="avatar">
            <h6 class="mt-2">Upload a different photo</h6>
            <label class="custom-file">
                <input type="file" id="file" class="custom-file-input">
                <span class="custom-file-control">Alterar Imagem</span>
            </label>
        </div>
    </div>
</div>  
                
                
                        </div>
                        
                        <div class="col mb-30 mt-30">
            </div>
        </div>
        </section>
    <?php
        __footer();
    ?>
</body>
</html>