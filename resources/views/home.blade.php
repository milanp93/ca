@extends('master')
@section('content')
    <div class="col-md-8">
    @include('navigation')
    <div class="row">
        <div class="col-md-12">
            <a href="#"><img src="{{asset('images/turkey.jpg')}}" alt="Image"/></a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <nav class="navbar navbar-bottom">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="#"><img src="{{asset('images/holi-turkey.jpg')}}" alt="Image"></a>

                        <h2 class="bottomNav"><a href="#">Holy Turkey</a></h2>

                        <p>
                            This is just a place holder
                        </p>
                    </li>
                    <li>
                        <a href="#"><img src="{{asset('images/fruits-and-bread.jpg')}}" alt="Image"></a>

                        <h2><a href="#">Fruits &amp; Bread</a></h2>

                        <p>
                            This is just a place holder
                        </p>
                    </li>
                    <li>
                        <a href="#"><img src="{{asset('images/dessert.jpg')}}" alt="Image"></a>

                        <h2><a href="#">Dessert</a></h2>

                        <p>
                            This is just a place holder
                        </p>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="index-grid">
                <h2><a href="#">Featured Recipes</a></h2>
                <a href="#"><img src="{{asset('images/featured.jpg')}}" alt="Image"></a>
            </div>
        </div>
        <div class="col-md-6">
            <div class="index-grid">
                <h2><a href="#">A to Z Recipes</a></h2>
                <a href="#"><img src="{{asset('images/a-z.jpg')}}" alt="Image"></a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="index-grid">
                <h2><a href="#">Videos</a></h2>
                <a href="#"><img src="{{asset('images/videos.jpg')}}" alt="Image"></a>
            </div>
        </div>
        <div class="col-md-6">
            <div class="index-grid">
                <h2><a href="#">Blog</a></h2>
                <a href="#"><img src="{{asset('images/blog.jpg')}}" alt="Image"></a>
            </div>
        </div>
    </div>
</div>
@include('sidebar')
@stop