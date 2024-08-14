<!--Header section start-->
<header class="header header-static bg-black header-sticky">
    <div class="default-header menu-right">
        <div class="container container-1520">
            <div class="row">
                
                <!--Logo start-->
                <div class="col-12 col-md-3 col-lg-3 order-md-1 order-lg-1 mt-20 mb-20">
                    <div class="logo">
                        <a href="{{ route('layouts.frontend.home.index')}}"><img src="frontend/images/brzl.jpg" style="width: 100px;"alt=""></a>
                    </div>
                </div>
                <!--Logo end-->
                
                <!--Menu start-->
                <div class="col-lg-6 col-12 order-md-3 order-lg-2 d-flex justify-content-center">
                    <nav class="main-menu menu-style-2">
                        <ul>
                            <li>
                                <a href="{{ route('layouts.frontend.home.index')}}">Home</a>                                        
                            </li>
                            <li><a href="games.html">games</a>
                                <ul class="sub-menu">
                                    <li><a href="games.html">Games</a></li>
                                    <li><a href="games-details.html">Games Details</a></li>
                                </ul>
                            </li>
                            <li><a href="video.html">Videos</a></li>
                            <li><a href="forum.html">Forums</a>
                                <ul class="sub-menu">
                                    <li><a href="forum.html">Forums</a></li>
                                    <li><a href="forum-create.html">Forums Create</a></li>
                                    <li><a href="forum-post.html">Forums Post</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Pages</a>
                                <ul class="sub-menu">
                                    <li><a href="blog.html">Blog</a></li>
                                    <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                                    <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                                    <li><a href="blog-list.html">Blog List</a></li>
                                    <li><a href="blog-list-left-sidebar.html">Blog List Left Sidebar</a></li>
                                    <li><a href="single-blog.html">Single Blog</a></li>
                                    <li><a href="single-blog-left.html">Single Blog Left Sidebar</a></li>
                                    <li><a href="gallery.html">Gallery</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                    <li><a href="login.html">Login</a></li>
                                    <li><a href="register.html">REGISTER</a></li>
                                </ul>
                            </li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <!--Menu end-->
                
                <!--Header Right Wrap-->
                <div class="col-12 col-md-9 order-md-2 order-lg-3 col-lg-3">
                    <div class="header-right-wrap">
                        <ul>
                            @if (Route::has('login'))
                                    @auth
                                        <a href="{{ url('/dashboard') }}">Dashboard</a>
                                    @else
                                        <li><a href="{{ route('login') }}">LOGIN</a></li>
                                    @if (Route::has('register'))
                                        <li><a href="{{ route('register') }}">REGISTER</a></li>
                                    @endif
                                @endauth
                            @endif
                           
                            <li class="header-search"><a class="header-search-toggle" href="#"><i class="icofont-search-2"></i></a>
                                <div class="header-search-form">
                                    <form action="#">
                                        <input type="text" placeholder="Type and hit enter">
                                        <button><i class="icofont-search"></i></button>
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!--Header Right Wrap-->
                
            </div>
            
            <!--Mobile Menu start-->
            <div class="row">
                <div class="col-12 d-flex d-lg-none">
                    <div class="mobile-menu"></div>
                </div>
            </div>
            <!--Mobile Menu end-->
            
        </div>
    </div>
</header>
<!--Header section end-->