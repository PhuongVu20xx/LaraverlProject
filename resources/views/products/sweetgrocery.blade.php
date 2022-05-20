@extends('layouts.layout')

@section('header')
@include('layouts.header')
<div class="backgroundheader"></div>
@endsection

@section('body')
<link rel="stylesheet" href="{{asset('css/product/sweetgrocery.css')}}">
<div class="breadcrumbs">
    <div class="breadcrumbs-container">
        <ul>
            <li><a href="../product">HOME</a></li>
        </ul>
    </div>
</div> 

<section class="col-lg-12">
    <div class="product-container">
        <div class="row">
            <div class="col-lg-3 col-md-3 order-1 col-left-sidebar">
                <div class="product-menu-container">
                </div>
            </div>

            <div class="col-lg-9 col-md-9 order-2 col-right-main">
                <div class="product-content-container">
                    <div class="toolbar-top">
                        <span class="title-home-page">FEATURED PRODUCT</span>

                        <div class="toolbar-sorter">
                            <label for="sorter" class="sorter-label">Sort By</label>
                            <select id="sorter" data-role="sorter" class="sorter-option">
                                <option value="name" selected="selected">Product</option>
                                <option value="price">Price</option>
                                <option value="weight">Weight</option>
                            </select>
                        </div>

                        <div class="toolbar-limiter">
                            <label for="limiter" class="label">
                                <span>Show</span>
                            </label>
                        
                            <div class="control">
                                <select id="limiter" data-role="limiter" class="limiter-options">
                                    <option value="12">12</option>
                                    <option value="24" selected="selected">24</option>
                                    <option value="36">36</option>
                                </select>
                            </div>
                                <span class="limiter-text">per page</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('footer')
@include('layouts.footer')
@endsection