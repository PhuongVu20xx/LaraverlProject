<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminControler extends Controller
{  
    public function LoginInput(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');
        
        return redirect()->action([AdminControler::class,'Loginsuccess']);
    }

    public function LoginSuccess()
    {
        return view('admin.admin');
    }
}
