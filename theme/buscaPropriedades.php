<?php
    function buscaPropriedades(){
    ?>
        <div class="search-field">
            <form class="search-form" action="#">
                <div class="row">
                <div class="col-lg-12 d-flex align-items-center justify-content-center toggle-wrap">
                    <div class="row">
                        <div class="col">
                            <h4 class="search-title">Search Properties For</h4>
                        </div>
                        <div class="col">
                            <div class="onoffswitch3 d-block mx-auto">
                                <input type="checkbox" name="onoffswitch3" class="onoffswitch3-checkbox" id="myonoffswitch3" checked="">
                                <label class="onoffswitch3-label" for="myonoffswitch3">
                                    <span class="onoffswitch3-inner">
                                        <span class="onoffswitch3-active">
                                            <span class="onoffswitch3-switch">Sell</span>
                                            <span class="lnr lnr-arrow-right"></span>
                                        </span>
                                        <span class="onoffswitch3-inactive">
                                            <span class="lnr lnr-arrow-left"></span>
                                            <span class="onoffswitch3-switch">Rent</span>
                                        </span>
                                    </span>
                                </label>
                            </div>													
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-xs-6">
                    <select name="location" class="app-select form-control" required="" style="display: none;">
                        <option data-display="Choose locations">Choose locations</option>
                        <option value="1">Dhaka</option>
                        <option value="2">Rangpur</option>
                        <option value="3">Bogra</option>
                    </select><div class="nice-select app-select form-control" tabindex="0"><span class="current">Choose locations</span><ul class="list"><li data-value="Choose locations" data-display="Choose locations" class="option selected">Choose locations</li><li data-value="1" class="option">Dhaka</li><li data-value="2" class="option">Rangpur</li><li data-value="3" class="option">Bogra</li></ul></div>
                </div>
                <div class="col-lg-3 col-md-6 col-xs-6">
                    <select name="property-type" class="app-select form-control" required="" style="display: none;">
                        <option data-display="Property Type">Property Type</option>
                        <option value="1">Property type 1</option>
                        <option value="2">Property type 2</option>
                        <option value="3">Property type 3</option>
                    </select><div class="nice-select app-select form-control" tabindex="0"><span class="current">Property Type</span><ul class="list"><li data-value="Property Type" data-display="Property Type" class="option selected">Property Type</li><li data-value="1" class="option">Property type 1</li><li data-value="2" class="option">Property type 2</li><li data-value="3" class="option">Property type 3</li></ul></div>
                </div>
                <div class="col-lg-3 col-md-6 col-xs-6">
                    <select name="bedroom" class="app-select form-control" required="" style="display: none;">
                        <option data-display="Bedrooms">Bedrooms</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select><div class="nice-select app-select form-control" tabindex="0"><span class="current">Bedrooms</span><ul class="list"><li data-value="Bedrooms" data-display="Bedrooms" class="option selected">Bedrooms</li><li data-value="1" class="option">One</li><li data-value="2" class="option">Two</li><li data-value="3" class="option">Three</li></ul></div>
                </div>
                <div class="col-lg-3 col-md-6 col-xs-6">
                    <select name="bedroom" class="app-select form-control" required="" style="display: none;">
                        <option data-display="Bedrooms">Bedrooms</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select><div class="nice-select app-select form-control" tabindex="0"><span class="current">Bedrooms</span><ul class="list"><li data-value="Bedrooms" data-display="Bedrooms" class="option selected">Bedrooms</li><li data-value="1" class="option">One</li><li data-value="2" class="option">Two</li><li data-value="3" class="option">Three</li></ul></div>
                </div>
                <div class="col-lg-4 range-wrap">
                    <p>Price Range:</p>
                    <span class="irs js-irs-0  irs-with-grid"><span class="irs">
                        <span class="irs-line" tabindex="0">
                        <span class="irs-line-left"></span>
                    <span class="irs-line-mid"></span>
                    <span class="irs-line-right"></span></span>
                    <span class="irs-min" style="display: none; visibility: visible;">0</span>
                    <span class="irs-max" style="display: none; visibility: visible;">1</span>
                    <span class="irs-from" style="visibility: visible; left: 15.4489%;">$1 000</span>
                    <span class="irs-to" style="visibility: visible; left: 71.8576%;">$4 000</span>
                    <span class="irs-single" style="visibility: hidden; left: 37.1517%;">$1 000 — $4 000</span></span>
                    <span class="irs-grid" style="width: 95.0464%; left: 2.37678%;">
                    <span class="irs-grid-pol" style="left: 0%"></span>
                    <span class="irs-grid-text js-grid-text-0" style="left: 0%; margin-left: -1.70279%;">0</span>
                    <span class="irs-grid-pol small" style="left: 20%"></span>
                    <span class="irs-grid-pol small" style="left: 15%"></span>
                    <span class="irs-grid-pol small" style="left: 10%"></span>
                    <span class="irs-grid-pol small" style="left: 5%"></span>
                    <span class="irs-grid-pol" style="left: 25%"></span>
                    <span class="irs-grid-text js-grid-text-1" style="left: 25%; visibility: visible; margin-left: -4.17957%;">1 250</span>
                    <span class="irs-grid-pol small" style="left: 45%"></span>
                    <span class="irs-grid-pol small" style="left: 40%"></span>
                    <span class="irs-grid-pol small" style="left: 35%"></span>
                    <span class="irs-grid-pol small" style="left: 30%"></span>
                    <span class="irs-grid-pol" style="left: 50%"></span>
                    <span class="irs-grid-text js-grid-text-2" style="left: 50%; visibility: visible; margin-left: -4.64396%;">2 500</span>
                    <span class="irs-grid-pol small" style="left: 70%"></span>
                    <span class="irs-grid-pol small" style="left: 65%"></span>
                    <span class="irs-grid-pol small" style="left: 60%"></span>
                    <span class="irs-grid-pol small" style="left: 55%"></span>
                    <span class="irs-grid-pol" style="left: 75%"></span>
                    <span class="irs-grid-text js-grid-text-3" style="left: 75%; visibility: visible; margin-left: -4.48916%;">3 750</span>
                    <span class="irs-grid-pol small" style="left: 95%"></span>
                    <span class="irs-grid-pol small" style="left: 90%"></span>
                    <span class="irs-grid-pol small" style="left: 85%"></span>
                    <span class="irs-grid-pol small" style="left: 80%"></span>
                    <span class="irs-grid-pol" style="left: 100%"></span>
                    <span class="irs-grid-text js-grid-text-4" style="left: 100%; margin-left: -4.64396%;">5 000</span></span>
                    <span class="irs-bar" style="left: 21.4861%; width: 57.0279%;"></span>
                    <span class="irs-shadow shadow-from" style="display: none;"></span>
                    <span class="irs-shadow shadow-to" style="display: none;"></span>
                    <span class="irs-slider from" style="left: 19.0093%;"></span>
                    <span class="irs-slider to type_last" style="left: 76.0372%;"></span></span><input type="text" id="range" value="" name="range" class="irs-hidden-input" tabindex="-1" readonly="">
                </div>	
                <div class="col-lg-4 range-wrap">
                    <p>Area Range(sqm):</p>
                    
                    <span class="irs js-irs-1  irs-with-grid"><span class="irs">
                        <span class="irs-line" tabindex="0"><span class="irs-line-left"></span>
                        <span class="irs-line-mid"></span><span class="irs-line-right"></span></span>
                        <span class="irs-min" style="display: none; visibility: visible;">0</span>
                        <span class="irs-max" style="display: none; visibility: visible;">1</span>
                        <span class="irs-from" style="visibility: visible; left: 16.3777%;">1 000</span>
                        <span class="irs-to" style="visibility: visible; left: 72.7864%;">4 000</span>
                        <span class="irs-single" style="visibility: hidden; left: 38.8545%;">1 000 — 4 000</span>
                    </span>
                    <span class="irs-grid" style="width: 95.0464%; left: 2.37678%;">
                    <span class="irs-grid-pol" style="left: 0%"></span>
                    <span class="irs-grid-text js-grid-text-0" style="left: 0%; margin-left: -1.70279%;">0</span>
                    <span class="irs-grid-pol small" style="left: 20%"></span>
                    <span class="irs-grid-pol small" style="left: 15%"></span>
                    <span class="irs-grid-pol small" style="left: 10%"></span>
                    <span class="irs-grid-pol small" style="left: 5%"></span>
                    <span class="irs-grid-pol" style="left: 25%"></span>
                    <span class="irs-grid-text js-grid-text-1" style="left: 25%; visibility: visible; margin-left: -4.17957%;">1 250</span>
                    <span class="irs-grid-pol small" style="left: 45%"></span>
                    <span class="irs-grid-pol small" style="left: 40%"></span>
                    <span class="irs-grid-pol small" style="left: 35%"></span>
                    <span class="irs-grid-pol small" style="left: 30%"></span>
                    <span class="irs-grid-pol" style="left: 50%"></span>
                    <span class="irs-grid-text js-grid-text-2" style="left: 50%; visibility: visible; margin-left: -4.64396%;">2 500</span>
                    <span class="irs-grid-pol small" style="left: 70%"></span>
                    <span class="irs-grid-pol small" style="left: 65%"></span>
                    <span class="irs-grid-pol small" style="left: 60%"></span>
                    <span class="irs-grid-pol small" style="left: 55%"></span>
                    <span class="irs-grid-pol" style="left: 75%"></span>
                    <span class="irs-grid-text js-grid-text-3" style="left: 75%; visibility: visible; margin-left: -4.48916%;">3 750</span>
                    <span class="irs-grid-pol small" style="left: 95%"></span>
                    <span class="irs-grid-pol small" style="left: 90%"></span>
                    <span class="irs-grid-pol small" style="left: 85%"></span>
                    <span class="irs-grid-pol small" style="left: 80%"></span>
                    <span class="irs-grid-pol" style="left: 100%"></span>
                    <span class="irs-grid-text js-grid-text-4" style="left: 100%; margin-left: -4.64396%;">5 000</span></span>
                    <span class="irs-bar" style="left: 21.4861%; width: 57.0279%;"></span>
                    <span class="irs-shadow shadow-from" style="display: none;"></span>
                    <span class="irs-shadow shadow-to" style="display: none;"></span>
                    <span class="irs-slider from" style="left: 19.0093%;"></span>
                    <span class="irs-slider to type_last" style="left: 76.0372%;"></span></span><input type="text" id="range2" value="" name="range" class="irs-hidden-input" tabindex="-1" readonly="">
                </div>										    
                <div class="col-lg-4 d-flex justify-content-end">
                    <button class="primary-btn mt-50" style="height: 45px;">Search Properties
                    <span class="lnr lnr-arrow-right"></span></button>
                </div>						  
                </div>
            </form>
        </div>
    <?php
    }
?>