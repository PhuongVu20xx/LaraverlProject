<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\NameController;

class CategoryController extends AdminController
{
    public function ShowCategory()
    {
        $categories = DB::select(NameController::$SP_SELECT_ROOT_CATEGORY_NAME);
        $allcategories = DB::select(NameController::$SP_SELECT_ALL_CATEGORY);
        return view(NameController::$ADMIN_CONTROLLERS_ADD_CATEGORY,['categories'=>$categories,'allcategories' => $allcategories]);
    }

    public function AddNewCategory(request $request)
    {
        $category_name = $request->category_name;
        $category_root = $request->category_root;
        $status = $request->status;
        $st=$status=='on'?1:0;
    
        $note = '';
        
        DB::insert("exec sp_insert_category'$category_name','$category_root',$st,'$note'");

        return redirect()->action([CategoryController::class,'ShowCategory']);
    }

    public function ChangeCategoryStatus(request $request)
    {
            $id = $request->id;
            $status = $request->tatus;
            DB::update("exec sp_update_category_status $id,$status");

            return redirect()->action([CategoryController::class,'ShowCategory']);
    }

    public function ShowAllCategory()
    {
        $categories = DB::select(NameController::$SP_SELECT_ROOT_CATEGORY_NAME);
        $allcategories = DB::select(NameController::$SP_SELECT_ALL_CATEGORY);
        return view(NameController::$ADMIN_CONTROLLERS_ALL_CATEGORY,['categories'=>$categories,'allcategories' => $allcategories]);
    }
    
}
