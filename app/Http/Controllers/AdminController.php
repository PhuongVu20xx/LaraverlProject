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

    public function EditProduct()
    {
        return view('admin.controllers.editproduct');
    }

    public function AddCategory()
    {
        return view('admin.controllers.addproduct');
    }

    public function AllProduct()
    {
        return view('admin.controllers.allproduct');
    }

    public function AddProduct()
    {
        return view('admin.controllers.addcategory');
    }

    public function ImportProduct()
    {
        return view('admin.controllers.importproduct');
    }
}
