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
        <h3>Controller / Product</h3>
        <hr>
    </div>
@endsection

@section('bodynav')
    <div class="col-sm-12">
        <ul class="nav nav-tabs">
            <li><a class="text-decoration-none" href="/addproduct" data-toggle="tab">Add Product</a></li>
            <li><a class="text-decoration-none" href="/editproduct" data-toggle="tab">Edit Product</a></li>
            <li><a class="text-decoration-none" href="/allproduct" data-toggle="tab">All Product</a></li>
            <li><a class="text-decoration-none" href="/importproduct" data-toggle="tab">Import Product</a></li>
            <li><a class="text-decoration-none" href="/importstock" data-toggle="tab">Import Stock</a></li>
        </ul>
    </div>
@endsection

@section('bodycontent')
abcd xyz gì đó

@endsection

@section('footer')
@include('layouts.footer')
@endsection