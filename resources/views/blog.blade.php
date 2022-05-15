@extends('layouts.layout')

@section('header')
@include('layouts.header')
@endsection
<!-- css -->
@section('css')
    <link rel="stylesheet" href="{{asset('css/blog.css')}}">
@endsection

@section('body')
<div>
    <div class="blog-thumbnail">
         <img src="{{asset('img/landingpage6.jpg')}}" alt="thumbnail">
         <div class="desc">Blog</div>
    </div>          
    <!--  -->
    <div class="row">
        <!-- left -->
        <div class="col-md-8 ">
            <div class="blog-items">
                <div><img src="{{asset('img/landingpage5.jpg')}}" alt="Garlic"></div>
                <div class="blog-item">
                    <h1>COOKING RECIPE DELICIOUS</h1>
                    <ul>
                        <li>by Admin |</li>
                        <li>28 December,2022 |</li>
                        <li>Cooking, Food |</li>
                        <li>8 Comments</li>
                    </ul>
                    <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce eget dictum tortor. Donec dictum vitae sapien eu varius</p>
                    <h5><a href="#">Continue Reading  <i class="fa-solid fa-arrow-right-long"></i></a></h5>
                </div>
            </div>
        </div>
        <!-- right -->
        <div class="col-md-4"></div>
    </div>
</div>
@endsection

@section('footer')
@include('layouts.footer')
@endsection