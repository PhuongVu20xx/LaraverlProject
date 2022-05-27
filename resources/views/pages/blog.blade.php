@extends('layouts.layout')

@section('header')
@include('layouts.header')
@endsection

<!-- css -->
@section('css')
    <link rel="stylesheet" href="{{asset('css/blog.css')}}">
@endsection

@section('body')
<div class="blog">
    <div class="blog-thumbnail">
         <img src="{{asset('img/landingpage6.jpg')}}" alt="thumbnail">
         <div class="desc">Blog</div>
    </div>          
    <!--  -->
    
    <div class="row">
        <div class="headerblog">
            <h4><a href="#">Home</a></h4>
            <p>/</p>
            <p>blog</p>
        </div>
        <!-- left -->
        <div class="col-md-8 main">
            <div class="blog-items">
                <div>
                    <img src="{{asset('img/landingpage5.jpg')}}" alt="Garlic">
                </div>
                <!-- <div>
                         <p>28</p>
                         <p>Dec,2022</p>2
                </div> -->
                <div class="blog-item">
                    <h4><a href="#"> COOKING RECIPE DELICIOUS</a></h4>
                    <ul>
                        <li>by Admin |</li>
                        <li>28 December,2022 |</li>
                        <li>Cooking, Food |</li>
                        <li>8 Comments</li>
                    </ul>
                    <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce eget dictum tortor. Donec dictum vitae sapien eu varius</p>
                    <h5><a href="#">Continue Reading</a></h5>
                    <i class="fa-solid fa-arrow-right"></i>
                </div>
            </div>

            <div class="blog-items">
                <div><img src="{{asset('img/landingpage5.jpg')}}" alt="Garlic"></div>
                <div class="blog-item">
                    <h4><a href="#">PIZZA IS PREPARED FRESH</a> </h4>
                    <ul>
                        <li>by Admin |</li>
                        <li>28 December,2022 |</li>
                        <li>Cooking, Food |</li>
                        <li>8 Comments</li>
                    </ul>
                    <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce eget dictum tortor. Donec dictum vitae sapien eu varius</p>
                    <h5><a href="#">Continue Reading</a></h5>
                    <i class="fa-solid fa-arrow-right"></i>
                </div>
            </div>
            <div class="blog-items">
                <div><img src="{{asset('img/landingpage5.jpg')}}" alt="Garlic"></div>
                <div class="blog-item">
                    <h4><a href="#">STYLE THE WEDDING PARTY</a> </h4>
                    <ul>
                        <li>by Admin |</li>
                        <li>28 December,2022 |</li>
                        <li>Cooking, Food |</li>
                        <li>8 Comments</li>
                    </ul>
                    <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce eget dictum tortor. Donec dictum vitae sapien eu varius</p>
                    <h5><a href="#">Continue Reading</a></h5>
                    <i class="fa-solid fa-arrow-right"></i>
                </div>
            </div>
            <div class="blog-items">
                <div><img src="{{asset('img/landingpage5.jpg')}}" alt="Garlic"></div>
                <div class="blog-item">
                    <h4><a href="#"> BEST PLACES FOR WINE</a></h4>
                    <ul>
                        <li>by Admin |</li>
                        <li>28 December,2022 |</li>
                        <li>Cooking, Food |</li>
                        <li>8 Comments</li>
                    </ul>
                    <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce eget dictum tortor. Donec dictum vitae sapien eu varius</p>
                    <h5><a href="#">Continue Reading</a></h5>
                    <i class="fa-solid fa-arrow-right"></i>
                </div>
            </div>

        </div>
        <!-- right -->
        @include('layouts.sidebar')
        <!-- <div class="number">
            <div> <a href="#">1</a></div>
          <div> <a href="#">2</a></div>
        </div> -->
    </div>
</div>
@endsection

@section('footer')
@include('layouts.footer')
@endsection