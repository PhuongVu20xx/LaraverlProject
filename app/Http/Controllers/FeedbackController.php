<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function FeedbackPage()
    {
        return view(NameController::$ADMIN_FEEDBACK);
    }

}