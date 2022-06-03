<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImportProductController extends Controller
{
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
        }
    }

}
