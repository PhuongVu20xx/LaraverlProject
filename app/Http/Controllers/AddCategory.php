<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AddCategory extends Controller
{
    public function index(){
        return view('controller.addcategory');   
    }

    public function AddCategory()
    {
        // $categories = DB::table(NameController::$CATEGORY)->get();
        $categories = DB::select('exec sp_select_root_category_name');
        return view(NameController::$ADMIN_CONTROLLERS_ADD_CATEGORY,['categories'=>$categories]);
    }

    public function AddNewCategory(request $request)
    {
        $category_name = $request->category_name;
        $category_root = $request->category_root;
        $status = $request->check_box;
        $st = $status=='on'?1:0;
        DB::select("call sp_insert_category $category_name,$category_root,$st");


        return redirect()->action([AdminController::class,'AddCategory']);
    }
}
