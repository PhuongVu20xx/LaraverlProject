@extends('user.layout.userlayout')

@section('header')
@include('user.layout.header')
<link rel="stylesheet" href="{{asset('css/user/pages/landingpage.css')}}">
<script src="{{asset('js/user/landingpage.js')}}" defer></script>
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
            <a href="/about">OUR STORY</a>
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
            <div class="sweetgrocery">
                <img src="{{asset('img/landingpage7.jpg')}}" alt="Sweet Grocery">
                <div class="desc"><a href="#">Sweet Grocery</a></div>
            </div>
            <div class="saltedgrocery">
                <img src="{{asset('img/landingpage10.jpg')}}" alt="Salted Grocery">
                <div class="desc"><a href="#">Salted Grocery</a></div>
            </div>
            <div class="freshfood">
                <img src="{{asset('img/landingpage9.jpg')}}" alt="Fresh Food">
                <div class="desc"><a href="#">Fresh Food</a></div>
            </div>
            <div class="frozenfood">
                <img src="{{asset('img/landingpage3.jpg')}}" alt="Frozen Food">
                <div class="desc"><a href="#">Frozen Food</a></div>
            </div>
            <div class="bakery_pastry">
                <img src="{{asset('img/landingpage9.jpg')}}" alt="Bakery & Pastry">
                <div class="desc"><a href="#">Bakery & Pastry</a></div>
            </div>
            <div class="beverage">
                <img src="{{asset('img/landingpage9.jpg')}}" alt="Beverage">
                <div class="desc"><a href="#">Beverage</a></div>
            </div>
            <div class="baby">
                <img src="{{asset('img/landingpage9.jpg')}}" alt="Baby">
                <div class="desc"><a href="#">Baby</a></div>
            </div>
            <div class="pet">
                <img src="{{asset('img/landingpage9.jpg')}}" alt="Pet">
                <div class="desc"><a href="#">Pet</a></div>
            </div>
            <div class="beauty_cosmetic">
                <img src="{{asset('img/landingpage9.jpg')}}" alt="Beauty & Cosmetic">
                <div class="desc"><a href="#">Beauty & Cosmetic</a></div>
            </div>
            <div class="household">
                <img src="{{asset('img/landingpage9.jpg')}}" alt="Household">
                <div class="desc"><a href="#">Household</a></div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('footer')
@include('user.layout.footer')
@endsection

