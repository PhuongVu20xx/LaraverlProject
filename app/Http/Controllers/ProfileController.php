<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function getProfileForm(){
        return view('user.profile');
    }

    public function postProfileForm(Request $request){
        $email = $request->email;
        $avatar = $request->file('avatar');
        $avatarPath = $avatar->move('upload', $avatar->getClientOriginalName());

        // DB::table('user')->where('email',$email)->update(['image_name' => $avatarPath]);
    }

    public function postNewPassword(Request $request){
        $hiddenemail = $request->hiddenemail;
        $currentpwd = md5($request->currentpwd);
        $newpwd = md5($request->newpwd);

        // DB::select( "call sp_change_password_by_email($hiddenemail,$newpwd,$currentpwd)");
        DB::table('user')->where('email', $hiddenemail)
                        ->where('password', $currentpwd)
                        ->update(['password' => $newpwd]);  
        return redirect()->back()->withInput()->with('thongbao','Changed Password Successfully!');

    }      
}

