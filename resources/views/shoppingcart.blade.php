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

<section>
        <div class="cart-container">
            <h1 class="font-weight-bold"><b>VNHP &ensp;|&ensp;Cart</b></h1>
            <input style="width: 400px;" type="text" name="seach" placeholder="MEMBERSHIP GIFT 5 MILLION ">
        </div>
</section>
<div class="click">
  &ensp;<i class="fa-solid fa-truck-fast"></i>
  &ensp;<p>Click on the Coupon Code section at the bottom of the page to enjoy free shipping!</p>
</div>

<!-- cart -->
<section class="cart">
  <form action="">
    <table>
      <thead>
        <tr>
          <th><b>Product</b></th>
          <th><b>Unit Price</b></th>
          <th><b>Quantity</b></th>
          <th><b>Choose</b></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td style="display: flex;align-items:center;"><img src="{{asset('img/image-1.jpg')}}" alt="Garlic">delicious cake</td>
          <td><p><span>$20.000</span></p></td>
          <td><input style="width: 40px;outline:none;" type="number" value="1" min="1"></td>
          <td style="cursor: pointer;">Delete</td>
        </tr>
        <tr>
          <td style="display: flex;align-items:center;"><img src="{{asset('img/image-2.jpg')}}" alt="Garlic">delicious cake</td>
          <td><p><span>$20.000</span></p></td>
          <td><input style="width: 40px;outline:none;" type="number" value="1" min="1"></td>
          <td style="cursor: pointer;">Delete</td>
        </tr>
        <tr>
          <td style="display: flex;align-items:center;"><img src="{{asset('img/image-3.jpg')}}" alt="Garlic">delicious cake</td>
          <td><p><span>$20.000</span></p></td>
          <td><input style="width: 40px;outline:none;" type="number" value="1" min="1"></td>
          <td style="cursor: pointer;">Delete</td>
        </tr>
      </tbody>
    </table>
  </form>
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
                    <span><a href="#">Select Or Enter A Code</a></span>
                </li>
                <li class="cart-total"><b>Total Payment </b>
                <span>$20.00</span></li>
            </ul>
            <a href="#"class="proceed-btn">Proceed to Payment</a>
        </div>
    </div>
@endsection

<!-- FOOTER -->
@section('footer')
    @include('layouts.footer')
@endsection
