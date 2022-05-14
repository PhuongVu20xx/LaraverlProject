<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{  
    public function FeedbackPage()
    {
        return view('admin.feedback');
    }

    public function CustomerPage()
    {
       return view('admin.customer');
    }

    public function LatestOrderPage()
    {
        return view('admin.lastestorder');
    }
    public function ControllerPage()
    {
        return view('admin.controller');
    }

    public function LoginInput(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');
        
        return redirect()->action([AdminController::class,'Loginsuccess']);
    }
    public function LoginSuccess()
    {
        return view('admin.infomation');
    }
}
