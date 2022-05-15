<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\NameController;

class AdminController extends Controller
{  
    public function FeedbackPage()
    {
        return view(NameController::$ADMIN_FEEDBACK);
    }

    public function CustomerPage()
    {
       return view(NameController::$ADMIN_CUSTOMER);
    }

    public function LatestOrderPage()
    {
        return view(NameController::$ADMIN_LATEST_ORDER);
    }
    public function ControllerPage()
    {
        return view(NameController::$ADMIN_CONTROLLER);
    }

    public function EditProduct()
    {
        return view(NameController::$ADMIN_CONTROLLERS_EDIT_PRODUCT);
    }

    public function AddCategory()
    {
        return view(NameController::$ADMIN_CONTROLLERS_ADD_CATEGORY);
    }

    public function AllProduct()
    {
        return view(NameController::$ADMIN_CONTROLLERS_ALL_PRODUCT);
    }

    public function AddProduct()
    {
        return view(NameController::$ADMIN_CONTROLLERS_ADD_PRODUCT);
    }

    public function ImportProduct()
    {
        return view(NameController::$ADMIN_CONTROLLERS_IMPORT_PRODUCT);
    }

    public function ImportProductInput(Request $request){

        $name = $request->name;

        if(CheckProduct($name))
        {
            $data = [
                NameController::$NAME=> $name,
                NameController::$PRODUCER=> $request->producer,
                NameController::$PRICE=> $request->price,
                NameController::$QUANTITY=> $request->quantity,
                NameController::$IMPORT_DAY=> $request->importday,
            ];
            DB::table(NameController::$IMPORT_PROCUCT)->insert($data);
            return ImportArlet(NameController::$IMPORT_SUCCESS);
        }
        else return ImportArlet(NameController::$IMPORT_FAIL);
    }

    private function CheckProduct($name)
    {
        return DB::table(NameController::$PRODUCT)->select(NameController::$NAME)->where(NameController::$NAME,$name)->exists();
    }

    private function ImportArlet($arlet)
    {
        return redirect()->action([AdminController::class,NameController::$IMPORT_PROCUCT])->with('msg', $arlet);;
    }
}
