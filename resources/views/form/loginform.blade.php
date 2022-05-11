@extends('layouts.layout')
<!-- HEADER -->
@section('header')
    @include('layouts.header')
@endsection 

<!-- CSS -->
@section('css')
    <link rel="stylesheet" href="{{asset('css/login-form.css')}}">
@endsection

<!-- LOGIN-FORM -->
@section('body')
    <div class="row" id="row-login">
        <div class="col-8">
            <form action="" class="form-group">
                <div class="form-header">Login</div>

                <div class="form-element">
                    <p class="content">* Email</p>
                    <input type="text" name="email" class="input-form">
                </div>

                <div class="form-element">
                    <p class="content">* Password</p>
                    <input type="text" name="password" class="input-form">
                </div>
                <div id="submit">
                    <input type="submit" class="form-submit" value="LOGIN">
                </div>
                <div id="forgot">
                    <a href="#">Forgot password?</a>
                </div>
            </form>
        </div>
    </div>
@endsection
<!-- FOOTER -->
@section('footer')
    @include('layouts.footer')
@endsection