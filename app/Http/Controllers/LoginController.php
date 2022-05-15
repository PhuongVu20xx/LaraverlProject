<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class LoginController extends Controller
{

    public function getLoginform(){
        return view('form.loginform');
    }

    public function postLoginform(Request $request){

        $this->validate($request,[
            'user'=>'required',
            'password'=>'required|min:8|max:16'
        ],[
            'user.required' => 'Bạn chưa nhập username !!!',
            'password.required' => 'Bạn chưa nhập password !!!',
            'password.min' => 'Password không được nhỏ hơn 8 ký tự',
            'password.max' => 'Password không được lớn hơn 16 ký tự'
        ]);
        $user['info'] = $request->user;
        $password = $request->password;

        if(Auth::attempt(['user'=>$user, 'password'=>$password])){

                return view('langdingpage', $user);
                // return redirect('admin.controller');
        }else{
                return view('form.loginform')->with('thongbao', 'Login Fail !!!');
        }     
    }
}
