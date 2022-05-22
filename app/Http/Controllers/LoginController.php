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
        $password = md5($request->password);
        
        $SQLuser = DB::table('user')->where('password',$password)
                                    ->where('email',$email)
                                    ->where('idtype',2)
                                    ->get();
        $SQLadmin = DB::table('user')->where('password',$password)
                                    ->where('email',$email)
                                    ->where('idtype',1)
                                    ->get();     
                                    
        // USER
        if(count($SQLuser)>0){ 
            return redirect()->route('landingpage');
        }else{  
            return redirect()->back()->withInput();  
        }
        // ADMIN 
        if(count($SQLadmin)>0){ 
            return redirect()->route('controller');
        }else{  
            return redirect()->back()->withInput();  
        }
  

        
        // if(Auth::attempt(['user'=>$user, 'password'=>$password])){

        //         return view('langdingpage', $user);
        //         // return redirect('admin.controller');
        // }else{
        //         return view('form.loginform')->with('thongbao', 'Login Fail !!!');
        // }     
}}