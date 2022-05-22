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
                         <p>Dec,2022</p>
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
        <div class="col-md-4 main2">

            <div class="search">
                <input type="text" name="search" placeholder="Search"  >
                <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
            </div>
            <div class="categori">
                <h4><a href="#">categories</a> </h4>
                <ul >
                    <li><a href="#">COOKING RECIPE</a> </li>
                    <li><a href="">DELICIOUS FOODS</a> </li>
                    <li><a href=""> EVENTS DESIGN</a></li>
                    <li><a href="">RESTAURANT PLACE</a> </li>
                    <li><a href="">WORDPRESS</a> </li>
                </ul>
            </div>
            <!-- popular -->
            <div class="popular">
                <h4><a href="#">MOST POPULAR</a> </h4>
                <ul>
                    <li>
                        <div class="imh">
                           <div class="imh1"><a href="#"><img src="{{asset('img/image-1.jpg')}}" alt="Garlic"></a></div> 
                            <div class="imh2">
                                <a href="#">BEST PLACES FOR WINE</a>
                                <p>3 days ago</p>
                            </div>
                        </div>
                    </li>
                    <li>
                    <div class="imh">
                           <div class="imh1"><a href="#"><img src="{{asset('img/image-1.jpg')}}" alt="Garlic"></a></div> 
                            <div class="imh2">
                                <a href="#">BEST PLACES FOR WINE</a>
                                <p>3 days ago</p>
                            </div>
                        </div>
                    </li>
                    <li>
                    <div class="imh">
                           <div class="imh1"><a href="#"><img src="{{asset('img/image-1.jpg')}}" alt="Garlic"></a></div> 
                            <div class="imh2">
                                <a href="#">BEST PLACES FOR WINE</a>
                                <p>3 days ago</p>
                            </div>
                        </div>
                    </li>
                    <li>
                    <div class="imh">
                           <div class="imh1"><a href="#"><img src="{{asset('img/image-1.jpg')}}" alt="Garlic"></a></div> 
                            <div class="imh2">
                                <a href="#">BEST PLACES FOR WINE</a>
                                <p>3 days ago</p>
                            </div>
                        </div>
                    </li>
                    <li>
                    <div class="imh">
                           <div class="imh1"><a href="#"><img src="{{asset('img/image-1.jpg')}}" alt="Garlic"></a></div> 
                            <div class="imh2">
                                <a href="#">BEST PLACES FOR WINE</a>
                                <p>3 days ago</p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- Archive -->
            <div class="archive">
                <h4><a href="#">Archive</a> </h4>
                <ul>
                    <li>
                        <a href="#">uly 2022  </a>
                        <span>(6)</span>
                    </li>
                    <li>
                        <a href="#">june 2022</a>
                        <span>(39)</span>
                    </li>
                    <li>
                        <a href="#">may 2022</a>
                        <span>(25)</span>
                    </li>
                    <li>
                        <a href="#">april 2022</a>
                        <span>(27)</span>
                    </li>
                    <li>
                        <a href="#">march 2022</a>
                        <span>(29)</span>
                    </li>
                    <li>
                        <a href="#">february 2022</a>
                        <span>(28)</span>
                    </li>
                    <li>
                        <a href="#">january</a>
                        <span>(24)</span>
                    </li>
                        
                    <li>
                        <a href="#">december 2021</a>
                        <span>(23)</span>
                    </li>
                </ul>
            </div>
        </div>
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