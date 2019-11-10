<?php
    function buscaPropriedades(){
    ?>
    
        <div class="search-field">
            <form class="search-form"  method="POST" onsubmit="return false;">
                <div class="row">
                <div class="col-lg-12  d-flex align-items-center justify-content-center toggle-wrap">
                    <div class="row">
                        <div class="col- text-justify " style="margin-left: 20%;">
                            <h4 class="search-title">Pesquise sua Residencia</h4>
                        </div>
                        <div class="col">
                            <div class="onoffswitch3 d-block mx-auto">
                                <input type="checkbox" name="onoffswitch3" class="onoffswitch3-checkbox" id="myonoffswitch3" checked="">
                                
                            </div>													
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-xs-6">
                    <select name="localizacao" id="localizacao" class="app-select form-control" required="" style="display: none;">
                        <option data-display="Choose locations">Escolha sua Localização</option>
                        <option value="1">Barretos</option>
                        <option value="2">Colina</option>
                        <option value="3">Bebedouro</option>
                    </select>
                <div class="nice-select app-select form-control" tabindex="0"><span class="current">Escolha sua Localização</span><ul class="list"><li data-value="Choose locations" data-display="Choose locations" class="option selected">Choose locations</li><li data-value="1" class="option">Dhaka</li><li data-value="2" class="option">Rangpur</li><li data-value="3" class="option">Bogra</li></ul></div>
                </div>

                <div class="col-lg-3 col-md-6 col-xs-6">
                    <select name="tipoPropriedade" id="tipoPropriedade" class="app-select form-control" required="" style="display: none;">
                        <option data-display="Property Type">Tipo de Propriedade</option>
                        <option value="1">Casa</option>
                        <option value="2">Sobrado</option>
                        <option value="3">Bangalô</option>
                        <option value="4">Edícula</option>
                        <option value="5">Loft</option>
                        <option value="6">Apartamento</option>
                        <option value="7">Kitnet</option>
                        <option value="8">Flat</option>

                    </select><div class="nice-select app-select form-control" tabindex="0"><span class="current">Tipo de Propriedade</span><ul class="list"><li data-value="Property Type" data-display="Property Type" class="option selected">Property Type</li><li data-value="1" class="option">Property type 1</li><li data-value="2" class="option">Property type 2</li><li data-value="3" class="option">Property type 3</li></ul></div>
                </div>
                <div class="col-lg-3 col-md-6 col-xs-6">
                    <select name="quartos" id="quartos" class="app-select form-control" required="" style="display: none;">
                        <option data-display="Bedrooms">Quartos</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                    </select><div class="nice-select app-select form-control" tabindex="0"><span class="current">Quartos</span><ul class="list"><li data-value="Bedrooms" data-display="Bedrooms" class="option selected">Bedrooms</li><li data-value="1" class="option">One</li><li data-value="2" class="option">Two</li><li data-value="3" class="option">Three</li></ul></div>
                </div>
                <div class="col-lg-3 col-md-6 col-xs-6">
                    <select name="banheiro" id="banheiro" class="app-select form-control" required="" style="display: none;">
                        <option data-display="Bedrooms">Banheiros</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                    </select><div class="nice-select app-select form-control" tabindex="0"><span class="current">Banheiros</span><ul class="list"><li data-value="Bedrooms" data-display="Bedrooms" class="option selected">Bedrooms</li><li data-value="1" class="option">One</li><li data-value="2" class="option">Two</li><li data-value="3" class="option">Three</li></ul></div>
                </div>
                									    
                <div class="mx-auto d-flex justify-content-end">
                    <button class="primary-btn mt-50" style="height: 45px;" onclick="ajaxPesquisaResidencia();">Pesquisar propriedades
                    <span class="lnr lnr-arrow-right"></span></button>
                </div>						  
                </div>
            </form>

        </div>
  
    
    <?php
    }
?>


