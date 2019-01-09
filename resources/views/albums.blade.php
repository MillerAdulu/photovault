@extends('layouts.app') 
@section('title', 'Albums') 
@section('content')
<div class="outer-container blog-page">
    <div class="container">
        <div class="row">
            <div class="col">
                <ul class="breadcrumbs flex align-items-center">
                    <li><a href="/">Home</a></li>
                    <li>My Albums</li>
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
            @if(isset($albums) && count($albums) > 0) @foreach ($albums as $album)
            <div class="col-12 col-xl-6 no-padding">
                <div class="blog-content flex flex-xl-row-reverse">
                    <figure>
                        <a href="#"><img src="images/6.jpg" alt=""></a>
                    </figure>

                    <div class="entry-content flex flex-column justify-content-between align-items-start">
                        <header>
                            <h3><a href="/album/{{ $album->id }}">{{ $album->name }}</a></h3>
                        </header>

                        <footer class="flex flex-wrap align-items-center">
                            <div class="posted-on">{{ $album->created_at->toFormattedDateString() }}</div>
                        </footer>
                    </div>
                    <!-- .entry-content -->
                </div>
                <!-- .blog-content -->
            </div>
            <!-- .col -->

            @endforeach @endif


        </div>
        <!-- .row -->
    </div>
    <!-- .container-fluid -->
</div>
<!-- .outer-container -->
@endsection