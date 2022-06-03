<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\NameController;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{  
    public function CustomerPage()
    {
       return view(NameController::$ADMIN_CUSTOMER);
    }

    public function ControllerPage()
    {
        return view(NameController::$ADMIN_CONTROLLERS_PAGE);
    }

    public function CategoryPage()
    {
        return view(NameController::$ADMIN_CONTROLLERS_CATEGORY_PAGE);
    }

    public function ProductPage()
    {
        return view(NameController::$ADMIN_CONTROLLERS_PRODUCT_PAGE);
    }
}
