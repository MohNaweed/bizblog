{{-- <div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <main class="py-4">
        @yield('content')
    </main>
</div> --}}




    <!-- Preloader -->
    <div class="preloader">
        <div class="preload-img">
            <div class="spinnerBounce">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>
        </div>
    </div>
    <!-- End of Preloader -->

    <!-- Nav Search Box -->
    <div class="nav-search-box">
        <form>
            <div class="input-group">
                <input type="text" class="form-control" placeholder="eg. feel the love and …">
                <span class="b-line"></span>
                <span class="b-line-under"></span>
                <div class="input-group-append">
                    <button type="button" class="btn">
                        <img src="assets/images/search-icon.svg" alt="" class="img-fluid svg">
                    </button>
                </div>
            </div>
        </form>
    </div>
    <!-- End of Nav Search Box -->

        <!-- Header -->
    <header class="header">
        <div class="header-fixed">
            <div class="container-fluid pl-120 pr-120 position-relative">
                <div class="row d-flex align-items-center">

                    <div class="col-lg-3 col-md-4 col-6">
                        <!-- Logo -->
                        <div class="logo">
                            <a href="#"><img src="assets/images/logo.png" alt="" class="img-fluid"></a>
                        </div>
                        <!-- End of Logo -->
                    </div>

                    <div class="col-lg-9 col-md-8 col-6 d-flex justify-content-end position-static">
                        <!-- Nav Menu -->
                        <div class="nav-menu-cover">
                            <ul class="nav nav-menu">
                                <li><a href="index.html">Home</a></li>
                                <li><a href="about.html">About</a></li>
                                <li class="menu-item-has-children"><a href="#">Blog</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item-has-children"><a href="#">Blog List</a>
                                            <ul class="sub-menu">
                                                <li><a href="blog-list-sidebar.html">List Sidebar</a></li>
                                                <li><a href="blog-list-full-width.html">List Full Width</a></li>
                                                <li><a href="blog-grid-sidebar.html">Grid Sidebar</a></li>
                                                <li><a href="blog-grid-2-col.html">Grid v2</a></li>
                                                <li><a href="blog-grid-3-col.html">Grid v3</a></li>
                                                <li><a href="blog-overlay.html">Blog Overlay</a></li>
                                                <li><a href="blog-card-v1.html">Blog Card v1</a></li>
                                                <li><a href="blog-card-v2.html">Blog Card v2</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children"><a href="#">Blog Details</a>
                                            <ul class="sub-menu">
                                                <li><a href="blog-details.html">Default Style</a></li>
                                                <li><a href="blog-details-full-width.html">Full Width</a></li>
                                                <li><a href="blog-details-video.html">Video Post</a></li>
                                                <li><a href="blog-details-slide.html">Slide Post</a></li>
                                                <li><a href="blog-details-audio.html">Audio Post</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><a href="#">Pages </a>
                                    <ul class="sub-menu">
                                        <li><a href="categories.html">Categories</a></li>
                                        <li><a href="search-result.html">Search Results</a></li>
                                        <li><a href="404.html">404 Error</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </div>
                        <!-- End of Nav Menu -->

                        <!-- Mobile Menu -->
                        <div class="mobile-menu-cover">
                            <ul class="nav mobile-nav-menu">
                                <li class="search-toggle-open">
                                    <img src="assets/images/search-icon.svg" alt="" class="img-fluid svg">
                                </li>
                                <li class="search-toggle-close hide">
                                    <img src="assets/images/close.svg" alt="" class="img-fluid">
                                </li>
                                <li class="nav-menu-toggle">
                                    <img src="assets/images/menu-toggler.svg" alt="" class="img-fluid svg">
                                </li>
                            </ul>
                        </div>
                        <!-- End of Mobile Menu -->
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- End of Header -->
