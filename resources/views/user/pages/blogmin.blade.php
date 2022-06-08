@extends('user.layout.userlayout')

@section('header')
@include('user.layout.header')
<div class="backgroundheader"></div>
@endsection

<!-- css -->
@section('css')
    <link rel="stylesheet" href="{{asset('css/user/pages/blogmin.css')}}">
@endsection

@section('body')
<form>
    <div>
        <div class="blog-thumbnail">
            <img src="{{asset('img/landingpage6.jpg')}}" alt="thumbnail">
            <div class="desc">Blog</div>
        </div>   
        <div class="row">
                <div class="headerblog">
                    <h4><a href="#">Home</a></h4>
                    <p>/</p>
                    <p>blog</p>
                </div>
            <div class="col-md-8 main">
                <form action="" class="blog-items1">
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
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus eget mi sem. Nulla facilisi. Sed ultricies eros a nibh tempus, in sodales mi vestibulum. Nullam quis dui ac nisl ultrices euismod et sit amet urna. Morbi semper sapien quis ex tempor, sit amet scelerisque eros rhoncus. Cras scelerisque auctor gravida. Nunc fermentum luctus rhoncus. Nulla vulputate fermentum convallis. In quis pellentesque tortor. Cras metus nibh, gravida vitae ante vel, finibus semper tellus. Nulla vel tincidunt magna. Morbi tempor velit lectus, eu commodo quam volutpat vitae.</p>
                            <h5><a href="#">Continue Reading</a></h5>
                            <i class="fa-solid fa-arrow-right"></i>
                        </div>
                    </div>
                    <!-- leave a comment  -->
                    <div class="blogmin">
                        <div class="blogmin1">
                            <h4>LEAVE A COMMENT</h4>
                            <p>Your email address will not be published. Required fields are marked *</p>
                        </div>
                        <div class="blogmin2">
                            <div class="input1"><input type="text" name="comment" placeholder="Comment..."><br></div>
                            <div class="input2"><input type="text" name="email" placeholder="Email*"><br></div>
                        </div>
                        <div class="blogmin3">
                            <button type="submit">Post comment</button>
                            <!-- phai dang nhap moi duoc submit  -->
                        </div>
                    </div>
                </form>  
            </div>  
            <!-- sidebar -->
                 @include('user.layout.sidebar')
            
    </div>

</form>
   

   
@endsection



@section('footer')
@include('user.layout.footer')
@endsection