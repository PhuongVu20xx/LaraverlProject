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
        <h3>Controller</h3>
        <hr>
    </div>
@endsection

@section('bodynav')
    @include('admin.controllers.navigator')
@endsection

@section('bodycontent')
    
@endsection

@section('footer')
    @include('layouts.footer')
@endsection
