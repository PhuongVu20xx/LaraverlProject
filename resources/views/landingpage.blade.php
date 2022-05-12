@extends('layouts.layout')

@section('header')
@include('layouts.header')
<div class="thumbnail">
        <div class="content">
            <h1>VNPH'S GROCERY STORE</h1>
            <p>We care about your family, come and join with us.</p>
            <a href="shopping.php"><b>Shopping</b></a>
            <a href="feedback.php"><b>Feedback</b></a>
        </div>
        <img src="{{asset('img/thumbnail.jpg')}}" alt="logo">
    </div>
@endsection

@section('body')
    <link rel="stylesheet" href="{{asset('css/landingpage.css')}}">
    <div class="landingpage">
        <div class="category">
            <h1>CATEGORIES</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi culpa esse voluptate ipsum, facere beatae?</p>
            <a href="shopping.php"><b>Shopping</b></a>
            <a href="shopping.php"><b>On Sale</b></a>
            <div class="gallery1">
                <img src="{{asset('img/image-1.jpg')}}" class="gallery1__img1">
                <img src="{{asset('img/image-2.jpg')}}" class="gallery1__img2">
                <img src="{{asset('img/image-3.jpg')}}" class="gallery1__img3">
                <img src="{{asset('img/image-4.jpg')}}" class="gallery1__img4">
                <img src="{{asset('img/image-5.jpg')}}" class="gallery1__img5">
                <img src="{{asset('img/image-6.jpg')}}" class="gallery1__img6">
            </div>
        </div>
        
        <div class="blog">
            <h1>FROM OUR BLOG</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum et inventore mollitia accusamus architecto ducimus ratione eos adipisci ipsum. Cumque possimus labore autem ullam cum.</p>
            <div class="gallery2">
                <img src="{{asset('img/image-2.jpg')}}" class="gallery2__img1">
                <img src="{{asset('img/image-2.jpg')}}" class="gallery2__img2">
                <img src="{{asset('img/image-2.jpg')}}" class="gallery2__img3">
            </div>
        </div>
    </div>
@endsection

@section('footer')
@include('layouts.footer')
@endsection

