@extends('layouts.app') 
@section('title', 'Blog') 
@section('content')
<div class="outer-container blog-page">
    <div class="container">
            <div class="row">
                    <div class="col">
                        <ul class="breadcrumbs flex align-items-center">
                            <li><a href="/">Home</a></li>
                            <li><a href="/blog">Blog</a></li>
                        </ul>
                        <!-- .breadcrumbs -->
                    </div>
                    <!-- .col -->
            @include('partials.authlinks')
                </div>
                <!-- .row -->
    </div>
    <div class="container-fluid">

        <div class="row">

            @for ($i = 0; $i
            < 3; $i++) <div class="col-12 col-xl-6 no-padding">
                <div class="blog-content flex flex-xl-row-reverse">
                    <figure>
                        <a href="#"><img src="images/6.jpg" alt=""></a>
                    </figure>

                    <div class="entry-content flex flex-column justify-content-between align-items-start">
                        <header>
                            <h3><a href="#">Portfolio Customizer Options</a></h3>

                            <div class="posted-by">Phil Martinez</div>
                        </header>

                        <footer class="flex flex-wrap align-items-center">
                            <div class="posted-on">December 20, 2018</div>

                            <ul class="flex flex-wrap align-items-center">
                                <li><a href="#">Portfolio,</a></li>
                                <li><a href="#">Tree</a></li>
                            </ul>
                        </footer>
                    </div>
                    <!-- .entry-content -->
                </div>
                <!-- .blog-content -->
        </div>
        <!-- .col -->
        @endfor



    </div>
    <!-- .row -->
</div>
<!-- .container-fluid -->
</div>
<!-- .outer-container -->
@endsection