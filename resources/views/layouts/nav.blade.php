<header class="site-header">
    <div class="site-branding">
        <h1 class="site-title"><a href="/" rel="home"><img src="{{ asset('images/logo.png') }}" alt="Logo"></a></h1>
    </div>
    <!-- .site-branding -->

    <div class="hamburger-menu">
        <div class="menu-icon">
            <img src="{{ asset('images/menu-icon.png') }}" alt="menu icon">
        </div>
        <!-- .menu-icon -->

        <div class="menu-close-icon">
            <img src="{{ asset('images/x.png') }}" alt="menu close icon">
        </div>
        <!-- .menu-close-icon -->
    </div>
    <!-- .hamburger-menu -->
</header>
<!-- .site-header -->

<nav class="site-navigation flex flex-column justify-content-between">
    <div class="site-branding d-none d-lg-block ">
        <h1 class="site-title"><a href="/" rel="home"><img src="{{ asset('images/logo2.png') }}" alt="Logo"></a></h1>
    </div>
    <!-- .site-branding -->

    <ul class="main-menu flex flex-column justify-content-center">
        <li @if(Route::current()->uri == '/') class="current-menu-item" @endif><a href="/">Home</a></li>
        <li @if(Route::current()->uri == 'about') class="current-menu-item" @endif><a href="/about">About</a></li>
        <li @if(Route::current()->uri == 'photos/facebook') class="current-menu-item" @endif><a href="/photos/facebook">Facebook</a></li>
        <li @if(Route::current()->uri == 'blog') class="current-menu-item" @endif><a href="/blog">Blog</a></li>
        <li @if(Route::current()->uri == 'contact') class="current-menu-item" @endif><a href="/contact">Contact</a></li>
    </ul>

    <p>
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        Copyright &copy;
        <script>
            document.write(new Date().getFullYear());
        </script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by
        <a href="https://colorlib.com" target="_blank">Colorlib</a>
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
    </p>


    <div class="social-profiles">
        <ul class="flex justify-content-start justify-content-lg-center align-items-center">
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
        </ul>
    </div>
    <!-- .social-profiles -->
</nav>
<!-- .site-navigation -->