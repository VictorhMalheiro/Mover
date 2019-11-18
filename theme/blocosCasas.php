<?php
    function casasValorAsc() {
        include("./controller/conexao.php");
        // Buscando imoveis do usuario
        $buscaCasa = "SELECT * FROM tab_casa ORDER BY aluguel ASC";
        // cod_casa,qtd_quarto, qtd_banheiro, qtd_suite, area, aluguel, tipo, garagem, cod_usuario
        try{
            $res = $conn->prepare($buscaCasa);
            $res-> execute();

            $linha = $res->fetchAll();

            $contar = $res->rowCount();

            if ($contar > 0) {
                foreach($linha as $listar){
                    $tipo = $listar["tipo"];
                    switch($tipo){
                        case "1":
                            $tipo = "Apartamento";
                        break;
                        case "2":
                            $tipo = "Casa";
                        break;
                        case "3":
                            $tipo = "Casa em Condominio";
                        break;
                        case "4":
                            $tipo = "kitnet";
                        break;
                    }
                    ?>
                    <div class="col-lg-4">
                        <div class="single-property">
                            <div class="images">
                                <img class="img-fluid mx-auto d-block" src="assets/img/s1.jpg" alt="">
                                <a href="./imovel.php?&cod_imovel=<?php echo $listar['cod_casa'];?>"><span>Ver imóvel</span></a>
                            </div>
                            
                            <div class="desc">
                                <div class="top d-flex justify-content-between">
                                    <h4><a href="#"><?php echo $tipo ?></a></h4>
                                    <h4>R$ <?php echo $listar["aluguel"]; ?></h4>
                                </div>
                                <div class="middle">
                                    <div class="d-flex justify-content-start">
                                    <p>Quartos: <?php echo $listar["qtd_quarto"]; ?></p>
                                    <p>Suite: <?php echo $listar["qtd_suite"]; ?></p>
                                    <p>Área: <?php echo $listar["area"]; ?>m²</p>
                                    </div>
                                    <div class="d-flex justify-content-start">
                                    <p>Garagem: <span class="gr"><?php echo $listar["garagem"]; ?></span></p>
                                    <p>Internet: <span class="rd">Não</span></p>
                                    <p>Cleaning: <span class="rd">Não</span></p>
                                    </div>
                                </div>
                                <div class="bottom d-flex justify-content-start">
                                    <p><span class="lnr lnr-heart"></span> 15 Likes</p>
                                    <p><span class="lnr lnr-bubble"></span> 02 Comments</p>
                                </div>	
                            </div>
                        </div>	
                    </div>                    
                    <?php
                }
            }
        }catch(PDOException $erro){
            echo $erro;
        }
    }
?>