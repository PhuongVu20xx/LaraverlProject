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
<div class="shoppingcart">
<section>
        <div class="cart-container">
            <a href="#"><h1 class="font-weight-bold"><b>VNHP &ensp;|&ensp;Cart</b></h1></a>
        </div>
</section>
<!-- click -->
<div class="click">
  &ensp;<i class="fa-solid fa-truck-fast"></i>
  &ensp;<div>Click on the Coupon Code section at the bottom of the page to enjoy free shipping!</div>
</div>

<!-- cart -->
<section class="cart-product">
  <div>
    <div class="cart-product1">
      <div><h5><b>Product</b></h5></div>
      <div><h5><b>Unit Price</b></h5></div>
      <div><h5><b>Quantity</b></h5></div>
      <div><h5><b>Total Money</b></h5></div>
      <div><h5><b></b></h5></div>
    </div>
    <div class="cart-product2">
      <div><img src="{{asset('img/image-1.jpg')}}" alt="Garlic">&emsp; delicious cake</div>
      <div>$20.000</div>
      <div><input style="width: 40px;outline:none;" type="number" value="1" min="1"></div>
      <div><input style="width: 80px;" type="text" value="$20.000"></div>
      <div><a href="#">x</a></div>
    </div>
  </div>
    
</section>

<!-- voucher -->
<div class="gift">
  &emsp;<i class="fa-solid fa-gifts"></i>
  &emsp;<p>VNHP Voucher up to 15$ <b style="color: red;">New</b> &emsp;&emsp;<a href="#">View more voucher</a> </p>
</div>


<!-- image -->
<section>
    <div class="cart1">
      <div class="cart2">
        <div class="cart3">
          <img src="{{asset('img/image-1.jpg')}}" alt="Garlic">
            <div class="cart-item">
              <p><span>$20.00</span></p>
              <h1 style="font-weight: bold; font-size:18px;">delicious cake</h1>
            </div>
            <button>Add To Cart</button>
        </div>
        <div class="cart3">
          <img src="{{asset('img/image-2.jpg')}}" alt="Garlic">
            <div class="cart-item">
              <p><span>$20.00</span></p>
              <h1 style="font-weight: bold; font-size:18px;">delicious cake</h1>
            </div>
            <button>Add To Cart</button>
        </div>
        <div class="cart3">
          <img src="{{asset('img/image-3.jpg')}}" alt="Garlic">
            <div class="cart-item">
              <p><span>$20.00</span></p>
              <h1 style="font-weight: bold; font-size:18px;">delicious cake</h1>
            </div>
            <button>Add To Cart</button>
        </div>
      </div>
    </div>
</section>

<!-- checkpayment -->
<div>
        <div class="checkout">
            <ul>
                <li class="subtotal"><b>VNHP Voucher</b>
                    <span><a style="text-decoration: none;" href="#">Select Or Enter A Code</a></span>
                </li>
                <li class="cart-total"><b>Total Payment </b>
                <span>$20.00</span></li>
            </ul>
            <a href="#"class="proceed-btn">Proceed to Payment</a>
        </div>
    </div>
</div>
@endsection
<!-- FOOTER -->
@section('footer')
    @include('layouts.footer')
@endsection
