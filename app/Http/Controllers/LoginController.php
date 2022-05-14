<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Auth;

class LoginControler extends Controller
{

    public function getLoginform(){
        return view('form.loginform');
    }

    public function postLoginform(Request $request){

        $this->validate($request,[
            'email'=>'required',
            'password'=>'required|min:8|max:16'
        ],[
            'email.required' => 'Bạn chưa nhập email !!!',
            'password.required' => 'Bạn chưa nhập password !!!',
            'password.min' => 'Password không được nhỏ hơn 8 ký tự',
            'password.max' => 'Password không được lớn hơn 16 ký tự'
        ]);
        $email['info'] = $request->email;
        $password = $request->password;

        if(Auth::attempt(['email'=>$email, 'password'=>$password])){
            if($email == 'user' && $password == '123456789'){
                return redirect('langdingpage', $email);

            }elseif($email == 'admin' && $password == '123456789'){
                return redirect('admin.controller');

            }else{
                return redirect('form.loginform')->with('thongbao', 'Login Fail !!!');
            }     
        }
    }
}