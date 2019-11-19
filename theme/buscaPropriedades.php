<?php
    function buscaPropriedades(){
    ?>
    
        <div class="search-field ">
            <form class="search-form"  method="POST" action="../residencias.php">
                <div class="row">
                <div class="col-lg-12  d-flex align-items-center justify-content-center toggle-wrap">
                    <div class="row">
                        <div class="col- text-justify " style="margin-left: 20%;">
                            <h4 class="search-title">Pesquise seu Imóvel</h4>
                        </div>
                        <div class="col">
                            <div class="onoffswitch3 d-block mx-auto">
                                <input type="checkbox" name="onoffswitch3" class="onoffswitch3-checkbox" id="myonoffswitch3" checked="">
                                
                            </div>													
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-xs-6">
                    <select name="localizacao" id="localizacao" class="app-select form-control" required="required" style="">
                        <option value="1" disabled selected>Localização</option>
                        <option value="2">Barretos</option>
                        <option value="3">Colina</option>
                        <option value="4">Bebedouro</option>
                    </select>
             
                </div>

                <div class="col-lg-3 col-md-6 col-xs-6">
                    <select name="tipoPropriedade" id="tipoPropriedade" class="app-select form-control" required="required" style="">
                        <option value="1" disabled selected>Tipo de Propriedade</option>
                        <option value="2">Apartamento</option>
                        <option value="3">Casa</option>
                        <option value="4">Edícula</option>
                        <option value="5">Loft</option>
                        <option value="6">Kitnet</option>
                        <option value="7">Sobrado</option>
                        <option value="8">Flat</option>

                    </select>
                </div>
                <div class="col-lg-3 col-md-6 col-xs-6">
                    <select name="quartos" id="quartos" class="app-select form-control" required="required" style="">
                        <option value="1" disabled selected>Quartos</option>
                        <option value="2">1</option>
                        <option value="3">2</option>
                        <option value="4">3</option>
                        <option value="5">4</option>
                        <option value="6">5</option>
                        <option value="7">6</option>
                    </select>
                </div>
                <div class="col-lg-3 col-md-6 col-xs-6">
                    <select name="banheiro" id="banheiro" class="app-select form-control" required="required" style="">
                        <option value="1" disabled selected>Banheiros</option>
                        <option value="2">1</option>
                        <option value="3">2</option>
                        <option value="4">3</option>
                        <option value="5">4</option>
                        <option value="6">5</option>
                        <option value="7">6</option>
                    </select>
                </div>
                									    
                <div class="mx-auto d-flex justify-content-end">
                    <button class="primary-btn mt-50" style="height: 45px;" onclick="ajaxPesquisaResidencia();">Pesquisar 
                    <span class="lnr lnr-arrow-right"></span></button>
                </div>						  
                </div>
            </form>

        </div>
  
    
    <?php
    }
?>


