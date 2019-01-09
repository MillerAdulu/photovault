@extends('layouts.app') 
@section('title', 'Facebook Pictures') 
@section('content')

<div class="outer-container">
    <div class="container portfolio-page">
        <div class="row">
            <div class="col">
                <ul class="breadcrumbs flex align-items-center">
                    <li><a href="/">Home</a></li>
                    <li><a href="/my/albums">{{ $album->name }}</a></li>

                </ul>
                <!-- .breadcrumbs -->
            </div>
            <!-- .col -->
    @include('partials.authlinks')
        </div>
        <!-- .row -->

        @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
        @endif @if (isset($images) && count($images) > 0)
        <div class="row">

            @foreach ($images as $image)

            <div class="col-12 col-md-6 col-lg-3">
                <div class="portfolio-content">
                    <figure>
                        <img src="{{ $image->uri }}" alt="">
                    </figure>

                    <div class="entry-content flex flex-column align-items-center justify-content-center">
                        <form action="/my/image/{{$image->id}}" method="POST">
                            @csrf @method('DELETE')
                            <button type="submit">Remove from Album</button>
                        </form>
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

    </div>
    <!-- .container -->
</div>
<!-- .outer-container -->
@endsection