@extends('layouts.adminlayout')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/admin/adminnavigatortab.css') }}">
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
        <h3>Home Controller</h3>
        <hr>
    </div>
@endsection

@section('bodynav')
    
@endsection

@section('bodycontent')
    abcd xyz gì gì đó nha
@endsection

@section('footer')
    @include('layouts.footer')
@endsection
