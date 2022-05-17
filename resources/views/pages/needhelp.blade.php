@extends('layouts.layout')

@section('header')
@include('layouts.header')
<div class="backgroundheader"></div>
@endsection

@section('body')
<link rel="stylesheet" href="{{asset('css/needhelp.css')}}">
<script src="https://kit.fontawesome.com/8b058784b8.js" crossorigin="anonymous"></script>
<section class="needhelp">
    <div class="menu-container">
        <ul>
            <li id="service-policy">
                <a href="#service-policy">
                    <i class="fa-brands fa-servicestack"></i>
                    <span>Services & Policies</span>
                    <i class="fa fa-angle-right"></i>
                </a>
                <ul>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#loyalty-program">Loyalty Program</a></li>
                    <li><a href="#payment-methods">Payment Methods</a></li>
                    <li><a href="#return-refund">Return & Refund Policy</a></li>
                    <li><a href="#delivery">Delivery Policy</a></li>
                    <li><a href="#faq">FAQ</a></li>
                </ul>
            </li>
        </ul>

        <ul>
            <li id="legal">
                <a href="#legal">
                    <i class="fa-solid fa-gavel"></i>
                    <span>Legal</span>
                    <i class="fa fa-angle-right"></i>
                </a>
                <ul>
                    <li><a href="#terms-conditions">Terms & Conditions</a></li>
                    <li><a href="#privacy">Privacy Policy</a></li>
                </ul>
            </li> 
        </ul>
    </div>

    <div class="content-container">
        <h1>VHHP'S HELP</h1>
        <div id="services">
            <div class="title">Services</div>
            <div>
                <ul>
                    <li><h5>Door-To-Door Delivery</h5></li>
                    <li><p>We offer great customer services to make your shopping experience more enjoyable and convenient. Free delivery for a bill from 1,000,000 VND with shipping distance of 10km and below.</p></li>
                    <li><p>XCLUSIVE BENEFITS for Diamond customers.</p></li>
                    <li><p>Free delivery regardless of bill values within Ho Chi Minh city.</p></li>
                </ul>
            </div>
        </div>

        <div id="loyalty-program">
            <div class="title">Loyalty Program</div>
            <img src="#" alt="">
        </div>

        <div id="payment-methods">
            <div class="title">Payment Methods</div>
            <div>
                <ul>
                    <li><p>- Step 1:  Select the product you want to buy => Click cart icon or “Add to cart”.</p></li>
                    <li><p>- Step 2: After choosing items, please check price and quantity of items carefully before clicking “Process to check out”.</p></li>
                    <li><p>- Step 3: Fulfill necessary information of order form.</p></li>
                    <li><p>- Step 4: Choose the “Shipping method”. Then we offer you  the following payment methods:</p></li>
                    <li><p>a. Credit card on delivery: pay directly to the shipper when you receive the product.</p></li>
                    <li><p>b. Transfer by bank/ATM before your order is shipped.</p></li>
                </ul>
            </div>
        </div>

        <div id="return-refund">
            <div class="title">Return & Refund Policy</div>
            <div>
                <ul>
                    <li><p>- Step 1:  Select the product you want to buy => Click cart icon or “Add to cart”.</p></li>
                    <li><p>- Step 2: After choosing items, please check price and quantity of items carefully before clicking “Process to check out”.</p></li>
                    <li><p>- Step 3: Fulfill necessary information of order form.</p></li>
                    <li><p>- Step 4: Choose the “Shipping method”. Then we offer you  the following payment methods:</p></li>
                    <li><p>a. Credit card on delivery: pay directly to the shipper when you receive the product.</p></li>
                    <li><p>b. Transfer by bank/ATM before your order is shipped.</p></li>
                </ul>
            </div>
        </div>

        <div id="delivery">
            <div class="title">Delivery Policy</div>
            <div>
                <ul>
                    <li><p>- Step 1:  Select the product you want to buy => Click cart icon or “Add to cart”.</p></li>
                    <li><p>- Step 2: After choosing items, please check price and quantity of items carefully before clicking “Process to check out”.</p></li>
                    <li><p>- Step 3: Fulfill necessary information of order form.</p></li>
                    <li><p>- Step 4: Choose the “Shipping method”. Then we offer you  the following payment methods:</p></li>
                    <li><p>a. Credit card on delivery: pay directly to the shipper when you receive the product.</p></li>
                    <li><p>b. Transfer by bank/ATM before your order is shipped.</p></li>
                </ul>
            </div>
        </div>

        <div id="faq">
            <div class="title">FAQ</div>
            <div>
                <ul>
                    <li><p>- Step 1:  Select the product you want to buy => Click cart icon or “Add to cart”.</p></li>
                    <li><p>- Step 2: After choosing items, please check price and quantity of items carefully before clicking “Process to check out”.</p></li>
                    <li><p>- Step 3: Fulfill necessary information of order form.</p></li>
                    <li><p>- Step 4: Choose the “Shipping method”. Then we offer you  the following payment methods:</p></li>
                    <li><p>a. Credit card on delivery: pay directly to the shipper when you receive the product.</p></li>
                    <li><p>b. Transfer by bank/ATM before your order is shipped.</p></li>
                </ul>
            </div>
        </div>

        <div id="terms-conditions">
            <div class="title">Terms & Conditions</div>
            <div>
                <ul>
                    <li><p>- Step 1:  Select the product you want to buy => Click cart icon or “Add to cart”.</p></li>
                    <li><p>- Step 2: After choosing items, please check price and quantity of items carefully before clicking “Process to check out”.</p></li>
                    <li><p>- Step 3: Fulfill necessary information of order form.</p></li>
                    <li><p>- Step 4: Choose the “Shipping method”. Then we offer you  the following payment methods:</p></li>
                    <li><p>a. Credit card on delivery: pay directly to the shipper when you receive the product.</p></li>
                    <li><p>b. Transfer by bank/ATM before your order is shipped.</p></li>
                </ul>
            </div>
        </div>

        <div id="privacy">
            <div class="title">Privacy Policy</div>
            <div>
                <ul>
                    <li><p>- Step 1:  Select the product you want to buy => Click cart icon or “Add to cart”.</p></li>
                    <li><p>- Step 2: After choosing items, please check price and quantity of items carefully before clicking “Process to check out”.</p></li>
                    <li><p>- Step 3: Fulfill necessary information of order form.</p></li>
                    <li><p>- Step 4: Choose the “Shipping method”. Then we offer you  the following payment methods:</p></li>
                    <li><p>a. Credit card on delivery: pay directly to the shipper when you receive the product.</p></li>
                    <li><p>b. Transfer by bank/ATM before your order is shipped.</p></li>
                </ul>
            </div>
        </div>
    </div>
</section>
@endsection

@section('footer')
@include('layouts.footer')
@endsection