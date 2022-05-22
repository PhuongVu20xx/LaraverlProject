@extends('layouts.layout')

@section('header')
@include('layouts.header')
<div class="backgroundheader"></div>
@endsection

<!-- css -->
@section('css')
    <link rel="stylesheet" href="{{asset('css/blogmin.css')}}">
@endsection

@section('body')

    <div class="row">
        <div class="headerblog">
            <h4><a href="#">Home</a></h4>
            <p>/</p>
            <p>blog</p>
        </div>
    <div class="col-md-8 main">
    <form action="">
       <div class="blogmin">
           <div class="blogmin1">
               <h4>LEAVE A COMMENT</h4>
               <p>Your email address will not be published. Required fields are marked *</p>
           </div>
           <div class="blogmin2">
               <div class="input1"><input type="text" name="comment" placeholder="Comment..."><br></div>
               <div class="input2"><input type="text" name="email" placeholder="Email*"><br></div>
           </div>
           <div>
               <button type="submit">Post comment</button>
               <!-- phai dang nhap moi duoc submit  -->
           </div>
       </div>
   </form>
    </div>
    @include('layouts.sidebar')
    </div>

   
@endsection



@section('footer')
@include('layouts.footer')
@endsection