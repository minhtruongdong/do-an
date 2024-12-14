@extends('client.master')
@section('content')

    <!-- content -->
    <div id="content">

        <div class="shop">
            <div class="container">
                <div class="row">
                    <div class="empty-space h90-xs h100-md"></div>
                    <div class="empty-space h0-xs h80-md"></div>
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-12 col-xs-offset-0">
                            <article class="text-center grey-dark">
                                <h1 class="h2">Checkout<span></span></h1>
                                <div class="empty-space h30-xs"></div>
                                <p>Curabitur ultricies semper eleifend. Pellentesque molestie purus non something else not tempus bibendum mattis making something</p>
                            </article>
                        </div>
                    </div>
                </div>
                <div class="empty-space h25-xs h55-md"></div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="tabs-block">
                            <div class="tab-menu active">01 Delivery</div>
                            <div class="tab-menu">02 Payment</div>
                            <div class="empty-space 15-xs h35-md"></div>
                            <div class="tab-entry" style="display: block;">
                                <form>
                                    <h4 class="h4">Shipping info</h4>
                                    <div class="empty-space h25-xs h30-md"></div>
                                    <div class="input-wrapper">
                                        <div class="input-style half">
                                            <input id="inputFirstName" name="name" type="text" class="input" required>
                                            <label for="inputFirstName">First Name</label>
                                        </div>
                                        <div class="input-style half half-right">
                                            <input id="inputLastName" name="name" type="text" class="input" required>
                                            <label for="inputLastName">Last Name</label>
                                        </div>
                                        <div class="input-style half">
                                            <input id="inputEmail" name="email" type="text" class="input" required>
                                            <label for="inputEmail">E-mail</label>
                                        </div>
                                        <div class="input-style half half-right">
                                            <input id="inputPhoneNumber" name="phonenumber" type="text" class="input" required>
                                            <label for="inputPhoneNumber">Phone Number</label>
                                        </div>
                                        <div class="input-style third">
                                            <input id="inputZipCode" name="zipcode" type="text" class="input" required>
                                            <label for="inputZipCode">ZIP Code</label>
                                        </div>
                                        <select name="country" class="select-box third third-right">
                                            <option disabled selected>Country</option>
                                            <option value="country1">Country1</option>
                                            <option value="country2">Country2</option>
                                            <option value="country3">Country3</option>
                                            <option value="country4">Country4</option>
                                        </select>
                                        <select name="city" class="select-box">
                                            <option disabled selected>City</option>
                                            <option value="city1">City1</option>
                                            <option value="city2">City2</option>
                                            <option value="city3">City3</option>
                                            <option value="city4">City4</option>
                                        </select>
                                        <div class="input-style">
                                            <input id="inputAddress" name="address" type="text" class="input" required>
                                            <label for="inputAddress">Address</label>
                                        </div>
                                    </div>
                                    <div class="empty-space h15-xs h30-md"></div>
                                    <h4 class="h4">Shipping Method</h4>
                                    <div class="empty-space h15-xs h15-md"></div>
                                    <div class="radio-item">
                                        <label class="radio">
                                            <input type="radio" name="1" checked/><span class="text">Standart<span>( Free )</span></span>
                                        </label>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tem por incididunt ut labore et dolore magna aliqua.</p>
                                    </div>
                                    <div class="radio-item right">
                                        <label class="radio">
                                            <input type="radio" name="1"/><span class="text">Product Dolor<span>( 20&#36; )</span></span>
                                        </label>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tem por incididunt ut labore et dolore magna aliqua.</p>
                                    </div>
                                    <div class="empty-space h5-xs h35-md fl"></div>
                                    <div class="text-center btn-inline">
                                        <div class="btn-wrap"><a href="#" class="btn-1 border"><span>back to cart</span></a></div>
                                        <div class="btn-wrap"><a href="#" class="btn-2"><span>pay <span class="price">&#36;690<sup>00</sup></span></span></a></div>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-entry">
                                <form>
                                    <h4 class="h4">Payment Method</h4>
                                    <div class="empty-space h15-xs h15-md"></div>
                                    <div class="radio-item">
                                        <label class="radio">
                                            <input type="radio" name="2" checked/><span class="text">credit card</span>
                                        </label>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tem por incididunt ut labore et dolore magna aliqua.</p>
                                    </div>
                                    <div class="radio-item right">
                                        <label class="radio">
                                            <input type="radio" name="2"/><span class="text">PayPal</span>
                                        </label>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tem por incididunt ut labore et dolore magna aliqua.</p>
                                    </div>
                                    <div class="radio-item">
                                        <label class="radio">
                                            <input type="radio" name="2"/><span class="text">Amazon payment</span>
                                        </label>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tem por incididunt ut labore et dolore magna aliqua.</p>
                                    </div>
                                    <div class="radio-item right">
                                        <label class="radio">
                                            <input type="radio" name="2"/><span class="text">Cash on delivery<span>( &#43;10&#37; from total )</span></span>
                                        </label>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tem por incididunt ut labore et dolore magna aliqua.</p>
                                    </div>
                                    <div class="empty-space h15-xs h45-md fl"></div>
                                    <h4 class="h4">Shipping info</h4>
                                    <div class="empty-space h25-xs h30-md"></div>
                                    <div class="input-wrapper">
                                        <div class="input-style half">
                                            <input id="inputFirstName2" name="name" type="text" class="input" required>
                                            <label for="inputFirstName2">Cardholder Name</label>
                                        </div>
                                        <div class="input-style half half-right">
                                            <input id="inputLastName2" name="name" type="text" class="input" required>
                                            <label for="inputLastName2">Card Number</label>
                                        </div>

                                        <div class="select-date">
                                            <span>Expiradion date</span>
                                            <select name="month" class="select-box">
                                                <option disabled selected>Month</option>
                                                <option value="month1">Month1</option>
                                                <option value="month2">Month2</option>
                                                <option value="month3">Month3</option>
                                                <option value="month4">Month4</option>
                                            </select>
                                            <select name="year" class="select-box">
                                                <option disabled selected>Year</option>
                                                <option value="year1">Year1</option>
                                                <option value="year2">Year2</option>
                                                <option value="year3">Year3</option>
                                                <option value="year4">Year4</option>
                                            </select>
                                        </div>
                                        <div class="input-style third third-right">
                                            <input id="inputCvv" name="cvv" type="password" class="input" required>
                                            <label for="inputCvv">CVV</label>
                                        </div>
                                        <div class="input-style">
                                            <input id="inputAddress2" name="address" type="text" class="input" required>
                                            <label for="inputAddress2">Address</label>
                                        </div>
                                    </div>
                                    <div class="empty-space h15-xs h30-md"></div>
                                    <div class="text-center btn-inline">
                                        <div class="btn-wrap"><a href="#" class="btn-1 border"><span>back to delivery</span></a></div>
                                        <div class="btn-wrap"><a href="#" class="btn-2"><span>pay <span class="price">&#36;690<sup>00</sup></span></span></a></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>    <!-- shop -->

        <div class="empty-space h65-xs h100-md"></div>
        <div class="empty-space h0-xs h30-md"></div>

        <!-- footer -->
         <footer>
            <div class="container small-sm">
                <div class="row">
                    <div class="col-md-3">
                        <a href="index.html"><img src="img/logo.png" alt=""></a>
                        <div class="empty-space h10-xs"></div>
                        <p>Lorem ipsum dolor sit amet, cset tur adipiscingerat rutrum to the next side</p>
                    </div>
                    <div class="empty-space h20-xs h0-md"></div>
                    <div class="col-md-2">
                        <h6 class="h9">Address</h6>
                        <div class="empty-space h10-xs"></div>
                        <ul>
                            <li>
                                <a href="https://www.google.com.ua/maps/@40.7573849,-73.9721243,19z">319 Clematis St.Suite, 100 WPB, FL 33401</a>
                            </li>
                        </ul>
                    </div>
                    <div class="empty-space h20-xs h0-md"></div>
                    <div class="col-md-2 col-md-offset-1">
                        <h6 class="h9">Contact us</h6>
                        <div class="empty-space h10-xs"></div>
                        <ul>
                            <li>
                                <a href="tel:+380982367536">tel. +38 098 236 75 36</a>
                            </li>
                            <li>
                                <a href="mailto:info@bloom.com">e-mail info@mevo.com</a>
                            </li>
                        </ul>
                    </div>
                    <div class="empty-space h20-xs h0-md"></div>
                    <div class="col-md-3 col-md-offset-1">
                        <h6 class="h9">Follow us</h6>
                        <div class="empty-space h15-xs h25-md"></div>
                        <div class="follow">
                            <a class="item" href="https://www.instagram.com/" target="_blank"><i class="fa fa-instagram"></i></a>
                            <a class="item" href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a class="item" href="https://www.pinterest.com/" target="_blank"><i class="fa fa-pinterest-p"></i></a>
                            <a class="item" href="https://twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a>
                            <a class="item" href="https://plus.google.com/" target="_blank"><i class="fa fa-google-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="empty-space h25-xs"></div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="copyright">
                            &copy; 2017 All rights reserved. Development with <span class="fa fa-heart"></span> by <a href="https://themeforest.net/user/unionagency" target="blank">UnionAgency.</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer -->

    </div>
    <!-- content -->

@endsection