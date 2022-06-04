<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\NameController;
use Illuminate\Support\Facades\DB;

class OfferController extends AdminController
{
    public function ShowAllOffer()
    {
        $alloffer = DB::select(NameController::$SP_SELECT_OFFERS_DETAILS);
        return view(NameController::$ADMIN_CONTROLLERS_OFFER_PAGE,['alloffer' => $alloffer]);
    }

    public function AddOffer(Request $request)
    {
        $offer_id = $request->offer_id;
        $offer_name = $request->offer_name;
        $offer_detail = $request->offer_details;
        $offer_price = $request->offer_price;
        $offer_start_date = $request->offer_start_date;
        $offer_end_date = $request->offer_end_date;

        $note = '';

        DB::insert("exec sp_insert_offers_details '$offer_id','$offer_name','$offer_detail',$offer_price,'$offer_start_date','$offer_end_date','$note'");
        return redirect()->action([OfferController::class,'ShowAllOffer']);
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
