@extends('layouts.layout')
@section('header')
@include('layouts.header')
<div class="navigation">
    <div class="background"></div>
        <div class="nav-container">
            <a href="#">Home</a>
            <a href="#">About</a>
            <a href="#">Category</a>
            <a href="#">Shipping</a>
            <a href="#">Feedback</a>
        </div>   
    </div>
</div>
@endsection
@section('footer')
@include('layouts.footer')
@endsection
@section('css')
    <link rel="stylesheet" href="{{asset('css/header.css')}}">
    <link rel="stylesheet" href="{{asset('css/footer.css')}}">
@endsection
