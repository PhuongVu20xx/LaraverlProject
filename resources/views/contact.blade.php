@extends('layouts.layout')

@section('header')
@include('layouts.header2')
@endsection

@section('body')
<link rel="stylesheet" href="{{asset('css/contact.css')}}">
<div class="contact-thumbnail">
    <img src="{{asset('img/contact1.jpg')}}" alt="thumbnail">
    <div class="desc">Contact Us</div>
</div>
@endsection

@section('footer')
@include('layouts.footer2')
@endsection