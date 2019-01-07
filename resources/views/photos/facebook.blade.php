@extends('layouts.app')

@section('title', 'Facebook Pictures')

@section('content')

<div class="outer-container">
        <div class="container portfolio-page">
            <div class="row">
                <div class="col">
                    <ul class="breadcrumbs flex align-items-center">
                        <li><a href="#">Home</a></li>
                        <li>Portfolio</li>
                    </ul><!-- .breadcrumbs -->
                </div><!-- .col -->
            </div><!-- .row -->
    
            <div class="row">

                    @if (count($photos) > 0)
                    @foreach ($photos as $photo)                    

                <div class="col-12 col-md-6 col-lg-3">
                    <div class="portfolio-content">
                        <figure>
                            <img src="{{ $photo->images[0]->source }}" alt="">
                        </figure>
    
                        <div class="entry-content flex flex-column align-items-center justify-content-center">
                            <h3><a>{{ $photo->album->name }}</a></h3>
    
                            <ul class="flex flex-wrap justify-content-center">
                                @if (isset($photo->name))
                                    <li><a>{{ $photo->name }}</a></li>
                                @endif
                            </ul>
                        </div><!-- .entry-content -->
                    </div><!-- .portfolio-content -->
                </div><!-- .col -->
    
                @endforeach
                @endif

            </div><!-- .row -->
    
            <div class="scroll-down flex flex-column justify-content-center align-items-center d-none d-lg-block">
                <span class="arrow-down flex justify-content-center align-items-center"><img src="images/arrow-down.png" alt="arrow"></span>
                <span class="scroll-text">Scroll Down</span>
            </div><!-- .scroll-down -->
        </div><!-- .container -->
    </div><!-- .outer-container -->
@endsection