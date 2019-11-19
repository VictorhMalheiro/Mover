<?php
    function __header(){    
        // $cod_usuario = null;
        // $nomeUsuario = null;
        include("controller/conexao.php");
        $logged = false;
        $login = null;
        $senha = null;
        if(isset($_SESSION['login']) && (isset($_SESSION['senha']))){
            $logged = true;
            $login = $_SESSION['login'];
            $senha = $_SESSION['senha'];
        }
        //SELECIONAR OS DADOS DO USUARIO
        $buscaUsuario = "SELECT * FROM tab_usuario WHERE login=:login AND senha=:senha";
        try{
            $res = $conn->prepare($buscaUsuario);
            $res->bindParam('login',$login, PDO::PARAM_STR);
            $res->bindParam('senha',$senha, PDO::PARAM_STR);
            $res-> execute();
            $contar = $res->rowCount();
            
            if($contar == 1){
                $linha = $res->fetchAll();
                
                foreach($linha as $listar){
                   $nomeUsuario = $listar['nome'];
                }
            }
        }catch(PDOException $erro){
            echo $erro;
        }
        ?>   

        <header class="default-header">
				<div class="menutop-wrap">
                <div class="menu-top container">
                    <div class="d-flex justify-content-end align-items-center">
                        <ul class="list">
                            <?php
                                if($logged == true){
                                    ?>
                                    <li><a href='cadastrarImovel.php'>Cadastrar Imovel</a></li>
                                    <li><a href='dashboard.php'>Dashboard</a></li>
                                    <li>Olá <?php echo $nomeUsuario; ?></li>
                                    <?php
                                }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>

            <nav class="navbar navbar-expand-lg  navbar-light bg-light">
                <div class="container">
                      <a class="navbar-brand" href="index.php">
                          <img src="assets/img/logo.png" alt="">
                      </a>
                      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>

                      <div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="residencias.php">Imóveis</a></li>
                            <li><a href="index.php#property">Menor valor</a></li>
                            <li><a href="#contact">Contato</a></li>
                            <!-- <li><a href="generic.html">Generic</a></li> -->
                            <?php
                                if($logged == true){
                                    echo "<li><a href='./controller/logout.php'>Sair</a></li>";
                                }else{
                                    echo "<li><a href='login.php'>Entrar</a></li>";
                                }
                            ?>
                        </ul>
                      </div>
                </div>
            </nav>


        </header>
        
        <?php
    }
?>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>