<div class="popup-wrapper">
    <div class="bg-layer"></div>

    <div class="popup-content basket-popup" data-rel="1">
        <div class="layer-close"></div>
        <div class="popup-container size-2 right">
            {{-- Cart popup --}}
            <div class="popup-align">
                @for($i = 1 ; $i<=4 ; $i++)
                    <div class="basket-item">
                        <div class="basket-item-close"></div>
                        {{-- <a href="#" class="img-hover-2"><img src="{{asset('administrator/img/shop/item-1-sm-copy.jpg')}}" alt=""></a> --}}
                        <div class="description">
                            <article>
                                <a href="#"><h6 class="h10 hover-5">CHAIR WITH OPEN SPACE</h6></a>
                                <div class="empty-space h5-xs"></div>
                                <p>Lorem ipsum dolor sit amet, cons adipisicing elit</p>
                            </article>
                        </div>
                        <div class="quantity-wrapper">
                            <div class="quantity">
                                <input type="number" value="1">
                                <i class="fa fa-caret-left" aria-hidden="true"></i>
                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="price"><span>&#36;572<sup>00</sup></span></div>
                    </div>
                @endfor

                <div class="total-basket-price price">total price: <span>&#36;1139<sup>00</sup></span></div>
                <div class="btn-wrap"><a href="#" class="btn-2"><span>proceed to checkout</span></a></div>
            </div>
            <div class="button-close"></div>
        </div>
    </div>

    <div class="popup-content login-popup" data-rel="2">
        <div class="layer-close"></div>
        <div class="popup-container size-3">
            <div class="popup-align">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2 class="h2">Log in<span></span></h2>
                        <div class="empty-space h55-xs"></div>
                    </div>
                </div>
                <div class="row separator">
                    <div class="col-sm-6">
                        <form>
                            <div class="input-wrapper">
                                <div class="input-style">
                                    <input id="inputEmail2" name="email" type="text" class="input" required>
                                    <label for="inputEmail2">E-mail</label>
                                </div>
                                <div class="input-style">
                                    <input id="inputPass" name="psw" type="password" class="input" required>
                                    <label for="inputPass">Password</label>
                                </div>
                            </div>
                            <p><a href="#" class="hover-2">Forgot your password&#63;</a></p>
                            <div class="empty-space h20-xs"></div>
                            <div class="btn-wrap"><a href="#" class="btn-2"><span>submit</span></a></div>
                        </form>
                    </div>
                    <div class="col-sm-6">
                        <article>
                            <h4 class="h4">LOG IN VIA SOCIAL NETWORKS</h4>
                            <div class="empty-space h20-xs"></div>
                            <p>Ut enim ad minim veniam, quis nostrud laboris nisi ut aliquip commodo quat duis aute irure dolor</p>
                        </article>
                        <div class="empty-space h30-xs fl"></div>
                        <a href="#" class="btn-2 twitter"><span>twitter</span></a>
                        <a href="#" class="btn-2 facebook"><span>facebook</span></a>
                    </div>
                </div>
                <div class="row">
                   <div class="col-md-12 text-center">
                        <div class="empty-space h30-xs"></div>
                       <a href="#" class="btn-sing-up open-popup" data-rel="3">Sign up now</a>
                   </div> 
                </div>
            </div>
            <div class="button-close"></div>
        </div>
    </div>

    <div class="popup-content login-popup" data-rel="3">
        <div class="layer-close"></div>
        <div class="popup-container size-3">
            <div class="popup-align">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2 class="h2">Sign up<span></span></h2>
                        <div class="empty-space h55-xs"></div>
                    </div>
                </div>
                <div class="row separator">
                    <div class="col-sm-6">
                        <form>
                            <div class="input-wrapper">
                                <div class="input-style">
                                    <input id="inputName2" name="name" type="text" class="input" required>
                                    <label for="inputName2">Name</label>
                                </div>
                                <div class="input-style">
                                    <input id="inputEmail3" name="email" type="text" class="input" required>
                                    <label for="inputEmail3">E-mail</label>
                                </div>
                                <div class="input-style">
                                    <input id="inputPass2" name="psw" type="password" class="input" required>
                                    <label for="inputPass2">Password</label>
                                </div>
                                <div class="input-style">
                                    <input id="inputRePass" name="psw" type="password" class="input" required>
                                    <label for="inputRePass">Repeat password</label>
                                </div>
                            </div>
                            <div class="btn-wrap"><a href="#" class="btn-2"><span>submit</span></a></div>
                        </form>
                    </div>
                    <div class="col-sm-6">
                        <article>
                            <h4 class="h4">REGISTER VIA SOCIAL NETWORKS</h4>
                            <div class="empty-space h20-xs"></div>
                            <p>Ut enim ad minim veniam, quis nostrud laboris nisi ut aliquip commodo quat duis aute irure dolor</p>
                        </article>
                        <div class="empty-space h30-xs fl"></div>
                        <a href="#" class="btn-2 twitter"><span>twitter</span></a>
                        <a href="#" class="btn-2 facebook"><span>facebook</span></a>
                    </div>
                </div>
            </div>
            <div class="button-close"></div>
        </div>
    </div>

    <div class="popup-content quick-view-popup" data-rel="4">
        <div class="layer-close"></div>
        <div class="popup-container size-3">
            <div class="popup-align">
                <div class="row separator">
                    <div class="col-sm-5">
                        <!-- swiper -->
                        <div class="swiper-popup">
                            <div class="swiper-button-prev swiper-button" data-pagination-rel="1"></div>
                            <div class="swiper-button-next swiper-button" data-pagination-rel="1"></div>
                            <div class="swiper-container" data-speed="1000" data-pagination-rel="1" data-breakpoints="1" data-slides-per-view="1" data-xs-slides="1" data-sm-slides="1" data-md-slides="1">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img src="{{asset('administrator/img/shop/swiper-popup-1.png')}}" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="{{asset('administrator/img/shop/swiper-popup-2.png')}}" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="{{asset('administrator/img/shop/swiper-popup-3.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="swiper-pagination swiper-pagination-black"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-7">
                        <h4 class="h4">chair with open space</h4>
                        <div class="empty-space h25-xs"></div>
                        <h6 class="h6">Price:<span class="price">&#36;567<sup>00</sup></span></h6>
                        <div class="empty-space h25-xs"></div>
                        <h6 class="h6">Available:<span class="h4 yellow">YES</span></h6>
                        <div class="empty-space h25-xs"></div>
                        <p>Ut enim ad minim veniam, quis nostrud laboris nisi ut aliquip com qu duis aute irure dolor in reprehenderit  cillum dolore eu fugiat nulla pariatur excepteur sint occa ecat cupidatat culpa qui officia  deserunt mollit anim id est  laborum. Sed ut per spiciatis unde omnis iste natus error</p>
                        <div class="empty-space h20-xs"></div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="quantity-wrapper">
                                    <div class="quantity">
                                        <input type="number" value="1">
                                        <i class="fa fa-caret-left" aria-hidden="true"></i>
                                        <i class="fa fa-caret-right" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 text-right">
                                <div class="btn-wrap"><a href="#" class="btn-2"><span>add to cart</span></a></div>
                            </div>
                        </div>
                        <div class="empty-space h30-xs"></div>
                        <div class="follow-wrapper">
                            <h6 class="h6">Share:</h6>
                            <div class="follow">
                                <a class="item" href="https://www.instagram.com/" target="_blank"><i class="fa fa-instagram"></i></a>
                                <a class="item" href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a>
                                <a class="item" href="https://www.pinterest.com/" target="_blank"><i class="fa fa-pinterest-p"></i></a>
                                <a class="item" href="https://twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a>
                                <a class="item" href="https://plus.google.com/" target="_blank"><i class="fa fa-google-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="button-close"></div>
        </div>
    </div>

    

</div>