@extends('layouts.layout')

@section('header')
@include('layouts.header')
@endsection

@section('menu')
@include('admin.navigator')
@endsection

@section('content')
<div>
    <h3>Controler</h3>
</div>
<div>
    <button>Add Product</button>
    <button>Add category</button>
    <button>Delete Product</button>
    <button>Check bill</button>
</div>
@endsection

@section('footer')
@include('layouts.footer')
@endsection

