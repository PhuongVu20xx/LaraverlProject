@extends('layouts.layout')

<!-- HEADER -->
@section('header')
    @include('layouts.header')
    <div class="backgroundheader"></div>
@endsection
<!-- CSS -->
@section('css')
    <link rel="stylesheet" href="{{asset('css/profile.css')}}">

@endsection
<!-- BODY -->
@section('body')
<div class="container-xl px-4 mt-4">
    <hr class="mt-0 mb-4">
    <div class="row">
        <div class="col-xl-4">
            <!-- Profile picture card-->
            <div class="card mb-4 mb-xl-0">
                <div class="card-header">Profile Picture</div>
                <div class="card-body text-center">
                    <!-- Profile picture image-->
                    <img class="img-account-profile rounded-circle mb-2" src="{{asset('img/founder2.jpg')}}" alt="">
                    <!-- Profile picture help block-->
                    <div class="small font-italic text-muted mb-4">JPG or PNG no larger than 5 MB</div>
                    <!-- Profile picture upload button-->
                    <button class="btn btn-primary" type="button">Upload new image</button>
                </div>
            </div>
            <div class="card mt-2">
                <a href="#change-pwd" class="change-pwd">Change Password</a>
            </div>
        <!-- CHANGE PASSWORD -->
        </div>
        <div class="col-xl-8" id="change-pwd">
            <div class="card mb-4">
                <div class="card-header">Change Password</div>
                <div class="card-body">
                    <form action="">
                        <div class="mb-3">
                            <label class="small mb-1" for="currentpwd">Current Password</label>
                            <input class="form-control" id="currentpwd" type="password">
                        </div>
                        <div class="mb-3">
                            <label class="small mb-1" for="newpwd">New Password</label>
                            <input class="form-control" id="newpwd" type="password">
                        </div>
                        <div class=" mb-3">
                            <label class="small mb-1" for="confirmnewpwd">Confirm New Password</label>
                            <input class="form-control" id="confirmnewpwd" type="password">
                        </div>
                        <div>
                            <button class="btn btn-primary" type="submit">Change Password</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- ACCOUNT DETAIL -->
        <div class="col-xl-8" id="account-detail">
            <!-- Account details card-->
            <div class="card mb-4">
                <div class="card-header">Account Details</div>
                <div class="card-body">
                    <form>
                        <!-- Form Group (username)-->
                        <div class="mb-3">
                            <label class="small mb-1" for="inputUsername">Rank</label>
                            <input class="form-control" id="inputUsername" type="text" value="Platinum" disabled>
                        </div>
                        <!-- Form Row-->
                        <div class="row gx-3 mb-3">
                            <!-- Form Group (first name)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputFirstName">First name</label>
                                <input class="form-control" id="inputFirstName" type="text" placeholder="Enter your first name" value="Valerie" disabled>
                            </div>
                            <!-- Form Group (last name)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputLastName">Last name</label>
                                <input class="form-control" id="inputLastName" type="text" placeholder="Enter your last name" value="Luna" disabled>
                            </div>
                        </div>
                        <!-- Form Row        -->
                        <div class="row gx-3 mb-3">
                            <!-- Form Group (organization name)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputOrgName">Organization name</label>
                                <input class="form-control" id="inputOrgName" type="text" placeholder="Enter your organization name" value="Start Bootstrap">
                            </div>
                            <!-- Form Group (location)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputLocation">Location</label>
                                <input class="form-control" id="inputLocation" type="text" placeholder="Enter your location" value="San Francisco, CA">
                            </div>
                        </div>
                        <!-- Form Group (email address)-->
                        <div class="mb-3">
                            <label class="small mb-1" for="inputEmailAddress">Email address</label>
                            <input class="form-control" id="inputEmailAddress" type="email" placeholder="Enter your email address" value="name@example.com" disabled>
                        </div>
                        <!-- Form Row-->
                        <div class="row gx-3 mb-3">
                            <!-- Form Group (phone number)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputPhone">Phone number</label>
                                <input class="form-control" id="inputPhone" type="tel" placeholder="Enter your phone number" value="555-123-4567">
                            </div>
                            <!-- Form Group (birthday)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputBirthday">Birthday</label>
                                <input class="form-control" id="inputBirthday" type="text" name="birthday" placeholder="Enter your birthday" value="06/10/1988">
                            </div>
                        </div>
                        <!-- Save changes button-->
                        <button class="btn btn-primary" type="submit">Save changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


<!-- FOOTER -->
@section('footer')
    @include('layouts.footer')
@endsection