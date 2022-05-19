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
        <!-- left -->
        <div class="col-md-8 main">
            <div class="blog-items">
                <div><img src="{{asset('img/landingpage5.jpg')}}" alt="Garlic"></div>
                <div class="blog-item">
                    <h4>COOKING RECIPE DELICIOUS</h4>
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
                    <h4>PIZZA IS PREPARED FRESH</h4>
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
                    <h4>STYLE THE WEDDING PARTY</h4>
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
                    <h4>BEST PLACES FOR WINE</h4>
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
        <div class="col-md-4">

            <div class="search">
                <input type="text" name="search" placeholder="Search">
                <!-- <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button> -->
            </div>
            <div class="categori">
                <h4>categories</h4>
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
                <h4>MOST POPULAR</h4>
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
                <h4>Archive</h4>
                <ul>
                    <li><a href="#">uly 2022</a></li>
                    <li><a href="#">june 2022</a></li>
                    <li><a href="#">may 2022</a></li>
                    <li><a href="#">april 2022</a></li>
                    <li><a href="#">march 2022</a></li>
                    <li><a href="#">february 2022</a></li>
                    <li><a href="#">january</a></li>
                    <li><a href="#">december 2021</a></li>
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