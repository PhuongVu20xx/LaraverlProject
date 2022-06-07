<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\NameController;

class CategoryController extends AdminController
{
    public function AddNewCategory(request $request)
    {
        $category_name = $request->category_name;
        $category_root = $request->category_root;
        $status = $request->category_status;
        $st=0;
        if($status == "on") $st=1;

        $note = '';

        DB::insert("exec sp_insert_category '$category_name','$category_root',$st,'$note'");
        return 1;
    }

    public function ShowAddCategory()
    {
        $categories = DB::select(NameController::$SP_SELECT_ROOT_CATEGORY_NAME);
        $allcategories = DB::select(NameController::$SP_SELECT_ALL_CATEGORY);
        return view(NameController::$ADMIN_CONTROLLERS_ADD_CATEGORY,['categories'=>$categories,'allcategories' => $allcategories]);
    }

    public function ChangeCategoryStatus(request $request)
    {
            $id = $request->id;
            $status = $request->status;
            DB::update("exec sp_update_category_status $id,$status");

            return redirect()->action([CategoryController::class,'ShowAllCategory']);
    }

    public function ShowAllCategory()
    {
        $categories = DB::select(NameController::$SP_SELECT_ROOT_CATEGORY_NAME);
        $allcategories = DB::select(NameController::$SP_SELECT_ALL_CATEGORY);
        return view(NameController::$ADMIN_CONTROLLERS_ALL_CATEGORY,['categories'=>$categories,'allcategories' => $allcategories]);
    }

    public function EditCategory($id=0,$status=0)
    {
        $categories = DB::select(NameController::$SP_SELECT_ROOT_CATEGORY_NAME);
        $name = '';
        $currentCategory = DB::select("exec sp_select_category_by_id $id");
        if(count($currentCategory)>0) $name = $currentCategory->category_name;

        return view(NameController::$ADMIN_CONTROLLERS_Edit_CATEGORY,['categories'=>$categories,'name'=>$name,'status'=>$status]);
    }

    public function RequestEditCategory(request $request)
    {
        $id = $request->id;
        $status = $request->status;
        return redirect()->action([CategoryController::class,'EditCategory'],['id'=>$id,'status'=>$status]);
    }

}
