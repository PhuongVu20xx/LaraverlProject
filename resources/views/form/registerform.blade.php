@extends('layouts.layout')
<!-- HEADER -->
@section('header')
    @include('layouts.header')
@endsection
<!-- CSS -->
@section('css')
    <link rel="stylesheet" href="{{asset('css/register-form.css')}}">
@endsection
<!-- REGISTER-FORM -->
@section('body')
<div id="container">
        <div class="row">
                <div class="col-xl-4 col-lg-8 col-sm-8" style="  padding-right: 0px;
                                                        border-left: 1px solid #ccc;
                                                        border-top: 1px solid #ccc;
                                                        border-bottom: 1px solid #ccc; 
                                                        padding-left: 0px;">
                    <div class="img">
                        <img src="{{asset('img/image-2.jpg')}}" alt="">
                    </div>
                </div>

                <div class="col-xl-4 col-lg-8 col-sm-8 " style="  border-right: 1px solid #ccc;
                                                        border-left: 1px solid #ccc;
                                                        border-top: 1px solid #ccc;
                                                        border-bottom: 1px solid #ccc;"> 
                    <form action="" id="form-group">
                        <p id="form-header">SIGN UP</p>
                        <div>
                            <p class="title">* First Name</p>
                            <input type="text" name="fname-input" class="form-input">
                        </div>
                        <div>
                            <p class="title">* Last Name</p>
                            <input type="text" name="lname-input" class="form-input">
                        </div>
                        <div>
                            <p class="title">* Email</p>
                            <input type="text" name="email-input" class="form-input">
                        </div>
                        <div>
                            <p class="title">* Password</p>
                            <input type="password" name="pass-input" class="form-input" >
                        </div>
  
                        <div>
                            <p class="title">* Mobile Number</p>
                            <input type="text" name="phonenumber" class="form-input">
                        </div>
                        
                       
                        <span id="mostro">Don't have a date yet? Enter your best guess.</span><br>
                        <span class="mos">* required field</span><br>
                        <span id="mostro1">
                            By clicking Submit, I agree that the information I provide to David’s 
                            Bridal will be used to create an account and will be subject to the David’s 
                            Bridal
                            <a href="#" style="text-decoration: underline;">Terms and Conditions</a> and 
                            <a href="#" style="text-decoration: underline;">Privacy Policy.</a>
                        </span>
                        <p></p>
                        <div>
                            <input type="submit" name="register" id="register" value="SUBMIT">
                        </div>
                    </form>
                </div>      
        </div>
    </div>
@endsection
<!-- FOOTER -->
@section('footer')
    @include('layouts.footer')
@endsection