@extends('layouts.layout')
<!-- HEADER -->
@section('header')
    @include('layouts.header')
@endsection


<!-- CSS -->    
@section('css')
    <link rel="stylesheet" href="{{asset('css/register-form.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
@endsection

<!-- REGISTER-FORM -->
@section('body')
<div id="container">
        <div class="row">
            <div class="col-2"></div>
                <div id="img" class="col-lg-4 col-md-8 col-xs-8"></div>
                <div class="col-lg-4 col-md-8 col-xs-8 " style="  border-right: 1px solid #ccc;
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
            <div class="col-2"></div>
        </div>
    </div>
@endsection

<!-- FOOTER -->
@section('footer')
    @include('layouts.footer')
@endsection