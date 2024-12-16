@extends('client.master')
@section('content')  
  
  <div id="content">


        <!-- banner -->
        <!-- swiper -->
        <div class="swiper-style-banner">
            <div class="bg"></div>
            <div class="swiper-container" data-speed="1000" data-parallax="1" data-pagination-rel="0" data-breakpoints="1" data-slides-per-view="1" data-xs-slides="1" data-sm-slides="1" data-md-slides="1">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="banner">
                            <div class="banner-inner">
                                <div class="banner-item" style="background-image: url({{asset('administrator/img/banner-img-1.jpg')}});">
                                    <div class="banner-item-small-wrapper">
                                        <div class="banner-item-small">
                                            <span data-swiper-parallax="-100"><i>branding &#47; photoshooting</i></span>
                                            <span data-swiper-parallax="-200"><i>for:</i> <a href="#">Fashion Life company</a></span>
                                            <div class="banner-item-small-img" style="background-image: url({{asset('administrator/img/banner-img-1-1.jpg')}});"></div>
                                        </div>                                    
                                    </div>
                                    <article class="text-center">
                                        <h1 class="h1"  data-swiper-parallax="-200">Art &#8211; real passion</h1>
                                        <p data-swiper-parallax="-400"><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras elementum id metus ac tempus. Praesent ut mauris eget velit volutpat posuere</span></p>
                                        <div class="btn-wrap" data-swiper-parallax="-600"><a href="#" class="btn-1"><span>view more</span></a></div>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="banner">
                            <div class="banner-inner">
                                <div class="banner-item" style="background-image: url({{asset('administrator/img/banner-img-2.jpg')}});">
                                    <div class="banner-item-small-wrapper">
                                        <div class="banner-item-small">
                                            <span data-swiper-parallax="-100"><i>branding &#47; photoshooting</i></span>
                                            <span data-swiper-parallax="-200"><i>for:</i> <a href="#">Fashion Life company</a></span>
                                            <div class="banner-item-small-img" style="background-image: url({{asset('administrator/img/banner-img-2-1.jpg')}});"></div>
                                        </div>                                    
                                    </div>
                                    <article class="text-center">
                                        <h2 class="h1" data-swiper-parallax="-200">Art &#8211; real passion</h2>
                                        <p data-swiper-parallax="-400"><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras elementum id metus ac tempus. Praesent ut mauris eget velit volutpat posuere</span></p>
                                        <div class="btn-wrap" data-swiper-parallax="-600"><a href="#" class="btn-1"><span>view more</span></a></div>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="banner">
                            <div class="banner-inner">
                                <div class="banner-item" style="background-image: url({{asset('administrator/img/banner-img-3.jpg')}});">
                                    <div class="banner-item-small-wrapper">
                                        <div class="banner-item-small">
                                            <span data-swiper-parallax="-100"><i>branding &#47; photoshooting</i></span>
                                            <span data-swiper-parallax="-200"><i>for:</i> <a href="#">Fashion Life company</a></span>
                                            <div class="banner-item-small-img" style="background-image: url({{asset('administrator/img/banner-img-3-1.jpg')}});"></div>
                                        </div>                                    
                                    </div>
                                    <article class="text-center">
                                        <h2 class="h1" data-swiper-parallax="-200">Art &#8211; real passion</h2>
                                        <p data-swiper-parallax="-400"><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras elementum id metus ac tempus. Praesent ut mauris eget velit volutpat posuere</span></p>
                                        <div class="btn-wrap" data-swiper-parallax="-600"><a href="#" class="btn-1"><span>view more</span></a></div>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="banner">
                            <div class="banner-inner">
                                <div class="banner-item" style="background-image: url({{asset('administrator/img/banner-img-4.jpg')}});">
                                    <div class="banner-item-small-wrapper">
                                        <div class="banner-item-small">
                                            <span data-swiper-parallax="-100"><i>branding &#47; photoshooting</i></span>
                                            <span data-swiper-parallax="-200"><i>for:</i> <a href="#">Fashion Life company</a></span>
                                            <div class="banner-item-small-img" style="background-image: url({{asset('administrator/img/banner-img-4-1.jpg')}});"></div>
                                        </div>                                    
                                    </div>
                                    <article class="text-center">
                                        <h2 class="h1" data-swiper-parallax="-200">Art &#8211; real passion</h2>
                                        <p data-swiper-parallax="-400"><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras elementum id metus ac tempus. Praesent ut mauris eget velit volutpat posuere</span></p>
                                        <div class="btn-wrap" data-swiper-parallax="-600"><a href="#" class="btn-1"><span>view more</span></a></div>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination swiper-pagination-black"></div>
            </div>
        </div>

        <div class="empty-space h35-xs h100-md"></div>
        <div class="empty-space h30-xs"></div>

        <!-- services -->
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-center">
                    <h2 class="h2">our services<span></span></h2>
                </div>
                <div class="col-sm-10 col-sm-offset-1 col-md-6 col-md-offset-3">
                    <div class="text-center grey-dark">
                        <div class="empty-space h25-xs"></div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras elementum id metus ac tempus. Praesent ut mauris eget velit volutpat posuere</p>
                    </div>
                </div>
            </div>
            <div class="empty-space h35-xs h50-md"></div>
            <div class="services small text-center">
                <div class="row">
                    @foreach($categories->take(4) as $index => $category)
                    <div class="col-sm-6 col-md-3">
                        <div class="icon-wrapper">
                           <a href="#" class="icon">
                                <img src="{{asset('administrator/img/service-img-'. ($index+=1) .'.png')}}" alt="">
                            </a> 
                        </div>
                        <div class="article-wrapper">
                            <article>
                                <a href="{{route('client.product.category',['id'=> $category->id])}}"><h6 class="h8 hover-3">{{$category -> name }}</h6></a>
                                <p>Quisque with placerat Porttitor nisi felis Congue in & Tempus</p>
                            </article>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
            <div class="empty-space h35-xs h100-md"></div>
            <div class="empty-space h10-xs"></div>
            <div class="row">
                <div class="col-md-7">
                    <div class="book-cover text-center">
                        <div class="row flex-sm nopadding">
                            <div class="col-md-6 flex-item-2">
                                <a href="#"><img src="{{asset('administrator/img/img-1.png')}}" alt=""></a>
                            </div>
                            <div class="empty-space h10-xs h0-sm"></div>
                            <div class="col-md-6 flex-item-1">
                                <article class="bg-text">
                                    <a href="#"><h4 class="h4 hover-4">book cover</h4></a>
                                    <p>Quisque placerat porttitor nisi felis congue tempus</p>
                                    <div class="btn-wrap"><a href="#" class="btn-1"><span>view more</span></a></div>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="empty-space h40-xs h0-md"></div>
                <div class="col-md-5 text-center">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <img src="{{asset('administrator/img/img-2.png')}}" alt="">
                            <div class="empty-space h5-xs"></div>
                            <article>
                                <a href="#"><h6 class="h8 hover-4">Corporative identity</h6></a>
                                <div class="empty-space h5-xs"></div>
                                <p>Quisque placerat porttitor nisi felis congue tempus something here</p>
                                <div class="empty-space h20-xs"></div>
                                <a href="#" class="price">&#36;15<sup>55</sup></a>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
            <div class="empty-space h35-xs h100-md"></div>
            <div class="empty-space h20-xs"></div>
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <article class="text-center grey-dark">
                        <h3 class="h3">Lorem ipsum dolor semper amet, consectetur elit. Integer semper elit nec justo auctor</h3>
                        <div class="empty-space h20-xs h30-sm"></div>
                        <p>Phasellus mattis magna vel augue gravida eleifend. Donec sit amet diam mollis, sodales lorem, blandit orci. Proin nec mauris lectus. Mauris sit amet ex et nibh dapibus gravida. Sed luctus something ipsum purus vitae dictum mattis magna eleifend</p>
                    </article>
                </div>
            </div>

        </div>
         <!-- services -->
        
        <div class="empty-space h30-xs h100-md"></div>
        <div class="empty-space h30-xs"></div>

        <!-- about -->
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-center">
                     <h2 class="h2">About studio<span></span></h2>
                </div>
                <div class="col-sm-10 col-sm-offset-1 col-md-6 col-md-offset-3">
                    <div class="text-center grey-dark">
                       
                        <div class="empty-space h25-xs"></div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras elementum id metus ac tempus. Praesent ut mauris eget velit volutpat posuere</p>
                    </div>
                </div>
            </div>
            <div class="empty-space h15-xs h30-md"></div>
            <div class="row">
                <div class="col-md-12">
                    <!-- swiper -->
                    <div class="swiper-style-1">
                        <div class="swiper-button-prev swiper-button square-style" data-pagination-rel="1"></div>
                        <div class="swiper-button-next swiper-button square-style" data-pagination-rel="1"></div>
                        <div class="swiper-container" data-speed="1000" data-pagination-rel="1" data-breakpoints="1" data-slides-per-view="1" data-xs-slides="1" data-sm-slides="1" data-md-slides="1">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="row nopadding">
                                        <div class="col-md-6 col-md-push-5">
                                            <div class="img-wrapper">
                                                <img src="{{asset('administrator/img/swiper-img-1.jpg')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="col-sm-10 col-sm-offset-1 col-md-4 col-md-offset-1 col-md-pull-6">
                                            <article class="bg-text">
                                                <h6 class="h6">Why choose us</h6>
                                                <div class="empty-space h20-xs"></div>
                                                <p>Phasellus mattis magna vel augue gravida eleifend. Donec sit amet diam mollis, sodales lorem vel, blandit orci. Proin nec mauris lectus vitae dictum urna bibendum hasellus elementum ex turpis something hendreritdiam</p>
                                                <div class="empty-space h35-xs"></div>
                                                <div class="btn-wrap"><a href="#" class="btn-2"><span>view more</span></a></div>
                                            </article>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="row nopadding">
                                        <div class="col-md-6 col-md-push-5">
                                            <div class="img-wrapper">
                                                <img src="{{asset('administrator/img/swiper-img-1-2.jpg')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="col-sm-10 col-sm-offset-1 col-md-4 col-md-offset-1 col-md-pull-6">
                                            <article>
                                                <h6 class="h6">Why choose us</h6>
                                                <div class="empty-space h20-xs"></div>
                                                <p>Phasellus mattis magna vel augue gravida eleifend. Donec sit amet diam mollis, sodales lorem vel, blandit orci. Proin nec mauris lectus vitae dictum urna bibendum hasellus elementum ex turpis something hendreritdiam</p>
                                                <div class="empty-space h35-xs"></div>
                                                <div class="btn-wrap"><a href="#" class="btn-2"><span>view more</span></a></div>
                                            </article>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="row nopadding">
                                        <div class="col-md-6 col-md-push-5">
                                            <div class="img-wrapper">
                                                <img src="{{asset('administrator/img/swiper-img-1-3.jpg')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="col-sm-10 col-sm-offset-1 col-md-4 col-md-offset-1 col-md-pull-6">
                                            <article>
                                                <h6 class="h6">Why choose us</h6>
                                                <div class="empty-space h20-xs"></div>
                                                <p>Phasellus mattis magna vel augue gravida eleifend. Donec sit amet diam mollis, sodales lorem vel, blandit orci. Proin nec mauris lectus vitae dictum urna bibendum hasellus elementum ex turpis something hendreritdiam</p>
                                                <div class="empty-space h35-xs"></div>
                                                <div class="btn-wrap"><a href="#" class="btn-2"><span>view more</span></a></div>
                                            </article>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-pagination swiper-pagination-black"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- about -->

        <div class="empty-space h20-xs h100-md"></div>
        <div class="empty-space h30-xs"></div>

        <!-- our works -->
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-center">
                    <h2 class="h2">View our works<span></span></h2>
                </div>
                <div class="col-sm-10 col-sm-offset-1 col-md-6 col-md-offset-3">
                    <div class="text-center grey-dark">
                        <div class="empty-space h25-xs"></div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras elementum id metus ac tempus. Praesent ut mauris eget velit volutpat posuere</p>
                    </div>
                </div>
            </div>
            <div class="empty-space h45-xs h10-md"></div>
            <div class="row work-wrapper">
                <div class="col-md-6">
                    <div class="work-item">
                        <span><i>for:</i> <a href="#">Fashion Life company</a></span>
                        <span class="h5"><a class="hover-2" href="detail.html">Keep the best moment</a></span>
                        <span><i>branding &#47; photoshooting</i></span>
                        <div class="bg"></div>
                        <a href="{{asset('administrator/img/img-1.jpg')}}" class="work-img-wrapper lightbox">
                            <div class="work-img" style="background-image: url({{asset('administrator/img/img-1.jpg')}});"></div>
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="work-item style-2">
                        <span><i>for:</i> <a href="#">Fashion Life company</a></span>
                        <span class="h5"><a class="hover-2" href="detail.html">Stories of mermaids</a></span>
                        <span><i>branding &#47; photoshooting</i></span>
                        <div class="bg"></div>
                        <a href="{{asset('administrator/img/img-2.jpg')}}" class="work-img-wrapper lightbox">
                            <div class="work-img" style="background-image: url({{asset('administrator/img/img-2.jpg')}});"></div>
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="work-item">
                        <span><i>for:</i> <a href="#">Fashion Life company</a></span>
                        <span class="h5"><a class="hover-2" href="detail.html">By love tonel to you</a></span>
                        <span><i>branding &#47; photoshooting</i></span>
                        <div class="bg"></div>
                        <a href="{{asset('administrator/img/img-3.jpg')}}" class="work-img-wrapper lightbox">
                            <div class="work-img" style="background-image: url({{asset('administrator/img/img-3.jpg')}});"></div>
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="work-item style-2">
                        <span><i>for:</i> <a href="#">Fashion Life company</a></span>
                        <span class="h5"><a class="hover-2" href="detail.html">Eye by animals</a></span>
                        <span><i>branding &#47; photoshooting</i></span>
                        <div class="bg"></div>
                        <a href="{{asset('administrator/img/img-4.jpg')}}" class="work-img-wrapper lightbox">
                            <div class="work-img" style="background-image: url({{asset('administrator/img/img-4.jpg')}});"></div>
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="work-item">
                        <span><i>for:</i> <a href="#">Fashion Life company</a></span>
                        <span class="h5"><a class="hover-2" href="detail.html">Close your mind</a></span>
                        <span><i>branding &#47; photoshooting</i></span>
                        <div class="bg"></div>
                        <a href="{{asset('administrator/img/img-5.jpg')}}" class="work-img-wrapper lightbox">
                            <div href="#" class="work-img" style="background-image: url({{asset('administrator/img/img-5.jpg')}});"></div>
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="work-item style-2">
                        <span><i>for:</i> <a href="#">Fashion Life company</a></span>
                        <span class="h5"><a class="hover-2" href="detail.html">I waiting for you now</a></span>
                        <span><i>branding &#47; photoshooting</i></span>
                        <div class="bg"></div>
                        <a href="{{asset('administrator/img/img-6.jpg')}}" class="work-img-wrapper lightbox">
                            <div class="work-img" style="background-image: url({{asset('administrator/img/img-6.jpg')}});"></div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- our works -->

        <div class="empty-space h30-xs h40-md"></div>
        <div class="empty-space h30-xs"></div>

        <!-- interesting -->
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-center">
                    <h2 class="h2">Interesting to know<span></span></h2>
                </div>
                <div class="col-sm-10 col-sm-offset-1 col-md-6 col-md-offset-3">
                    <div class="text-center grey-dark">
                        <div class="empty-space h25-xs"></div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras elementum id metus ac tempus. Praesent ut mauris eget velit volutpat posuere</p>
                    </div>
                </div>
            </div>
            <div class="empty-space h40-xs h60-md"></div>
            <div class="interesting">
                <div class="row flex-md nopadding-md">
                    <div class="col-sm-4 col-sm-offset-1 col-md-3 col-md-offset-0 col-lg-2 col-lg-offset-2">
                        <article>
                            <h6 class="h6">Main goals</h6>
                            <div class="empty-space h20-xs"></div>
                            <ul>
                                <li>Happy from work</li>
                                <li>Interesting design</li>
                                <li>Creative &#38; Passion</li>
                            </ul>
                            <div class="empty-space h40-xs h0-md"></div>
                        </article>
                    </div>
                    <div class="col-sm-4 col-sm-offset-2 col-md-3 col-md-offset-0 col-lg-2 col-lg-offset-0">
                        <article>
                            <h6 class="h6">priorites</h6>
                            <div class="empty-space h20-xs"></div>
                            <ul>
                                <li>Adverts</li>
                                <li>Packaging design</li>
                                <li>Stands &#38; Rollups</li>
                            </ul>
                            <div class="empty-space h40-xs h0-md"></div>
                        </article>
                    </div>
                    <div class="col-sm-4 col-sm-offset-1 col-md-3 col-md-offset-0 col-lg-2 col-lg-offset-0">
                        <article>
                            <h6 class="h6">our skills</h6>
                            <div class="empty-space h20-xs"></div>
                            <ul>
                                <li>Responsive design</li>
                                <li>Landingpages</li>
                                <li>Product websites</li>
                            </ul>
                            <div class="empty-space h40-xs h0-sm"></div>
                        </article>
                    </div>
                    <div class="col-sm-4 col-sm-offset-2 col-md-3 col-md-offset-0 col-lg-2 col-lg-offset-0 text-center">
                        <img src="{{asset('administrator/img/img-7.jpg')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!-- interesting -->

        <div class="empty-space h30-xs h100-md"></div>
        <div class="empty-space h30-xs"></div>

        <!-- artists -->
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-center">
                    <h2 class="h2">Talented artists<span></span></h2>
                </div>
                <div class="col-sm-10 col-sm-offset-1 col-md-6 col-md-offset-3">
                    <div class="text-center grey-dark">
                        <div class="empty-space h25-xs"></div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras elementum id metus ac tempus. Praesent ut mauris eget velit volutpat posuere</p>
                    </div>
                </div>
            </div>
            <div class="empty-space h15-xs h40-md"></div>
            <!-- swiper -->
            <div class="swiper-style-2">
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1">
                        <div class="swiper-button-prev swiper-button square-style" data-pagination-rel="2"></div>
                        <div class="swiper-button-next swiper-button square-style" data-pagination-rel="2"></div>
                        <div class="swiper-container" data-speed="1000" data-space="30" data-pagination-rel="2" data-breakpoints="1" data-slides-per-view="3" data-xs-slides="1" data-sm-slides="2" data-md-slides="3">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="img-wrapper">
                                        <img src="{{asset('administrator/img/swiper-img-2.jpg')}}" alt="">
                                    </div>
                                    <div class="empty-space h25-xs"></div>
                                    <article class="bg-text">
                                        <a href="#"><h6 class="h6 hover-4">Olivia Jonson</h6></a>
                                        <div class="empty-space h5-xs"></div>
                                        <span>art-director</span>
                                        <div class="empty-space h10-xs"></div>
                                        <p>Proin scelerisque nunc quis mollis ante ipsum primis in faucibus propousing  orci</p>
                                    </article>
                                </div>
                                <div class="swiper-slide">
                                    <div class="img-wrapper">
                                        <img src="{{asset('administrator/img/swiper-img-3.jpg')}}" alt="">
                                    </div>
                                    <div class="empty-space h25-xs"></div>
                                    <article class="bg-text">
                                        <a href="#"><h6 class="h6 hover-4">Jorg Macleo</h6></a>
                                        <div class="empty-space h5-xs"></div>
                                        <span>artist</span>
                                        <div class="empty-space h10-xs"></div>
                                        <p>Vivamus scelerisque ex in tellus fermentum, quis ultricies justo something auctor</p>
                                    </article>
                                </div>
                                <div class="swiper-slide">
                                    <div class="img-wrapper">
                                        <img src="{{asset('administrator/img/swiper-img-4.jpg')}}" alt="">
                                    </div>
                                    <div class="empty-space h25-xs"></div>
                                    <article class="bg-text">
                                        <a href="#"><h6 class="h6 hover-4">Sophy Jecson</h6></a>
                                        <div class="empty-space h5-xs"></div>
                                        <span>artist</span>
                                        <div class="empty-space h10-xs"></div>
                                        <p>In consequat nisl quis ante auctor, eget elementum lorem maximus making non</p>
                                    </article>
                                </div>
                                <div class="swiper-slide">
                                    <div class="img-wrapper">
                                        <img src="{{asset('administrator/img/swiper-img-2.jpg')}}" alt="">
                                    </div>
                                    <div class="empty-space h25-xs"></div>
                                    <article class="bg-text">
                                        <a href="#"><h6 class="h6 hover-4">Olivia Jonson</h6></a>
                                        <div class="empty-space h5-xs"></div>
                                        <span>art-director</span>
                                        <div class="empty-space h10-xs"></div>
                                        <p>Proin scelerisque nunc quis mollis ante ipsum primis in faucibus propousing  orci</p>
                                    </article>
                                </div>
                            </div>
                            <div class="swiper-pagination swiper-pagination-black"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- artists -->

        <div class="empty-space h35-xs h100-md"></div>
        <div class="empty-space h30-xs"></div>

        <!-- customers -->
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-center">
                    <h2 class="h2">Our customers &#38; clients<span></span></h2>
                </div>
                <div class="col-sm-10 col-sm-offset-1 col-md-6 col-md-offset-3">
                    <div class="text-center grey-dark">
                        <div class="empty-space h25-xs"></div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras elementum id metus ac tempus. Praesent ut mauris eget velit volutpat posuere</p>
                    </div>
                </div>
            </div>
            <div class="empty-space h45-xs h60-md"></div>
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1">
                    <!-- swiper -->
                    <div class="swiper-style-3">
                        <div class="swiper-button-prev swiper-button square-style" data-pagination-rel="3"></div>
                        <div class="swiper-button-next swiper-button square-style" data-pagination-rel="3"></div>
                        <div class="swiper-container" data-speed="1000" data-space="140" data-pagination-rel="3" data-breakpoints="1" data-slides-per-view="2" data-xs-slides="1" data-sm-slides="2" data-md-slides="2">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="{{asset('administrator/img/author-img-1.png')}}" alt="">
                                    <div class="empty-space h30-xs"></div>
                                    <img src="{{asset('administrator/img/quote.png')}}" alt="">
                                    <div class="empty-space h25-xs"></div>
                                    <article>
                                        <h6 class="h7">Duis iaculis at nulla make id aliquam aecenas elementum lectus here pulvinar vedit</h6>
                                        <div class="empty-space h20-xs"></div>
                                        <p>Lastin Menson, designer</p>
                                    </article>
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{asset('administrator/img/author-img-2.png')}}" alt="">
                                    <div class="empty-space h30-xs"></div>
                                    <img src="{{asset('administrator/img/quote.png')}}" alt="">
                                    <div class="empty-space h25-xs"></div>
                                    <article>
                                        <h6 class="h7">Duis iaculis at nulla make id aliquam aecenas elementum lectus here pulvinar vedit</h6>
                                        <div class="empty-space h20-xs"></div>
                                        <p>Olivia Menson, designer</p>
                                    </article>
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{asset('administrator/img/author-img-1.png')}}" alt="">
                                    <div class="empty-space h30-xs"></div>
                                    <img src="{{asset('administrator/img/quote.png')}}" alt="">
                                    <div class="empty-space h25-xs"></div>
                                    <article>
                                        <h6 class="h7">Duis iaculis at nulla make id aliquam aecenas elementum lectus here pulvinar vedit</h6>
                                        <div class="empty-space h20-xs"></div>
                                        <p>Lastin Menson, designer</p>
                                    </article>
                                </div>
                            </div>
                            <div class="swiper-pagination swiper-pagination-black"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="empty-space h40-xs h40-md"></div>
            <div class="customers-icons">
                <div class="row">
                    <div class="col-md-2 col-sm-2 col-xs-4">
                        <a href="#" class="img-hover-2"><img src="{{asset('administrator/img/client-icon.png')}}" alt=""></a>
                    </div>
                    <div class="col-md-2 col-sm-2 col-xs-4">
                        <a href="#" class="img-hover-2"><img src="{{asset('administrator/img/client-icon-2.png')}}" alt=""></a>
                    </div>
                    <div class="col-md-2 col-sm-2 col-xs-4">
                        <a href="#" class="img-hover-2"><img src="{{asset('administrator/img/client-icon-3.png')}}" alt=""></a>
                    </div>
                    <div class="col-md-2 col-sm-2 col-xs-4">
                        <a href="#" class="img-hover-2"><img src="{{asset('administrator/img/client-icon-4.png')}}" alt=""></a>
                    </div>
                    <div class="col-md-2 col-sm-2 col-xs-4">
                        <a href="#" class="img-hover-2"><img src="{{asset('administrator/img/client-icon-5.png')}}" alt=""></a>
                    </div>
                    <div class="col-md-2 col-sm-2 col-xs-4">
                        <a href="#" class="img-hover-2"><img src="{{asset('administrator/img/client-icon-6.png')}}" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- customers -->

        <div class="empty-space h30-xs h100-md"></div>
        <div class="empty-space h30-xs"></div>

        <!-- work process -->
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-center">
                    <h2 class="h2">Work process<span></span></h2>
                </div>
                <div class="col-sm-10 col-sm-offset-1 col-md-6 col-md-offset-3">
                    <div class="text-center grey-dark">
                        <div class="empty-space h25-xs"></div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras elementum id metus ac tempus. Praesent ut mauris eget velit volutpat posuere</p>
                    </div>
                </div>
            </div>
            <div class="empty-space h15-xs"></div>
            <div class="row">
                <div class="col-md-12">
                    <!-- swiper -->
                    <div class="swiper-style-1 reverse">
                        <div class="swiper-container" data-speed="1000" data-breakpoints="1" data-slides-per-view="1" data-xs-slides="1" data-sm-slides="1" data-md-slides="1">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="row nopadding">
                                        <div class="col-sm-10 col-sm-offset-0 col-md-6 col-md-offset-1">
                                            <div class="img-wrapper">
                                                <img src="{{asset('administrator/img/swiper-img-5.jpg')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="col-sm-10 col-sm-offset-1 col-md-4 col-md-offset-0">
                                            <article class="small-sm bg-text">
                                                <h6 class="h6">How we do this</h6>
                                                <div class="empty-space h5-xs"></div>
                                                <i>about technic</i>
                                                <div class="empty-space h15-xs"></div>
                                                <p>Phasellus mattis magna vel augue gravida eleifend. Donec sit amet diam mollis, sodales lorem vel, blandit orci. Proin nec mauris lectus Pellentesque habitant morbi tristique senectus et netus et malesuada fames making better</p>
                                                <div class="empty-space h35-xs"></div>
                                                <div class="btn-wrap"><a href="#" class="btn-2"><span>lern more</span></a></div>
                                            </article>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="row nopadding">
                                        <div class="col-sm-10 col-sm-offset-0 col-md-6 col-md-offset-1">
                                            <div class="img-wrapper">
                                                <img src="{{asset('administrator/img/swiper-img-5-2.jpg')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="col-sm-10 col-sm-offset-1 col-md-4 col-md-offset-0">
                                            <article class="small-sm">
                                                <h6 class="h6">How we do this</h6>
                                                <div class="empty-space h5-xs"></div>
                                                <i>about technic</i>
                                                <div class="empty-space h15-xs"></div>
                                                <p>Phasellus mattis magna vel augue gravida eleifend. Donec sit amet diam mollis, sodales lorem vel, blandit orci. Proin nec mauris lectus Pellentesque habitant morbi tristique senectus et netus et malesuada fames making better</p>
                                                <div class="empty-space h35-xs"></div>
                                                <div class="btn-wrap"><a href="#" class="btn-2"><span>lern more</span></a></div>
                                            </article>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="row nopadding">
                                        <div class="col-sm-10 col-sm-offset-0 col-md-6 col-md-offset-1">
                                            <div class="img-wrapper">
                                                <img src="{{asset('administrator/img/swiper-img-5-3.jpg')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="col-sm-10 col-sm-offset-1 col-md-4 col-md-offset-0">
                                            <article class="small-sm">
                                                <h6 class="h6">How we do this</h6>
                                                <div class="empty-space h5-xs"></div>
                                                <i>about technic</i>
                                                <div class="empty-space h15-xs"></div>
                                                <p>Phasellus mattis magna vel augue gravida eleifend. Donec sit amet diam mollis, sodales lorem vel, blandit orci. Proin nec mauris lectus Pellentesque habitant morbi tristique senectus et netus et malesuada fames making better</p>
                                                <div class="empty-space h35-xs"></div>
                                                <div class="btn-wrap"><a href="#" class="btn-2"><span>lern more</span></a></div>
                                            </article>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="row nopadding">
                                        <div class="col-sm-10 col-sm-offset-0 col-md-6 col-md-offset-1">
                                            <div class="img-wrapper">
                                                <img src="{{asset('administrator/img/swiper-img-5-4.jpg')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="col-sm-10 col-sm-offset-1 col-md-4 col-md-offset-0">
                                            <article class="small-sm">
                                                <h6 class="h6">How we do this</h6>
                                                <div class="empty-space h5-xs"></div>
                                                <i>about technic</i>
                                                <div class="empty-space h15-xs"></div>
                                                <p>Phasellus mattis magna vel augue gravida eleifend. Donec sit amet diam mollis, sodales lorem vel, blandit orci. Proin nec mauris lectus Pellentesque habitant morbi tristique senectus et netus et malesuada fames making better</p>
                                                <div class="empty-space h35-xs"></div>
                                                <div class="btn-wrap"><a href="#" class="btn-2"><span>learn more</span></a></div>
                                            </article>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="row nopadding">
                                        <div class="col-sm-10 col-sm-offset-0 col-md-6 col-md-offset-1">
                                            <div class="img-wrapper">
                                                <img src="{{asset('administrator/img/swiper-img-5-5.jpg')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="col-sm-10 col-sm-offset-1 col-md-4 col-md-offset-0">
                                            <article class="small-sm">
                                                <h6 class="h6">How we do this</h6>
                                                <div class="empty-space h5-xs"></div>
                                                <i>about technic</i>
                                                <div class="empty-space h15-xs"></div>
                                                <p>Phasellus mattis magna vel augue gravida eleifend. Donec sit amet diam mollis, sodales lorem vel, blandit orci. Proin nec mauris lectus Pellentesque habitant morbi tristique senectus et netus et malesuada fames making better</p>
                                                <div class="empty-space h35-xs"></div>
                                                <div class="btn-wrap"><a href="#" class="btn-2"><span>lern more</span></a></div>
                                            </article>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-pagination swiper-pagination-black"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- work process -->

        <div class="empty-space h30-xs h100-md"></div>
        <div class="empty-space h30-xs"></div>

        <!-- sale -->
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-center">
                    <h2 class="h2">Lastest Sale<span></span></h2>
                </div>
                <div class="col-sm-10 col-sm-offset-1 col-md-6 col-md-offset-3">
                    <div class="text-center grey-dark">
                        <div class="empty-space h25-xs"></div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras elementum id metus ac tempus. Praesent ut mauris eget velit volutpat posuere</p>
                    </div>
                </div>
            </div>
            <div class="empty-space h45-xs h65-md"></div>
            <div class="row">
                <div class="col-md-12">
                    <!-- swiper -->
                    <div class="swiper-style-4">
                        <div class="swiper-container" data-speed="1000" data-space="30" data-breakpoints="1" data-slides-per-view="3" data-xs-slides="1" data-sm-slides="2" data-md-slides="3">
                            <div class="swiper-wrapper">
                                @foreach($products_lastest as $item)
                                <div class="swiper-slide">
                                    <a href="#" class="img-hover-2 img-fluid"><img src="{{asset('images/'.$item->image)}}" alt=""></a>
                                    <div class="empty-space h20-xs"></div>
                                    <article class="small-sm bg-text">
                                        <a href="{{route('client.product.productdetail',['id'=>$item->id]) }}"><h6 class="h8 hover-6">{{Str::limit($item ->name,30)}}</h6></a>
                                        <div class="empty-space h5-xs"></div>
                                        <p>{{$item-> description}}</p>
                                        <div class="empty-space h5-xs"></div>
                                        <a href="{{route('client.product.category',['id'=>$item->category->id])}}">{{$item-> category -> name}}</a>
                                        <div class="empty-space h25-xs"></div>
                                        <a class="price"> {{number_format($item ->price,0,"",'.')}} VND</a>
                                        <div class="empty-space h5-xs"></div>
                                        <div class="btn-wrap"><a href="{{route('client.cart.addToCart',['id', $item -> id])}}" class="btn-2 mt"><span>add to cart</span></a></div>
                                    </article>
                                </div>
                                @endforeach
                            </div>
                            <div class="swiper-pagination swiper-pagination-black"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="empty-space h30-xs h100-md"></div>
            <div class="row">
                <div class="col-xs-12 text-center">
                    <h2 class="h2">Best Sale On 2024<span></span></h2>
                </div>
            </div>

            <div class="emty-space h45-xs h65-md">
                <div class="row">
                    <div class="col-md-12">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <a href="#" class="img-hover-2 img-fluid"><img src="{{asset('images/'.$products_feature_lastest->image)}}" alt=""></a>
                                <div class="empty-space h20-xs"></div>
                                <article class="small-sm bg-text text-center">
                                    <a href="{{route('client.product.productdetail',['id'=>$products_feature_lastest->id]) }}"><h6 class="h8 hover-6">{{$products_feature_lastest -> name}}</h6></a>
                                    <div class="empty-space h5-xs"></div>
                                    <p>{{$products_feature_lastest-> description}}</p>
                                    <div class="empty-space h5-xs"></div>
                                    <a href="{{route('client.product.category',['id'=>$products_feature_lastest->category->id])}}">{{$products_feature_lastest-> category -> name}}</a>
                                    <div class="empty-space h25-xs"></div>
                                    <a class="price"> {{number_format($products_feature_lastest ->price,0,"",'.')}} VND</a>
                                    <div class="empty-space h5-xs"></div>
                                    <div class="btn-wrap"><a href="{{route('client.cart.addToCart',['id', $item -> id])}}" class="btn-2 mt"><span>add to cart</span></a></div>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <!-- sale -->
        <div class="empty-space h25-xs h100-md"></div>
        <div class="empty-space h30-xs"></div>

        <!-- instagram -->
            <div class="container instagram">
                <div class="row flex-eq-h nopadding">
                    <div class="col-md-3 text-center nopadding">
                        <div class="article-wrapper flex-md">
                            <article class="bg-text">
                                <h6 class="h8">follow us</h6>
                                <div class="empty-space h15-xs"></div>
                                <p>on instagram</p>
                                <div class="empty-space h15-xs"></div>
                                <a href="#">&#35;mevo</a>
                            </article>
                        </div>
                    </div>
                    <div class="col-md-9 nopadding">
                        <div><a href="#"><img src="{{asset('administrator/img/instagram-1.jpg')}}" alt=""></a></div>
                        <div><a href="#"><img src="{{asset('administrator/img/instagram-2.jpg')}}" alt=""></a></div>
                        <div><a href="#"><img src="{{asset('administrator/img/instagram-3.jpg')}}" alt=""></a></div>
                        <div><a href="#"><img src="{{asset('administrator/img/instagram-4.jpg')}}" alt=""></a></div>
                        <div><a href="#"><img src="{{asset('administrator/img/instagram-5.jpg')}}" alt=""></a></div>
                        <div><a href="#"><img src="{{asset('administrator/img/instagram-6.jpg')}}" alt=""></a></div>
                        <div><a href="#"><img src="{{asset('administrator/img/instagram-7.jpg')}}" alt=""></a></div>
                        <div><a href="#"><img src="{{asset('administrator/img/instagram-8.jpg')}}" alt=""></a></div>
                        <div><a href="#"><img src="{{asset('administrator/img/instagram-9.jpg')}}" alt=""></a></div>
                        <div><a href="#"><img src="{{asset('administrator/img/instagram-10.jpg')}}" alt=""></a></div>
                    </div>
                </div>
            </div>
        <!-- instagram -->

        <div class="empty-space h35-xs h100-md"></div>
        <div class="empty-space h30-xs"></div>


    </div>


@endsection