@extends('layouts.layout')

@section('header')
@include('layouts.header')
<link rel="stylesheet" href="{{asset('css/landingpage.css')}}">
<script src="{{asset('js/landingpage.js')}}" defer></script>
<body>
    <div aria-label="Newest Photos" data-carousel>
        <div class="carousel">
            <button class="carousel-btn prev" data-carousel-btn="prev">&#8678;</button>
            <button class="carousel-btn next" data-carousel-btn="next">&#8680;</button>
            <ul data-slides>
                <li class="slide" data-active>
                    <img src="{{asset('img/landingpage1.jpg')}}" alt="Vegetables">
                    <div class="info">
                        <h1>WELCOME TO VNHP'S GROCERY</h1>
                        <p>We care about your health. Come and join with us.</p>
                        <a href="../product">Shopping</a>
                    </div>
                </li>
                <li class="slide">
                    <img src="{{asset('img/landingpage2.jpg')}}" alt="Garlic">
                    <div class="info">
                        <h1>WELCOME TO VNHP'S GROCERY</h1>
                        <p>We care about your health. Come and join with us.</p>
                        <a href="../product">Shopping</a>
                    </div>
                </li>
                <li class="slide">
                    <img src="{{asset('img/landingpage3.jpg')}}" alt="Spicies">
                    <div class="info">
                        <h1>WELCOME TO VNHP'S GROCERY</h1>
                        <p>We care about your health. Come and join with us.</p>
                        <a href="../product">Shopping</a>
                    </div>
                </li>
            </ul>   
        </div> 
    </div>
</body>
@endsection

@section('body')
<section>
    <div class="about">
        <div class="about-content">
            <i id="title">VNHP's Grocery Store</i>
            <p id="welcome">WELCOME</p>
            <p id="content">Lorem, ipsum dolor sit amet consectetur adipisicing elit. At rerum accusamus voluptas facilis delectus sequi ad veritatis ut illo temporibus, ab fuga culpa quaerat nemo debitis atque sed repellat voluptatem.</p>
            <br>
            <a href="#">OUR STORY</a>
        </div>
        <div class="about-img">
            <img src="{{asset('img/landingpage5.jpg')}}" alt="Grocery Store's Corner">
        </div>
    </div>
</section>          
<section>
    <div class="shopping">
        <div class="shopping-img">
            <div class="shopping-content1">
                <i>Discover</i> 
                <p>VNHP's Grocery Store</p>
            </div>
        </div>
        <div class="shopping-category">
            <div class="veggies">
                <img src="{{asset('img/landingpage7.jpg')}}" alt="Veggies Category">
                <div class="desc"><a href="#">Veggies</a></div>
            </div>
            <div class="fruits">
                <img src="{{asset('img/landingpage10.jpg')}}" alt="Fruits Category">
                <div class="desc"><a href="#">Fruits</a></div>
            </div>
            <div class="pastry">
                <img src="{{asset('img/landingpage9.jpg')}}" alt="Pastry Category">
                <div class="desc"><a href="#">Pastry</a></div>
            </div>
            <div class="spicies">
                <img src="{{asset('img/landingpage3.jpg')}}" alt="Pastry Category">
                <div class="desc"><a href="#">Spicies</a></div>
            </div>
            <div class="pastry">
                <img src="{{asset('img/landingpage9.jpg')}}" alt="Pastry Category">
                <div class="desc"><a href="#">Pastry</a></div>
            </div>
            <div class="pastry">
                <img src="{{asset('img/landingpage9.jpg')}}" alt="Pastry Category">
                <div class="desc"><a href="#">Pastry</a></div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('footer')
@include('layouts.footer')
@endsection

