@extends('layouts.app') 
@section('title', 'About') 
@section('content')
<div class="outer-container">
    <div class="single-post">
        <div class="container">
            <div class="row">
                <div class="col">
                    <ul class="breadcrumbs flex align-items-center">
                        <li><a href="/">Home</a></li>
                        <li>About</li>
                    </ul>
                    <!-- .breadcrumbs -->
                </div>
                <!-- .col -->
                @include('partials.authlinks')
            </div>
            <!-- .row -->

            <div class="row">
                <div class="col-12">
                    <div class="featured-img">
                        <figure>
                            <img src="images/blog-regular.jpg" alt="">
                        </figure>
                    </div>
                    <!-- .content-area -->
                </div>
                <!-- .col -->

                <div class="col-12 offset-lg-1 col-lg-10">
                    <div class="content-area">
                        <header class="entry-header">
                            <div class="post-meta">
                                <a href="/about">About Us</a>
                            </div>
                            <!-- .meta-post -->

                            <h1>About Us</h1>

                            <div class="entry-content">
                                <p>Get your social media pictures printed and sent to you. </p>
                            </div>
                            <!-- .entry-content -->
                    </div>
                    <!-- .content-area -->
                </div>
                <!-- .col-12 -->
            </div>
            <!-- .row -->
        </div>
        <!-- .container -->
    </div>
    <!-- .single-post -->
</div>
<!-- .outer-container -->
@endsection