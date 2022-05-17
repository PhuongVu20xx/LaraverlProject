@extends('layouts.layout')

@section('header')
@include('layouts.header')
@endsection

@section('body')
<link rel="stylesheet" href="{{asset('css/about.css')}}">
<div class="about-thumbnail">
    <img src="{{asset('img/about1.jpg')}}" alt="thumbnail">
    <div class="desc">About Us</div>
</div>
<div class="about-story">
    <div class="title1">VNHP's Grocery</div>
    <div class="title2">OUR STORY</div>
    <br>
    <div class="content">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aspernatur molestias facere perferendis ea blanditiis officia aliquid dolore eligendi quae praesentium atque ducimus quis, inventore modi veniam accusantium rerum vero magnam repellat obcaecati. Nulla similique quos, culpa eaque suscipit eum commodi laudantium quibusdam dolorem iusto hic ipsam saepe exercitationem ea id!</div>
</div>
<div class="about-img"><img src="{{asset('img/about2.jpg')}}" alt="Our Store"></div>
<div class="about-founders">
    <div class="title1">Meet Our</div>
    <div class="title2">FOUNDERS</div>
    <br>
    <div class="founders-info">
        <div class="info-content">
            <div class="name"><a href="">Phong Van</a></div>
            <div class="position">VIP-MEMBER</div>
            <br>
            <div class="content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque voluptates pariatur, laboriosam eius ea minima.</div>
            <img src="{{asset('img/founder1.jpg')}}" alt="Founder 1">
        </div>
        <div class="info-content">
            <div class="name"><a href="#">Duc Nhan</a></div>
            <div class="position">LEADER</div>
            <br>
            <div class="content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque voluptates pariatur, laboriosam eius ea minima.</div>
            <img src="{{asset('img/founder2.jpg')}}" alt="Founder 2">
        </div>
        <div class="info-content">
            <div class="name"><a href="#">Thi Hanh</a></div>
            <div class="position">VIP-MEMBER</div>
            <br>
            <div class="content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque voluptates pariatur, laboriosam eius ea minima.</div>
            <img src="{{asset('img/founder3.jpg')}}" alt="Founder 3">
        </div>
        <div class="info-content">
            <div class="name"><a href="#">Xuan Phuong</a></div>
            <div class="position">MAIN</div>
            <br>
            <div class="content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque voluptates pariatur, laboriosam eius ea minima.</div>
            <img src="{{asset('img/founder4.jpg')}}" alt="Founder 4">
        </div>
    </div>
</div>
<div class="about-register">
    <div class="register-content">SPECIALS SIGN UP</div>
    <input type="email" name="email" id="email" placeholder="Enter your email">
    <a href="../register">SIGN-UP</a>
</div>
@endsection

@section('footer')
@include('layouts.footer')
@endsection