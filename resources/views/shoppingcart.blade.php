@extends('layouts.layout')
<!-- HEADER -->
@section('header')
    @include('layouts.header')
@endsection

<!-- CSS -->
@section('css')
    <link rel="stylesheet" href="{{asset('css/cart.css')}}">
@endsection

<!-- BODY -->
@section('body')
<div id="app">
  <div id="product">
    <item v-for="item in items" v-bind:item_data="item"></item>
  </div>
  <div id="cart">
    <div id="head">
      <h3>Shopping Cart</h3>
      <div id="price">Price</div>
      <div id="quantity">Quantity</div>
      <div id="total">Total</div>
    </div>
    <buyitem v-for="buyitem in buyitems" v-bind:buy_data="buyitem"></buyitem>
    <h5 v-if="total()">Sum: $ 55</h5>
  </div>
</div>


<template id="product-box">
  <div class="box">
    <img :src="item_data.img"/>
    <i class="fa fa-plus" v-on:click="addItem(item_data)"></i>
    <h2>55</h2>
    <p>$55</p>
  </div>
</template>

<template id="buy-box">
  <div class="row">
    <img :src="buy_data.img"/>
    <h4>55</h4>
    <p>55</p>
    <div class="qty-minus" v-on:click="minusQty(buy_data)">-</div>
    <div class="qty">55</div>
    <div class="qty-plus" v-on:click="plusQty(buy_data)">+</div>
    <div class="del" v-on:click="removeItem(buy_data)">Remove</div>
    <div class="totalprice">55</div>
  </div>
</template>
@endsection

<!-- FOOTER -->
@section('footer')
    @include('layouts.footer')
@endsection