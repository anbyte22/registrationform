@extends('frontend.master')
@section('body')
    <div class="form-home">
        <div class="container">
            <div class="row">
                <form action="" class="formpage" method="#">
                    <div class="box-shadow">
                        <!-- 2 column grid layout with text inputs for the first and last names -->
                        <div class=" mb-4">
                            <div class="col-md-6">
                                <div class="form-outline">
                                    <label class="form-label" for="form6Example1">name</label>
                                    <input type="text" id="form6Example1" class="form-control" />

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-outline">
                                    <label class="form-label" for="form6Example2">Company name</label>
                                    <input type="text" id="form6Example2" class="form-control" />

                                </div>
                            </div>
                        </div>

                        <!-- Text input -->
                        <div class="form-outline col-md-12">
                            <label class="form-label" for="form6Example3">Job Title</label>
                            <input type="text" id="form6Example3" class="form-control" />

                        </div>

                        <!-- Text input -->

                        <div class="form-outline col-md-12">
                            <label class="form-label" for="form6Example4">Address</label>
                            <textarea id="form6Example4" class="form-control"></textarea>
                        </div>

                        <!-- Email input -->
                        <div class="form-outline col-md-4">
                            <label class="form-label" for="form6Example5">City</label>
                            <input type="text" id="form6Example5" class="form-control" />

                        </div>

                        <!-- Number input -->
                        <div class="form-outline col-md-4">
                            <label class="form-label" for="form6Example6">Pin </label>
                            <input type="text" id="form6Example6" class="form-control" />

                        </div>

                        <!-- Message input -->
                        <div class="form-outline col-md-4">
                            <label class="form-label" for="form6Example7">State</label>
                            <input type="text" id="form6Example6" class="form-control" />

                        </div>
                        <div class="form-outline col-md-4">
                            <label class="form-label" for="form6Example5">Country</label>
                            <input type="text" id="form6Example5" class="form-control" />

                        </div>

                        <!-- Number input -->
                        <div class="form-outline col-md-4">
                            <label class="form-label" for="form6Example6">Tel </label>
                            <input type="text" id="form6Example6" class="form-control" />

                        </div>

                        <!-- Message input -->
                        <div class="form-outline col-md-4">
                            <label class="form-label" for="form6Example7">Fax</label>
                            <input type="text" id="form6Example6" class="form-control" />

                        </div>
                        <div class="form-outline col-md-4">
                            <label class="form-label" for="form6Example5">Mobile</label>
                            <input type="number" id="form6Example5" class="form-control" />

                        </div>

                        <!-- Number input -->
                        <div class="form-outline col-md-4">
                            <label class="form-label" for="form6Example6">Email </label>
                            <input type="email" id="form6Example6" class="form-control" />

                        </div>

                        <!-- Message input -->
                        <div class="form-outline col-md-4">
                            <label class="form-label" for="form6Example7">Website</label>
                            <input type="text" id="form6Example6" class="form-control" />

                        </div>
                        <div class="clearfix"></div>
                        <div class="checkbox">
                            <div class="title-business">YOUR BUSINESS ACTIVITY</div>
                            <div class="col-md-6 inputtype">
                                <div class="checkout__input__checkbox">
                                    <label for="airline">
                                        Airline, Cruise, Rail & Travel Caterers
                                        <input type="checkbox" id="airline" name="business[]"
                                            value="Airline, Cruise, Rail & Travel Caterers">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="checkout__input__checkbox">
                                    <label for="architects">
                                        Architects
                                        <input type="checkbox" id="architects" name="business[]" value="Architects">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="checkout__input__checkbox">
                                    <label for="bakers">
                                        Bakers
                                        <input type="checkbox" id="bakers" name="business[]" value="Bakers">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="checkout__input__checkbox">
                                    <label for="baristas">
                                        Baristas & Cafe
                                        <input type="checkbox" id="baristas" name="business[]" value="Baristas & Cafe">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="checkout__input__checkbox">
                                    <label for="cashncarry">
                                        Cash-n-Carry
                                        <input type="checkbox" id="cashncarry" name="business[]" value="Cash-n-Carry">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="checkout__input__checkbox">
                                    <label for="ceo">
                                        CEO's
                                        <input type="checkbox" id="ceo" name="business[]" value="CEO's">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="checkout__input__checkbox">
                                    <label for="countryclubs">
                                        Country Clubs
                                        <input type="checkbox" id="countryclubs" name="business[]" value="Country Clubs">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="checkout__input__checkbox">
                                    <label for="cruisemanager">
                                        Cruise Managers
                                        <input type="checkbox" id="cruisemanager" name="business[]" value="Cruise Managers">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>


                                <div class="checkout__input__checkbox">
                                    <label for="Distributors">
                                        Distributors
                                        <input type="checkbox" id="Distributors" name="business[]" value="Distributors">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="checkout__input__checkbox">
                                    <label for="ecommercebuyers">
                                        E-Commerce Buyers
                                        <input type="checkbox" id="ecommercebuyers" name="business[]"
                                            value="E-Commerce Buyers">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="checkout__input__checkbox">
                                    <label for="executivechefs">
                                        Executive Chefs
                                        <input type="checkbox" id="executivechefs" name="business[]"
                                            value="Executive Chefs">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="checkout__input__checkbox">
                                    <label for="housekeepers">
                                        Executive Housekeepers
                                        <input type="checkbox" id="housekeepers" name="business[]"
                                            value="Executive Housekeepers">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="checkout__input__checkbox">
                                    <label for="professionals">
                                        F & B Professionals
                                        <input type="checkbox" id="professionals" name="business[]"
                                            value="F & B Professionals">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="checkout__input__checkbox">
                                    <label for="foodretailers">
                                        Food Retailers
                                        <input type="checkbox" id="foodretailers" name="business[]" value="Food Retailers">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="checkout__input__checkbox">
                                    <label for="generalmanager">
                                        General Manager
                                        <input type="checkbox" id="generalmanager" name="business[]"
                                            value="General Manager">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6 inputtype">
                                <div class="checkout__input__checkbox">
                                    <label for="govermentntrade">
                                        Government & Trade Associations
                                        <input type="checkbox" id="govermentntrade" name="business[]"
                                            value="Government & Trade Associations">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="checkout__input__checkbox">
                                    <label for="highnetworth">
                                        High Networth Consumers
                                        <input type="checkbox" id="highnetworth" name="business[]"
                                            value="High Networth Consumers">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="checkout__input__checkbox">
                                    <label for="hoteliers">
                                        Hoteliers
                                        <input type="checkbox" id="hoteliers" name="business[]" value="Hoteliers">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="checkout__input__checkbox">
                                    <label for="baristas">
                                        Ice Cream Parlour Owners
                                        <input type="checkbox" id="icecream" name="business[]"
                                            value="Ice Cream Parlour Owners">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="checkout__input__checkbox">
                                    <label for="impornddis">
                                        Importers & Distributors
                                        <input type="checkbox" id="impornddis" name="business[]"
                                            value="Importers & Distributors">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="checkout__input__checkbox">
                                    <label for="imfr">
                                        Independent & Multiple Format Retailers
                                        <input type="checkbox" id="imfr" name="business[]"
                                            value="Independent & Multiple Format Retailers">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="checkout__input__checkbox">
                                    <label for="kitchencon">
                                        Kitchen Consultants
                                        <input type="checkbox" id="kitchencon" name="business[]"
                                            value="Kitchen Consultants">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="checkout__input__checkbox">
                                    <label for="moderntrade">
                                        Modern Trade
                                        <input type="checkbox" id="moderntrade" name="business[]" value="Modern Trade">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>

                                <div class="checkout__input__checkbox">
                                    <label for="organised">
                                        Organized Retailers
                                        <input type="checkbox" id="organised" name="business[]" value="Organized Retailers">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="checkout__input__checkbox">
                                    <label for="professionalcon">
                                        Professional Consultants
                                        <input type="checkbox" id="professionalcon" name="business[]"
                                            value="Professional Consultants">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="checkout__input__checkbox">
                                    <label for="purchaseman">
                                        Purchase Managers
                                        <input type="checkbox" id="purchaseman" name="business[]" value="Purchase Managers">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="checkout__input__checkbox">
                                    <label for="housekeepers">
                                        Executive Housekeepers
                                        <input type="checkbox" id="housekeepers" name="business[]"
                                            value="Executive Housekeepers">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="checkout__input__checkbox">
                                    <label for="Restaurateurs">
                                        Restaurateurs
                                        <input type="checkbox" id="Restaurateurs" name="business[]" value="Restaurateurs">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="checkout__input__checkbox">
                                    <label for="systemint">
                                        System Integrators
                                        <input type="checkbox" id="systemint" name="business[]" value="System Integrators">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="checkout__input__checkbox">
                                    <label for="winendspirit">
                                        Wine & Spirit Brokers
                                        <input type="checkbox" id="winendspirit" name="business[]"
                                            value="Wine & Spirit Brokers">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <!-- Checkbox -->
                            <div class="checkbox">
                                <div class="title-business">AREA OF INTEREST</div>
                                <div class="col-md-6 inputtype">
                                    <div class="checkout__input__checkbox">
                                        <label for="foodsector">
                                            Food Sector Comprising Of
                                            <input type="checkbox" id="foodsector" name="interest[]"
                                                value="Food Sector Comprising Of">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="checkout__input__checkbox">
                                        <label for="alcoholicndnon">
                                            Alcoholic & Non Alcoholic Beverages
                                            <input type="checkbox" id="alcoholicndnon" name="interest[]"
                                                value="Alcoholic & Non Alcoholic Beverages">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="checkout__input__checkbox">
                                        <label for="cheesendf">
                                            Cheese & Fine Specialty Food
                                            <input type="checkbox" id="cheesendf" name="interest[]"
                                                value="Cheese & Fine Specialty Food">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="checkout__input__checkbox">
                                        <label for="cdbpi">
                                            Chocolate Desserts, Bakery Products & Ingredients
                                            <input type="checkbox" id="cdbpi" name="interest[]"
                                                value="Chocolate Desserts, Bakery Products & Ingredients">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="checkout__input__checkbox">
                                        <label for="coftea">
                                            Coffee, Tea & Syrups
                                            <input type="checkbox" id="coftea" name="interest[]"
                                                value="Coffee, Tea & Syrups">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="checkout__input__checkbox">
                                        <label for="fanp">
                                            Food Additives & Preservatives
                                            <input type="checkbox" id="fanp" name="interest[]"
                                                value="Food Additives & Preservatives">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="checkout__input__checkbox">
                                        <label for="fpdpc">
                                            Fresh Produce & Diary Products Confectionery
                                            <input type="checkbox" id="fpdpc" name="interest[]"
                                                value="Fresh Produce & Diary Products Confectionery">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="checkout__input__checkbox">
                                        <label for="fcpf">
                                            Frozen, Canned & Processed Food
                                            <input type="checkbox" id="fcpf" name="interest[]"
                                                value="Frozen, Canned & Processed Food">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>


                                    <div class="checkout__input__checkbox">
                                        <label for="ingpse">
                                            Ingredients & Packing Supplies etc
                                            <input type="checkbox" id="ingpse" name="interest[]"
                                                value="Ingredients & Packing Supplies etc">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="checkout__input__checkbox">
                                        <label for="jed">
                                            Jucies & Energy Drinks
                                            <input type="checkbox" id="jed" name="interest[]"
                                                value="Jucies & Energy Drinks">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="checkout__input__checkbox">
                                        <label for="mpndsf">
                                            Meat, Poultry & Sea Foods
                                            <input type="checkbox" id="mpndsf" name="interest[]"
                                                value="Meat, Poultry & Sea Foods">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="checkout__input__checkbox">
                                        <label for="orhp">
                                            Organic & Health Products
                                            <input type="checkbox" id="orhp" name="interest[]"
                                                value="Organic & Health Products">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="checkout__input__checkbox">
                                        <label for="sndcf">
                                            Snacks & Conveninence Food
                                            <input type="checkbox" id="sndcf" name="interest[]"
                                                value="Snacks & Conveninence Food">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="checkout__input__checkbox">
                                        <label for="fndbequip">
                                            F&B Equipment Sector (Preparation/Processing/Packaging)
                                            <input type="checkbox" id="fndbequip" name="interest[]"
                                                value="F&B Equipment Sector (Preparation/Processing/Packaging)">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="checkout__input__checkbox">
                                        <label for="bndcequip">
                                            Bakery & Confectionery Equipment
                                            <input type="checkbox" id="bndcequip" name="interest[]"
                                                value="Bakery & Confectionery Equipment">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="checkout__input__checkbox">
                                        <label for="gustam">
                                            Guest Amenities
                                            <input type="checkbox" id="gustam" name="interest[]" value="Guest Amenities">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="checkout__input__checkbox">
                                        <label for="hsitsol">
                                            Hospitality Support IT Solutions
                                            <input type="checkbox" id="hsitsol" name="interest[]"
                                                value="Hospitality Support IT Solutions">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="checkout__input__checkbox">
                                        <label for="hoskeppro">
                                            House Keeping Products & Supplies
                                            <input type="checkbox" id="hoskeppro" name="interest[]"
                                                value="House Keeping Products & Supplies">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="checkout__input__checkbox">
                                        <label for="intndent">
                                            In-Room Technology & Entertainment
                                            <input type="checkbox" id="intndent" name="interest[]"
                                                value="In-Room Technology & Entertainment">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6 inputtype">
                                    <div class="checkout__input__checkbox">
                                        <label for="barequipndsup">
                                            Bar Equipment & Supplies
                                            <input type="checkbox" id="barequipndsup" name="interest[]"
                                                value="Bar Equipment & Supplies">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="checkout__input__checkbox">
                                        <label for="fpendsup">
                                            Food Preparation Equipment & Supplies
                                            <input type="checkbox" id="fpendsup" name="interest[]"
                                                value="Food Preparation Equipment & Supplies">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="checkout__input__checkbox">
                                        <label for="fpndpeqip">
                                            Food Processing & Packaging Equipment
                                            <input type="checkbox" id="fpndpeqip" name="interest[]"
                                                value="Food Processing & Packaging Equipment">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="checkout__input__checkbox">
                                        <label for="ksequip">
                                            Kitchen Support Equipment Etc
                                            <input type="checkbox" id="ksequip" name="interest[]"
                                                value="Kitchen Support Equipment Etc">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="checkout__input__checkbox">
                                        <label for="refchilfree">
                                            Refrigeration / Chillers / Freezers
                                            <input type="checkbox" id="refchilfree" name="interest[]"
                                                value="Refrigeration / Chillers / Freezers">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="checkout__input__checkbox">
                                        <label for="stew">
                                            Stewarding
                                            <input type="checkbox" id="stew" name="interest[]" value="Stewarding">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="checkout__input__checkbox">
                                        <label for="stogunit">
                                            Storage Units
                                            <input type="checkbox" id="stogunit" name="interest[]" value="Storage Units">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="checkout__input__checkbox">
                                        <label for="tndgpro">
                                            Tableware & Glassware Products
                                            <input type="checkbox" id="tndgpro" name="interest[]"
                                                value="Tableware & Glassware Products">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="checkout__input__checkbox">
                                        <label for="hosdec">
                                            Hospitality & Decor Sector
                                            <input type="checkbox" id="hosdec" name="interest[]"
                                                value="Hospitality & Decor Sector">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="checkout__input__checkbox">
                                        <label for="bathfitfix">
                                            Bathroom Fittings & Fixtures
                                            <input type="checkbox" id="bathfitfix" name="interest[]"
                                                value="Bathroom Fittings & Fixtures">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="checkout__input__checkbox">
                                        <label for="cartndtro">
                                            Carts & Trolleys
                                            <input type="checkbox" id="cartndtro" name="interest[]"
                                                value="Carts & Trolleys">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="checkout__input__checkbox">
                                        <label for="cooling">
                                            Cooling Solutions
                                            <input type="checkbox" id="cooling" name="interest[]" value="Cooling Solutions">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="checkout__input__checkbox">
                                        <label for="corgif">
                                            Corporates Gifts & Decor Solutions
                                            <input type="checkbox" id="corgif" name="interest[]"
                                                value="Corporates Gifts & Decor Solutions">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="checkout__input__checkbox">
                                        <label for="fitndspa">
                                            Fitness & Spa Equipment
                                            <input type="checkbox" id="fitndspa" name="interest[]"
                                                value="Fitness & Spa Equipment">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="checkout__input__checkbox">
                                        <label for="furndint">
                                            Furniture & Interiors
                                            <input type="checkbox" id="furndint" name="interest[]"
                                                value="Furniture & Interiors">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="checkout__input__checkbox">
                                        <label for="laundcle">
                                            Laundary & Cleaning Equipment
                                            <input type="checkbox" id="laundcle" name="interest[]"
                                                value="Laundary & Cleaning Equipment">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="checkout__input__checkbox">
                                        <label for="lightsol">
                                            Lighting Solutions
                                            <input type="checkbox" id="lightsol" name="interest[]"
                                                value="Lighting Solutions">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="checkout__input__checkbox">
                                        <label for="lffnda">
                                            Linen, Fumishing, Fabrics & Apparels
                                            <input type="checkbox" id="lffnda" name="interest[]"
                                                value="Linen, Fumishing, Fabrics & Apparels">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="checkout__input__checkbox">
                                        <label for="secndss">
                                            Security & Safety Solutions
                                            <input type="checkbox" id="secndss" name="interest[]"
                                                value="Security & Safety Solutions">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>

                                </div>
                                <div class="clearfix"></div>
                                <!-- Checkbox -->
                                <div class="clearfix"></div>
                                <!--Checkbox-->
                                <div class="checkbox">
                                    <div class="title-business">ABOUT AAHAR 2021</div>
                                    <div class="col-md-6 inputtype">
                                        <div class="checkout__input__checkbox">
                                            <label for="assoemail">
                                                Association E-mailers
                                                <input type="checkbox" id="assoemail" name="aboutaahar[]"
                                                    value="Association E-mailers">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="checkout__input__checkbox">
                                            <label for="emailers">
                                                E-mailers
                                                <input type="checkbox" id="emailers" name="aboutaahar[]" value="E-mailers">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="checkout__input__checkbox">
                                            <label for="indcf">
                                                Industry Colleague / Friend
                                                <input type="checkbox" id="indcf" name="aboutaahar[]"
                                                    value="Industry Colleague / Friend">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="checkout__input__checkbox">
                                            <label for="hoarding">
                                                Hoarding
                                                <input type="checkbox" id="hoarding" name="aboutaahar[]" value="Hoarding">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="checkout__input__checkbox">
                                            <label for="invfrmexh">
                                                Invitation From Exhibitors
                                                <input type="checkbox" id="invfrmexh" name="aboutaahar[]"
                                                    value="Invitation From Exhibitors">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 inputtype">
                                        <div class="checkout__input__checkbox">
                                            <label for="invfrmorg">
                                                Invitation From Organizers
                                                <input type="checkbox" id="invfrmorg" name="aboutaahar[]"
                                                    value="Invitation From Organizers">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="checkout__input__checkbox">
                                            <label for="newspa">
                                                Newspaper
                                                <input type="checkbox" id="newspa" name="aboutaahar[]" value="Newspaper">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="checkout__input__checkbox">
                                            <label for="onlinepor">
                                                Online Portals
                                                <input type="checkbox" id="onlinepor" name="aboutaahar[]"
                                                    value="Online Portals">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="checkout__input__checkbox">
                                            <label for="socialmed">
                                                Social Media
                                                <input type="checkbox" id="socialmed" name="aboutaahar[]"
                                                    value="Social Media">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <!--#checkbox-->
                                    <div class="checkbox">
                                        <div class="title-business">YOUR ANNUAL TURNOVER</div>
                                        <div class="col-md-6 inputtype">
                                            <div class="checkout__input__checkbox">
                                                <label for="uptotwofv">
                                                    Up To 25 Lakhs
                                                    <input type="checkbox" id="uptotwofv" name="annualturnover[]"
                                                        value="Up To 25 Lakhs">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="checkout__input__checkbox">
                                                <label for="twofvtosvfv">
                                                    25 Lakhs - 75 Lakhs
                                                    <input type="checkbox" id="twofvtosvfv" name="annualturnover[]"
                                                        value="25 Lakhs - 75 Lakhs">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 inputtype">
                                            <div class="checkout__input__checkbox">
                                                <label for="svfivtoonfvcr">
                                                    75 Lakhs - 1.5 Crore
                                                    <input type="checkbox" id="svfivtoonfvcr" name="annualturnover[]"
                                                        value="75 Lakhs - 1.5 Crore">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="checkout__input__checkbox">
                                                <label for="ovonfvcr">
                                                    Over 1.5 Crore
                                                    <input type="checkbox" id="ovonfvcr" name="annualturnover[]"
                                                        value="Over 1.5 Crore">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="submit col-md-6">
                                            <button type="button" class="btn btn-primary btn-block ">Submit</button>
                                        </div>
                                        <div class="submit col-md-6">
                                            <button type="button" class="btn btn-primary btn-block">Clear</button>
                                        </div>
                                        <div class="clearfix"></div>


                                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
