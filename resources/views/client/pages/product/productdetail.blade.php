@extends('client.master')
@section('title','Product detail')
@section('content')

<!-- content -->
<div id="content">

    <div class="shop">
        <!-- products -->
        <div class="container">
            <div class="empty-space h90-xs h100-md"></div>
            <div class="empty-space h0-xs h80-md"></div>
            <div class="row">
                <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-12 col-xs-offset-0">
                    <article class="text-center grey-dark">
                        <h1 class="h2">Products<span></span></h1>
                        <div class="empty-space h30-xs"></div>
                        <p>Curabitur ultricies semper eleifend. Pellentesque molestie purus non something else not
                            tempus bibendum mattis making something</p>
                    </article>
                </div>
            </div>

            <div class="empty-space h30-xs h60-md"></div>

            <div class="row">
                <div class="col-md-9 col-sm-9 pull-right">
                    <div class="detail-item">
                        <div class="row">
                            <div class="col-md-7">
                                @foreach ($categories as $category)
                                @foreach ($category->products as $product)
                                @if ($product->id == $id)
                                <div id="{{$id}}">
                                    <img class="img-main" src="{{asset('images/'.$product->image)}}" alt="">
                                </div>
                                @endif
                                @if ($product->category_id == $category->id)

                                @endif
                                @endforeach
                                @endforeach
                                <div class="clear"></div>
                            </div>
                            <div class="col-md-5">
                                <article class="description">
                                    <h3 class="h3">geometric chandelier</h3>
                                    <ul>
                                        <li>
                                            <span>price:</span>
                                            <span class="price">&#36;567<sup>00</sup></span>
                                        </li>
                                        <li>
                                            <span>Reviews:</span>
                                            <span class="info">26</span>
                                            <span class="star"><i class="fa fa-star" aria-hidden="true"></i><i
                                                    class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star"
                                                    aria-hidden="true"></i><i class="fa fa-star"
                                                    aria-hidden="true"></i><i class="fa fa-star-o"
                                                    aria-hidden="true"></i></span>
                                        </li>
                                        <li>
                                            <span>Available:</span>
                                            <span class="info">yes</span>
                                        </li>
                                        <li>
                                            <span>color:</span>
                                            <span class="color">
                                                <span class="active"
                                                    style="background-color: #28252c; outline-color: #28252c;"></span>
                                                <span style="background-color: #d2cbc6; outline-color: #d2cbc6;"></span>
                                                <span style="background-color: #4e77ab; outline-color: #4e77ab;"></span>
                                                <span style="background-color: #c48d8d; outline-color: #c48d8d;"></span>
                                            </span>
                                        </li>
                                    </ul>
                                    <p>Ut enim ad minim veniam, quis nostrud laboris nisi ut aliquip com qu duis aute
                                        irure dolor in reprehenderit cillum dolore eu fugiat nulla pariatur excepteur
                                        sint occa ecat cupidatat culpa qui officia</p>
                                </article>
                                <div class="quantity-wrapper">
                                    <span>quantity:</span>
                                    <div class="quantity">
                                        <input type="number" value="1">
                                        <i class="fa fa-caret-left" aria-hidden="true"></i>
                                        <i class="fa fa-caret-right" aria-hidden="true"></i>
                                    </div>
                                </div>
                                <div class="btn-wrap"><a href="#" class="btn-2"><span>add to cart</span></a></div>
                                <div class="btn-wrap"><a href="#" class="btn-1 border"><span>add to
                                            favourites</span></a></div>
                                <div class="follow-category">
                                    <span>Category:</span>
                                    <div class="category">
                                        Physical
                                    </div>
                                </div>
                                <div class="follow-tag">
                                    <span>Tag:</span>
                                    <div class="tag">
                                        <span>Relax</span>
                                        <span>Revolution</span>
                                    </div>
                                </div>
                                <div class="follow-wrapper">
                                    <span>share:</span>
                                    <div class="follow">
                                        <a class="item" href="https://www.instagram.com/" target="_blank"><i
                                                class="fa fa-instagram"></i></a>
                                        <a class="item" href="https://www.facebook.com/" target="_blank"><i
                                                class="fa fa-facebook"></i></a>
                                        <a class="item" href="https://www.pinterest.com/" target="_blank"><i
                                                class="fa fa-pinterest-p"></i></a>
                                        <a class="item" href="https://twitter.com/" target="_blank"><i
                                                class="fa fa-twitter"></i></a>
                                        <a class="item" href="https://plus.google.com/" target="_blank"><i
                                                class="fa fa-google-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="empty-space h60-xs"></div>
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="tabs-block">
                                <div class="tab-menu active">description</div>
                                <div class="tab-menu">Testimonials</div>
                                <div class="tab-entry" style="display: block;">
                                    <div class="article">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                                        </p>
                                        <ul class="disc">
                                            <li>aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
                                                eu fugiat sit voluptatem accusantium doloremque lauda ntium, totam rem
                                                aperiam, eaque ipsa</li>
                                            <li>non proident, sunt in culpa qui officia deserunt mollit</li>
                                            <li>anim id est laborum ut perspiciatis unde omnis iste natus error</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="tab-entry">
                                    <div class="testimonial">
                                        <img src="{{asset('administrator/img/shop/testimonial-1.jpg')}}" alt="">
                                        <div class="article">
                                            <div class="author">
                                                <span class="h6">GIGI HADID</span>
                                                <span>12&#47;09&#47;2016</span>
                                                <span class="star"><i class="fa fa-star" aria-hidden="true"></i><i
                                                        class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star"
                                                        aria-hidden="true"></i><i class="fa fa-star"
                                                        aria-hidden="true"></i><i class="fa fa-star-o"
                                                        aria-hidden="true"></i></span>
                                            </div>
                                            <p>Ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                                aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
                                                in voluptate velit esse</p>
                                        </div>
                                    </div>
                                    <div class="testimonial">
                                        <img src="{{asset('administrator/img/shop/testimonial-2.jpg')}}" alt="">
                                        <div class="article">
                                            <div class="author">
                                                <span class="h6">JACK KUDROW</span>
                                                <span>12&#47;09&#47;2016</span>
                                                <span class="star"><i class="fa fa-star" aria-hidden="true"></i><i
                                                        class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star"
                                                        aria-hidden="true"></i><i class="fa fa-star"
                                                        aria-hidden="true"></i><i class="fa fa-star-o"
                                                        aria-hidden="true"></i></span>
                                            </div>
                                            <p>Ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                                aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
                                                in voluptate velit esse</p>
                                        </div>
                                    </div>
                                    <div class="testimonial-form-wrapper">
                                        <div class="empty-space h20-xs"></div>
                                        <h4 class="h4 text-center">Add your review</h4>
                                        <div class="empty-space h30-xs"></div>
                                        <form>
                                            <div class="input-wrapper">
                                                <div class="input-style">
                                                    <input id="inputName" name="name" type="text" class="input"
                                                        required>
                                                    <label for="inputName">Name</label>
                                                </div>
                                                <div class="input-style">
                                                    <input id="inputEmail" name="email" type="text" class="input"
                                                        required>
                                                    <label for="inputEmail">E-mail</label>
                                                </div>
                                                <div class="input-style textarea">
                                                    <textarea id="inputMessage" name="message" class="input"
                                                        required></textarea>
                                                    <label for="inputMessage">Review</label>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="clear"></div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="y-rating">
                                                <span>YOUR RATING:</span>
                                                <span class="star"><i class="fa fa-star" aria-hidden="true"></i><i
                                                        class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star"
                                                        aria-hidden="true"></i><i class="fa fa-star"
                                                        aria-hidden="true"></i><i class="fa fa-star-o"
                                                        aria-hidden="true"></i></span>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 text-right">
                                            <div class="btn-wrap"><a href="#" class="btn-2"><span>Add your
                                                        review</span></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="empty-space h50-xs h100-md"></div>
                    <div class="empty-space h0-xs h10-md"></div>
                    <div class="row text-center">
                        <div class="col-xs-12">
                            <h2 class="h2">You may also like<span></span></h2>
                            <div class="empty-space h30-xs"></div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <a href="#" class="img-hover-2"><img
                                    src="{{asset('administrator/img/shop/item-10-md.jpg')}}" alt="" class="img"></a>
                            <article>
                                <div class="empty-space h10-xs"></div>
                                <a href="#">
                                    <h6 class="h8 hover-4">MINIMALISTIC LAMP</h6>
                                </a>
                                <div class="empty-space h5-xs"></div>
                                <span class="price price-sm">&#36;286<sup>00</sup></span>
                                <div class="empty-space h30-xs h0-sm"></div>
                            </article>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <a href="#" class="img-hover-2"><img src="{{asset('administrator/img/shop/item-9-md.jpg')}}"
                                    alt="" class="img"></a>

                            <article>
                                <div class="empty-space h10-xs"></div>
                                <a href="#">
                                    <h6 class="h8 hover-4">MINIMALISTIC LAMP</h6>
                                </a>
                                <div class="empty-space h5-xs"></div>
                                <span class="price price-sm">&#36;286<sup>00</sup></span>
                                <div class="empty-space h30-xs h0-sm"></div>
                            </article>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <a href="#" class="img-hover-2"><img src="{{asset('administrator/img/shop/item-4-md.jpg')}}"
                                    alt="" class="img"></a>
                            <article>
                                <div class="empty-space h10-xs"></div>
                                <a href="#">
                                    <h6 class="h8 hover-4">MINIMALISTIC LAMP</h6>
                                </a>
                                <div class="empty-space h5-xs"></div>
                                <span class="price price-sm">&#36;286<sup>00</sup></span>
                                <div class="empty-space h30-xs h0-sm"></div>
                            </article>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <a href="#" class="img-hover-2"><img src="{{asset('administrator/img/shop/item-5-md.jpg')}}"
                                    alt="" class="img"></a>
                            <article>
                                <div class="empty-space h10-xs"></div>
                                <a href="#">
                                    <h6 class="h8 hover-4">MINIMALISTIC LAMP</h6>
                                </a>
                                <div class="empty-space h5-xs"></div>
                                <span class="price price-sm">&#36;286<sup>00</sup></span>
                                <div class="empty-space h30-xs h0-sm"></div>
                            </article>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3">
                    <div class="shop-form-2">

                        <div class="search">
                            <div class="input-wrapper search">
                                <div class="input-style">
                                    <input id="inputSearch" name="name" type="text" class="input" required>
                                    <label for="inputSearch">Search</label>
                                    <div class="input-icon">
                                        <i class="fa fa-search" aria-hidden="true"></i>
                                        <input type="submit" id="searchsubmit" value="">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="empty-space h35-xs"></div>

                        <h6 class="h6">FOR WHO</h6>
                        <div class="empty-space h10-xs"></div>
                        <label class="checkbox-entry">
                            <input type="checkbox" /><span>For women</span>
                        </label>
                        <label class="checkbox-entry">
                            <input type="checkbox" /><span>For men</span>
                        </label>
                        <label class="checkbox-entry">
                            <input type="checkbox" /><span>For kids</span>
                        </label>

                        <div class="empty-space h30-xs h45-md"></div>

                        <h6 class="h6">CATEGORY</h6>
                        <div class="empty-space h10-xs"></div>
                        <label class="checkbox-entry">
                            <input type="checkbox" /><span>All</span>
                        </label>
                        <label class="checkbox-entry">
                            <input type="checkbox" /><span>Curabitur fermentum</span>
                        </label>
                        <label class="checkbox-entry">
                            <input type="checkbox" /><span>Kitchen furniture</span>
                        </label>
                        <label class="checkbox-entry">
                            <input type="checkbox" /><span>Room for guest</span>
                        </label>
                        <label class="checkbox-entry">
                            <input type="checkbox" /><span>Main room</span>
                        </label>
                        <label class="checkbox-entry">
                            <input type="checkbox" /><span>Bedrooms</span>
                        </label>

                        <div class="empty-space h30-xs h45-md"></div>

                        <h6 class="h6">PRICE</h6>
                        <div class="empty-space h30-xs"></div>
                        <div id="slider-range"
                            class="ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content">
                            <div class="ui-slider-range ui-corner-all ui-widget-header"
                                style="left: 0%; width: 59.1837%;"></div>
                            <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"
                                style="left: 0%;"></span>
                            <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"
                                style="left: 59.1837%;"></span>
                        </div>
                        <div class="empty-space h20-xs"></div>
                        <p>
                            <label for="amount">price:</label>
                            <input type="text" id="amount" readonly>
                        </p>

                        <div class="empty-space h20-xs h35-md"></div>

                        <h6 class="h6">BRANDS</h6>
                        <div class="empty-space h10-xs"></div>
                        <label class="checkbox-entry">
                            <input type="checkbox" /><span>Black&White</span>
                        </label>
                        <label class="checkbox-entry">
                            <input type="checkbox" /><span>Zebrano</span>
                        </label>
                        <label class="checkbox-entry">
                            <input type="checkbox" /><span>Delux</span>
                        </label>
                        <label class="checkbox-entry">
                            <input type="checkbox" /><span>Restoration Hardware</span>
                        </label>
                        <label class="checkbox-entry">
                            <input type="checkbox" /><span>Roche Bobois</span>
                        </label>
                        <label class="checkbox-entry">
                            <input type="checkbox" /><span>Edra</span>
                        </label>
                        <label class="checkbox-entry">
                            <input type="checkbox" /><span>Poliform</span>
                        </label>

                        <div class="empty-space h50-xs"></div>
                        <div class="btn-wrap"><a href="#" class="btn-2"><span>clear all filters</span></a></div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="empty-space h65-xs h100-md"></div>
    <div class="empty-space h0-xs h30-md"></div>


</div>
<!-- content -->

@endsection