<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Http\Controllers\NameController;
use Illuminate\Support\Facades\DB;

class AdminController extends BaseController
{  
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function CustomerPage()
    {
       return view(NameController::$ADMIN_CUSTOMER);
    }

    public function AdminControllerPage()
    {
        return view(NameController::$ADMIN_CONTROLLERS_ADMIN_HOME_PAGE);
    }

    public function CategoryPage()
    {
        return view(NameController::$ADMIN_CONTROLLERS_CATEGORY_PAGE);
    }

    public function ProductPage()
    {
        return view(NameController::$ADMIN_CONTROLLERS_PRODUCT_PAGE);
    }

    public function showAdminProfile(){
        return view(NameController::$ADMIN_CONTROLLERS_ADD_PROFILE);
    }
    public function postAdminProfile(){
     
 }
   
}
