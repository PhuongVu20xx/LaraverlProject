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
<div>
@foreach ($admins as $admin )

    <div class="container-xl px-4 mt-4">
        <hr class="mt-0 mb-4">
        <div class="row">
            <div class="col-xl-4">
                <form action="profile" method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}
                <!-- Profile picture card-->
                <div class="card mb-4 mb-xl-0">
                    <div class="card-header">Profile Picture</div>
                    <div class="card-body text-center">
                        <!-- Profile picture image-->
                        <img class="img-account-profile rounded-circle mb-2" src="{{asset('upload/default-profile.jpg')}}" alt="">
                        <!-- Profile picture help block-->
                        <div class="small font-italic text-muted mb-4">JPG or PNG no larger than 5 MB</div>
                        <!-- Profile picture upload button-->
                        <input type="file" name="avatar">
                    </div>
                </div>
                <div class="card mt-2">
                    <span class="btn btn-primary" id="changepwd">Change Password</span>
                </div>
            </div>

            <!-- ACCOUNT DETAIL -->
            <div class="col-xl-8" id="account-detail">
                <!-- Account details card-->
                <div class="card mb-4">
                    <div class="card-header">Account Details</div>
                    <div class="card-body">

                            <!-- Form Group (username)-->
                            <div class="mb-3">
                                <label class="small mb-1" for="fullname">Full Name</label>
                                <input class="form-control" id="fullname" value="{{ $admin->emp_name }}" type="text">
                            </div>
                            <!-- Form Row-->
                            <div class="row gx-3 mb-3">
                                <!-- Form Group (gender)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="gender">Gender</label>
                                    <input class="form-control" id="gender" type="text"  >
                                </div>
                                <!-- Form Group (Birthday)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="birthday">Birthday</label>
                                    <input class="form-control" id="birthday" type="date" name="birthday" placeholder="Enter your birthday" value="">
                                </div>

                            </div>
                            <!-- Form Row-->
                            <div class="row gx-3 mb-3">
                                <!-- Form Group (Position)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="position">Position</label>
                                    <input class="form-control" id="position" type="text"  value="" disabled>
                                </div>
                                <!-- Form Group (Depatment)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="depatment">Depatment</label>
                                    <input class="form-control" id="depatment" type="text"  disabled>
                                </div>
                            </div>
                            <!-- Form Group (email address)-->
                            <div class="mb-3">
                                <label class="small mb-1" for="email">Email address</label>
                                <input class="form-control" id="email" name="email" type="email" value="{{ $admin->emp_email }}" disabled>
                            </div>
                            <!-- Form Row-->
                            <div class="row gx-3 mb-3">
                                <!-- Form Group (phone number)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="phonenumber">Phone number</label>
                                    <input class="form-control" id="phonenumber" type="tel"  value="">
                                </div>
                                <!-- Form Group (Addrees)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="addrees">Addrees</label>
                                    <input class="form-control" id="addrees" type="text" name="addrees" >
                                </div>
                            </div>
                            <!-- Save changes button-->
                            <button class="btn btn-primary" type="submit">Save changes</button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- CHANGE PASSWORD -->
            <div class="col-xl-8" id="changepwdform" style="display:none">
                <div class="card mb-4">
                    <div class="card-header">Change Password <span class="btn" id="close" style="float: right;">Back</span></div>
                    <div class="card-body">
                        @if(session('thongbao'))
                            <div class="alert alert-success">
                                {{session('thongbao')}}
                            </div>
                        @endif
                        <form action="/changepwd" method="POST">
                            {{csrf_field()}}
                            <div class="mb-3" hidden>
                                <label class="small mb-1" for="hiddenemail">Email</label>
                                <input class="form-control" id="hiddenemail" name="hiddenemail" type="email" value="{{ $admin->emp_email }}">
                            </div>
                            <div class="mb-3">
                                <label class="small mb-1" for="currentpwd">Current Password</label>
                                <input class="form-control" id="currentpwd" name="currentpwd" value="{{ $admin->emp_pwd }}" type="password">
                            </div>
                            <div class="mb-3">
                                <label class="small mb-1" for="newpwd">New Password</label>
                                <input class="form-control" id="newpwd" name="newpwd" type="password">
                            </div>
                            <div class=" mb-3">
                                <label class="small mb-1" for="confirmpwd">Confirm New Password</label>
                                <input class="form-control" id="confirmpwd" name="confirmpwd" onkeyup="checkpwd();" type="password">
                                <div id="alert"></div>
                            </div>
                            <div>
                                <button class="btn btn-primary" id="changepwd-btn" type="submit" disabled>Change Password</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection


<!-- FOOTER -->
@section('footer')
    @include('layouts.footer')
@endsection

<!-- JAVASCRIPT -->
@section('scripts')
    <script src="{{asset('js/profile.js')}}"></script>
@endsection
