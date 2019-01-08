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

        @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
        @endif @if (isset($photos) && count($photos) > 0)
        <div class="row">

            @foreach ($photos as $photo)

            <div class="col-12 col-md-6 col-lg-3">
                <div class="portfolio-content">
                    <figure>
                        <img src="{{ $photo->images[0]->source }}" alt="">
                    </figure>

                    <div class="entry-content flex flex-column align-items-center justify-content-center">
                        @if(App\Image::where([ ['album_id', App\Album::where([ ['user_id', Auth::id()], ['paid', false], ])->first()->id], ['provider_id',
                        $photo->id], ])->first() == null)
                        <form action="/image" method="POST">
                            @csrf
                            <input type="hidden" name="providerId" value="{{ $photo->id }}">
                            <input type="hidden" name="uri" value="{{ $photo->images[0]->source }}">
                            <button type="submit">Add to Album</button>
                        </form>
                        @else
                        <form action="/image/{{$photo->id}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Remove from Album</button>
                            <form>
                                @endif
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

    </div>
    <!-- .container -->
</div>
<!-- .outer-container -->
@endsection