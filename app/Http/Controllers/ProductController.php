<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\NameController;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function AllProduct()
    {
        $allproduct = DB::select('exec sp_select_all_product');
        return view(NameController::$ADMIN_CONTROLLERS_ALL_PRODUCT);
    }

    public function AddProduct()
    {
        return view(NameController::$ADMIN_CONTROLLERS_ADD_PRODUCT);
    }

    public function EditProduct()
    {
        return view(NameController::$ADMIN_CONTROLLERS_EDIT_PRODUCT);
    }

    public function product()
    {
        return view('products/product');
    }

    public function product_sweetgrocery()
    {
        return view('products/sweetgrocery');
    }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
