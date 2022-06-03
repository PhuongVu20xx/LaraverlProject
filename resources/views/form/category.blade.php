@extends('layouts.layout')

<!-- HEADER -->
@section('header')
    @include('layouts.header')
    <div class="backgroundheader"></div>
@endsection
<!-- CSS -->
@section('css')
    <link rel="stylesheet" href="{{asset('css/category.css')}}">
@endsection

@section('body')
<form action="">
    <h5>Add Category</h5>
    <div class="category">
        <p class="p1">Sub_category Name &emsp;<input type="text" name="sub" placeholder="import"></p>
        <p class="p2">Category Root &emsp; <input type="text" name="choose" placeholder="choose"></p>
        <p class="p3">Status <input type="text" name="status" placeholder="status"></p>
        <button class="submit" type="submit" class="button1"> Submit</button>
    </div>
</form>

@endsection

@section('footer')
@include('layouts.footer')
@endsection