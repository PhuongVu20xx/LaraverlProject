@extends('layouts.layout')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/admin/adminnavigatortab.css') }}">
    <link rel="stylesheet" href="{{asset('css/admin/category.css')}}">
@endsection

@section('header')
    @include('layouts.header')
    <div class="backgroundheader"></div>
@endsection

@section('menu')
    @include('admin.menu')
@endsection

@section('bodyheader')
    <div>
        <h3>Controller / Category</h3>
        <hr>
    </div>
@endsection

@section('bodynav')
    <div class="col-sm-12">
        <ul class="nav nav-tabs">
            <li><a class="text-decoration-none" href="/addcategory" data-toggle="tab">Add Category</a></li>
            <li><a class="text-decoration-none" href="/allcategory" data-toggle="tab">All Category</a></li>
            <li><a class="text-decoration-none" href="/editcategory" data-toggle="tab">Edit Category</a></li>
        </ul>
    </div>
@endsection

@section('bodycontent')
abcd xyz gì đó

@endsection

@section('footer')
@include('layouts.footer')
@endsection
