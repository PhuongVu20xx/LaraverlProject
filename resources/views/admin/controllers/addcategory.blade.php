@extends('layouts.layout')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/adminnavigatortab.css') }}">
@endsection

@section('header')
    @include('layouts.header')
    <div class="backgroundheader"></div>
@endsection

@section('menu')
    @include('admin.navigator')
@endsection

@section('bodyheader')
    <div>
        <h3>Add Category</h3>
        <hr>
    </div>
@endsection

@section('bodynav')
    @include('admin.controllers.navigator')
@endsection

@section('bodycontent')
    <div>
        <form action="/addcategory" method="post">
            <div>
                Name category: <input type="text" id="name" class="name">
                <input type="submit" id="submit" class="submit" value="Submit">
            </div>
        </form>
    </div>
@endsection

@section('footer')
    @include('layouts.footer')
@endsection
