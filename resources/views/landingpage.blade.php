@extends('layouts.layout')

@section('header')
@include('layouts.header')
@endsection

@section('landingpage')
    <div class="landingpage">
        <link rel="stylesheet" href="{{asset('css/landingpage.css')}}">
        <h1>CATEGORIES</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi culpa esse voluptate ipsum, facere beatae?</p>
        <button>Shopping</button>
        <button>On Sale</button>

        <div class="gallery1">
            <img src="{{asset('img/image-1.jpg')}}" class="gallery1__img1" alt="Image 1">
            <img src="{{asset('img/image-2.jpg')}}" class="gallery1__img2" alt="Image 2">
            <img src="{{asset('img/image-3.jpg')}}" class="gallery1__img3" alt="Image 3">
            <img src="{{asset('img/image-4.jpg')}}" class="gallery1__img4" alt="Image 4">
            <img src="{{asset('img/image-5.jpg')}}" class="gallery1__img5" alt="Image 5">
            <img src="{{asset('img/image-6.jpg')}}" class="gallery1__img6" alt="Image 6">
        </div>

        <div class="blog">
            <h1>FROM OUR BLOG</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum et inventore mollitia accusamus architecto ducimus ratione eos adipisci ipsum. Cumque possimus labore autem ullam cum.</p>
            <div class="gallery2">
                <img src="{{asset('img/image-7.jpg')}}" class="gallery2__img1" alt="Image 1">
                <img src="{{asset('img/image-8.jpg')}}" class="gallery2__img2" alt="Image 2">
                <img src="{{asset('img/image-9.jpg')}}" class="gallery2__img3" alt="Image 3">
            </div>
        </div>
    </div>
    
@endsection

@section('footer')
@include('layouts.footer')
@endsection

