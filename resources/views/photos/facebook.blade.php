@extends('layouts.app') 
@section('title', 'Facebook Pictures') 
@section('content')

<div class="outer-container">
    <div class="container portfolio-page">
        <div class="row">
            <div class="col">
                <ul class="breadcrumbs flex align-items-center">
                    <li><a href="/">Home</a></li>
                    <li>Facebook Photos</li>
                </ul>
                <!-- .breadcrumbs -->
            </div>
            <!-- .col -->
    @include('partials.authlinks')
        </div>
        <!-- .row -->

        @if (isset($photos) && count($photos) > 0)

        <div class="row">

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
                    </div>
                    <!-- .entry-content -->
                </div>
                <!-- .portfolio-content -->
            </div>
            <!-- .col -->

            @endforeach

        </div>
        <!-- .row -->

        @endif

        <div class="row">
            <div class="portfolio-content">
                Unable to connect to Facebook at this time. Please try again later
            </div>
        </div>

    </div>
    <!-- .container -->
</div>
<!-- .outer-container -->
@endsection