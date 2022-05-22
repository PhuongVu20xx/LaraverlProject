<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{
    public function getRegisterform(){
        return view('form.registerform');
    }
    public function postRegisterform(Request $request){
        $data = [
            'fullname'=> $request->firstname.' '.$request->lastname,
            'email'=> $request->email,
            'password'=> md5($request->password),
            'phonenumber'=> $request->phonenumber,
            'idtype'=>2
        ];
        DB::table('user')->insert($data);
        return redirect('/login')->with('msg', 'Đăng ký thành công !');

    }
}
