@extends('user.layout.userlayout')
<!-- HEADER -->
@section('header')
@include('user.layout.header')
<div class="backgroundheader"></div>
@endsection

<!-- CSS -->
@section('css')
<link rel="stylesheet" href="{{asset('css/user/pages/cart.css')}}">
@endsection

<!-- BODY -->
@section('body')
<div class="shoppingcart">
    <section>
        <div class="cart-container">
            <a href="#">
                <h1 class="font-weight-bold"><b>VNHP &ensp;|&ensp;Cart</b></h1>
            </a>
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
                <div>
                    <h5><b>Product</b></h5>
                </div>
                <div>
                    <h5><b>Unit Price</b></h5>
                </div>
                <div>
                    <h5><b>Quantity</b></h5>
                </div>
                <div>
                    <h5><b>Total</b></h5>
                </div>
                <div>
                    <h5><b></b></h5>
                </div>
            </div>
            <div class="cart-product2">
                <div><img src="{{asset('img/image-1.jpg')}}" alt="Garlic">&emsp; delicious cake</div>
                <div>20</div>
                <div><input style="width: 40px;outline:none;"  type="number" value="1" min="1"></div>
                <div>20</div>
                <div><a href="#">x</a></div>
            </div>
        </div>

    </section>

    <!-- voucher -->
    <div class="gift">
        &emsp;<i class="fa-solid fa-gifts"></i>
        &emsp;<p>VNHP Voucher up to 15$ <b>New</b> &emsp;&emsp;<a href="#">View more voucher</a> </p>
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
         <!-- checkpayment -->
    <div>
        <div class="checkout">
            <ul>
                <li id="sub-total"  class="subtotal"><b>Subtotal</b>
                    <span>$20.00</span>
                </li>
                <li id="total-payment" class="cart-total"><b>Total Payment </b>
                    <span>$20.00</span>
                </li>
            </ul>
            <a href="#" class="proceed-btn">Proceed to Payment</a>
        </div>
    </div>

</div>
    </section>

   
@endsection
<!-- FOOTER -->
@section('footer')
@include('user.layout.footer')
@endsection

<!-- JAVASCRIPT -->
@section('scripts')
<script>
const item = [{
        name: 'piza 001',
        price: 6.9,
        quantity: 1
    },
    {
        name: 'piza 002',
        price: 6.9,
        quantity: 1
    },
    {
        name: 'piza 003',
        price: 6.9,
        quantity: 1
    }
]

function render(){
  let subtotal = 0;
  items.forEach(item => {
    subtotal += item.quantity + item.price
  })
  const total = subtotal 

 
}



</script>
@endsection