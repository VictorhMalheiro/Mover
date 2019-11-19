<?php
    function buscaPropriedades(){
    ?>
    
        <div class="search-field ">
            <div class="text-center" style="">
                <h1 style="color: #333 !important" class="text-uppercase">Encontre seu imóvel</h1>
            </div>
            <div class="text-center" style="">
                <h4 style="font-weight: 100" class="search-title">Aqui você negocia direto com o proprietário</h4>
            </div>
            <form class="search-form"  method="POST" action="./residencias.php">
                <div class="row">
                <div class="col-lg-12  d-flex align-items-center justify-content-center toggle-wrap">
                    <div class="row">
                        <div class="col">
                            <div class="onoffswitch3 d-block mx-auto">
                                <input type="checkbox" name="onoffswitch3" class="onoffswitch3-checkbox" id="myonoffswitch3" checked="">
                                
                            </div>													
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-xs-6">
                    <select name="cidade" id="cidade" class="app-select form-control" required="required" style="">
                        <option value="1" disabled selected>Cidade</option>
                        <option value="Barretos">Barretos</option>
                        <option value="Colina">Colina</option>
                        <option value="Bebedouro">Bebedouro</option>
                    </select>
             
                </div>

                <div class="col-lg-3 col-md-6 col-xs-6">
                    <select name="tipo" id="tipo" class="app-select form-control" required="required" style="">
                        <option value="0" disabled selected>Tipo de Imovel</option>
                        <option value="1">Apartamento</option>
                        <option value="2">Casa</option>
                        <option value="3">Casa Condominio</option>
                        <option value="4">Kitnet</option>

                    </select>
                </div>
                <div class="col-lg-3 col-md-6 col-xs-6">
                    <select name="qtd_quarto" id="qtd_quarto" class="app-select form-control" required="required" style="">
                        <option value="1" disabled selected>Quartos</option>
                        <option value="2">1</option>
                        <option value="3">2</option>
                        <option value="4">3</option>
                        <option value="5">4</option>
                        <option value="6">5</option>
                        <option value="7">6</option>
                    </select>
                </div>
                									    
                <div class="mx-auto d-flex justify-content-end">
                    <button class="primary-btn mt-50" style="height: 45px;"">Pesquisar 
                    <span class="lnr lnr-arrow-right"></span></button>
                </div>						  
                </div>
            </form>

        </div>
  
    
    <?php
    }
?>


