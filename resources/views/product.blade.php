@extends('layouts.layout')

@section('header')
@include('layouts.header')
<div class="backgroundheader"></div>
@endsection

@section('menu')
<link rel="stylesheet" href="{{asset('css/product.css')}}">

{!! form::open('action') => 'SearchController@index','method'=>'GET']) !!}
<div class="form-group">
    <select name="sweet-grocery" id="sweet-grocery" class="form-control input-lg dynamic" data-dependent="state">
        <option value="">Sweet Grocery</option>
        @foreach($sweet_groceries as $sweet_grocery)
            <option value="">{{$sweet_grocery}}</option>
        @endforeach
    </select>

    <select name="salted-grocery" id="salted-grocery" class="form-control input-lg dynamic" data-dependent="state">
        <option value="">Salted Grocery</option>
    </select>
    
    <select name="fresh-food" id="fresh-food" class="form-control input-lg dynamic" data-dependent="state">
        <option value="">Fresh Food</option>
    </select>
    
    <select name="frorzen-food" id="frorzen-food" class="form-control input-lg dynamic" data-dependent="state">
        <option value="">Frozen Food</option>
    </select>
    
    <select name="bakery-pastry" id="bakery-pastry" class="form-control input-lg dynamic" data-dependent="state">
        <option value="">Bakery & Pastry</option>
    </select>
    
    <select name="beverage" id="beverage" class="form-control input-lg dynamic" data-dependent="state">
        <option value="">Beverage</option>
    </select>
    
    <select name="baby" id="baby" class="form-control input-lg dynamic" data-dependent="state">
        <option value="">Baby</option>
    </select>
    
    <select name="pet" id="pet" class="form-control input-lg dynamic" data-dependent="state">
        <option value="">Pet</option>
    </select>
    
    <select name="beauty-cosmetic" id="beauty-cosmetic" class="form-control input-lg dynamic" data-dependent="state">
        <option value="">Beauty & Cosmetic</option>
    </select>
    
    <select name="household" id="household" class="form-control input-lg dynamic" data-dependent="state">
        <option value="">Household</option>
    </select>
</div>
@endsection

@section('footer')
@include('layouts.footer')
@endsection