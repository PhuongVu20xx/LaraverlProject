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
            'email'=>'required',
            'password'=>'required|min:3|max:16'
        ],[
            'email.required' => 'Bạn chưa nhập email !!!',
            'password.required' => 'Bạn chưa nhập password !!!',
            'password.min' => 'Password không được nhỏ hơn 3 ký tự',
            'password.max' => 'Password không được lớn hơn 16 ký tự'
        ]);
        $email = $request->email;
        $password = bcrypt($request->password);
        
        $SQLuser = DB::table('user')->where('email',$email)->get()->toArray();

        foreach($SQLuser as $customer){
            if($customer->password=$password){
                if($customer->idtype==2){   
                    return view('landingpage');
                }else{  
                    return view('controller');  
                }
            }else{
                return redirect('login')->with('thongbao', 'Login Fail !!!');

            }
        }

        
        // if(Auth::attempt(['user'=>$user, 'password'=>$password])){

        //         return view('langdingpage', $user);
        //         // return redirect('admin.controller');
        // }else{
        //         return view('form.loginform')->with('thongbao', 'Login Fail !!!');
        // }     
}}

