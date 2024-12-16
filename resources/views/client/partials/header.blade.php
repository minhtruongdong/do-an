<header class="header-style-2">
    <div class="wide-container-fluid">
        <div class="row">
            <div class="col-xs-2">
                <a class="logo" href="{{route('client.index')}}"><img src="{{asset('administrator/img/logo.png')}}" alt="" /></a>  
            </div>
            <div class="col-xs-10 text-right">

                <ul class="header-menu">
                    <li class="active"><a href="{{route('client.category.index')}}"><span>Home</span></a></li>
                    <li><a href="{{route('client.category.about')}}"><span>About us</span></a></li>
                    <li class="dropdown-plus">
                        <a href="blog.html"><span>Blog</span></a>
                        <span></span>
                        <ul>
                            <li><a href="post.html">Blog post</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href=""><span>Products</span></a>
                        <span></span>
                        <ul>
                            <li><a href="shop.html">Products #1</a></li>
                            <li><a href="shop2.html">Products #2</a></li>
                            <li><a href="shop3.html">Products #3</a></li>
                            <li><a href="shopdetail.html">Detail products</a></li>            
                        </ul>
                    </li>

                    @php
                        $categories = \App\Models\Category::where('parent_id',8)->get();
                    @endphp

                    <li>
                        <a href="shop.html"><span>Category</span></a>
                        <span></span>
                        <ul>
                            @foreach($categories as $category)
                            <li><a href="{{route('client.product.category',['id'=> $category->id])}}">{{$category->name}}</a></li>
                            @endforeach
                        </ul>
                    </li>

                    <li><a href="checkout.html"><span>Checkout</span></a></li>
                    <li><a href="contact.html"><span>Contact us</span></a></li>
                    <li><a href="{{route('client.contact')}}"><span>Contact us</span></a></li>

                    @if (Auth::check() && Auth::user()->status == 1)
                        <li>
                            <a href="{{route('admin.dash.index')}}"><span>Management page</span></a>
                        </li>
                    @endif

                </ul>

                <!-- basket -->
                <div class="basket open-popup" data-rel="1">
                    <div class="img-wrapper">
                        <span>1</span>
                    </div>
                    <br>
                    <p>total: <span>149.95&#36;</span></p>
                </div>
                <!-- login -->
                <div class="login-wrapper">
                    @if (Auth::check())
                        {{-- nếu đã đăng nhập --}}
                        <div class="login" data-rel="2">
                            <a href="{{route('auth.logout')}}">
                                <span>Log Out</span>
                            </a>
                        </div>
                    @else
                        {{-- nếu chưa đăng nhập --}}
                        <div class="login">
                            <a href="{{route('auth.login')}}">
                                <span>Log In</span>
                            </a>
                        </div>
                    @endif
                        
                    
                </div>    
                

                <div class="hamburger-icon">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                 <div class="hamburger-icon-2">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
    </div>
</header>