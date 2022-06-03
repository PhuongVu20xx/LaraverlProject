<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\NameController;

class CategoryController extends Controller
{
    public function ShowCategory($note='')
    {
        $categories = DB::select(NameController::$SP_SELECT_ROOT_CATEGORY_NAME);
        $allCategories = DB::select(NameController::$SP_SELECT_ALL_CATEGORY);
        return view(NameController::$ADMIN_CONTROLLERS_ADD_CATEGORY,['categories'=>$categories,'allCategories' => $allCategories,'note' => $note]);
    }

    public function AddNewCategory(request $request)
    {
        $category_name = $request->category_name;
        $category_root = $request->category_root;
        $status = $request->status;
        $st=$status=='on'?1:0;
    
        $note = '';
        
        DB::insert("exec sp_insert_category'$category_name','$category_root',$st,'$note'");

        return redirect()->action([CategoryController::class,'ShowCategory'],['note' =>$note]);
    }

    public function ChangeCategoryStatus(request $request)
    {
        $category_id = $request->category_id;
        $category_status = $request->category_status;
        DB::update("exec sp_update_category_status'$category_id','$category_status'");
    }
    
}
