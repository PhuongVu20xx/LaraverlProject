<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends AdminController
{
  
    public function landingpage()
    {
        return view('user/pages/landingpage');
    }

    public function about()
    {
        return view('user/pages/about');
    }

    public function blog()
    {
        return view('user/pages/blog');
    }

    public function contact()
    {
        return view('user/pages/contact');
    }
    
    public function shipping()
    {
        return view('user/pages/shipping');
    }

    public function needhelp()
    {
        return view('user/pages/needhelp');
    }

    public function product()
    {
        return view('user/products/product');
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
