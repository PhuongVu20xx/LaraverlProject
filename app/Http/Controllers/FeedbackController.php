<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeedbackController extends AdminController
{
    public function FeedbackPage()
    {
        return view(NameController::$ADMIN_FEEDBACK);
    }

}
