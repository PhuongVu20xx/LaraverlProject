<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LatestOrderController extends AdminController
{
    public function LatestOrderPage()
    {
        return view(NameController::$ADMIN_LATEST_ORDER);
    }
}
