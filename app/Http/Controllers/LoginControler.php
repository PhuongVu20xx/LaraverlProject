<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\AdminControler;

class LoginControler extends Controller
{
    public function LoginInput(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');
        
        // switch (CheckEmail($email))
        // {
        //     case 0:
        //         return redirect()->action([UserControler::class,'LoginSuccess'],['email'=>$email,'password'=>$password]);
        //         break;
        //     case 1:
        //         return redirect()->action([AdminControler::class,'Loginsuccess'],['email'=>$email,'password'=>$password]);
        //         break;
        // }
    }
    
    public function CheckEmail($email)
    {
        //kết nối DB
        // check email xem là của user hay admin -> return 1 admin return 0 user
        return 0;
    }
}
