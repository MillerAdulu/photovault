@extends('layouts.app') 
@section('title', 'Contact Us') 
@section('content')
<div class="outer-container">
    <div class="single-post">
        <div class="container">
            <div class="row">
                <div class="col">
                    <ul class="breadcrumbs flex align-items-center">
                        <li><a href="/">Home</a></li>
                        <li>Contact Us</li>
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
                                <a href="/contact">Contact Us</a>
                            </div>
                            <!-- .meta-post -->

                            <h1>Contact Us</h1>

                            <div class="entry-content">
                                <p>Reach us on +254 703 175 638</p>
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