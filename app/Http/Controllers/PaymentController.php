<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\NameController;
use Illuminate\Support\Facades\DB;

class PaymentController extends AdminController
{
    public function ShowAllPayment()
    {
        $offer_id = DB::select(NameController::$SP_SELECT_OFFERS_DETAILS);
        $allpayment = DB::select(NameController::$SP_SELECT_PAYMENT_MODE);
        return view(NameController::$ADMIN_CONTROLLERS_PAYMENT_PAGE,['allpayment' => $allpayment, 'offer_id'=>$offer_id]);
    }

    public function AddPayment()
    {
        $payment_name = $request->payment_mode_id_name;
        $offer_id = $request->offer_id;

        $note = '';

        DB::insert("exec sp_insert_payment_mode '$payment_name','$offer_id','$note'");

        return redirect()->action([PaymentController::class,'ShowAllPayment']);
    }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
