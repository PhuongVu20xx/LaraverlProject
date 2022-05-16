<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\DB;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $sweet_groceries=DB::table('posts')->select('sweet-grocery')->distinct()->get()->pluck('sweet-grocery')->sort();
        $salted_groceries=DB::table('posts')->select('salted-grocery')->distinct()->get()->pluck('salted-grocery')->sort();
        $fresh_foods=DB::table('posts')->select('fresh-food')->distinct()->get()->pluck('fresh-food')->sort();
        $frozen_foods=DB::table('posts')->select('frozen-food')->distinct()->get()->pluck('frozen-food')->sort();
        $bakeries_pastries=DB::table('posts')->select('bakery-pastry')->distinct()->get()->pluck('bakery-pastry')->sort();
        $beverages=DB::table('posts')->select('beverage')->distinct()->get()->pluck('beverage')->sort();
        $babies=DB::table('posts')->select('baby')->distinct()->get()->pluck('baby')->sort();
        $pets=DB::table('posts')->select('pet')->distinct()->get()->pluck('pet')->sort();
        $beauty_cosmetics=DB::table('posts')->select('beauty-cosmetic')->distinct()->get()->pluck('beauty-cosmetic')->sort();
        $households=DB::table('posts')->select('household')->distinct()->get()->pluck('household')->sort();

        $post=POST::query();

        if($request->filled('sweet-grocery')){
            $post->where('sweet-grocery', $request-> sweet_groceries);
        }
        if($request->filled('salted-grocery')){
            $post->where('salted-grocery', $request-> salted_groceries);
        }
        if($request->filled('fresh-food')){
            $post->where('fresh-food', $request-> fresh_foods);
        }
        if($request->filled('frozen-food')){
            $post->where('frozen-food', $request-> frozen_foods);
        }
        if($request->filled('bakery-pastry')){
            $post->where('bakery-pastry', $request-> bakeries_pastries);
        }
        if($request->filled('beverage')){
            $post->where('beverage', $request-> beverages);
        }
        if($request->filled('baby')){
            $post->where('baby', $request-> babies);
        }
        if($request->filled('pet')){
            $post->where('pet', $request-> pets);
        }
        if($request->filled('beauty-cosmetic')){
            $post->where('beauty-cosmetic', $request-> beauty_cosmetics);
        }
        if($request->filled('household')){
            $post->where('household', $request-> households);
        }

        return view('layouts.product', [
            'sweet-grocery' -> $sweet_groceries,
            'salted-grocery'-> $salted_groceries,
            'fresh-food' -> $fresh_foods,
            'frozen-food' -> $frozen_foods,
            'bakery-pastry' -> $bakeries_pastries,
            'beverage' -> $beverages,
            'baby' -> $babies,
            'pet' -> $pets,
            'beauty-cosmetic' -> $beauty_cosmetics,
            'household' -> $households,
            'posts' -> $post->get(),
        ]);
    }

    public function store(Request $request)
    {
        return $request -> all();
        return view('layouts.product');
    }

    public function show($id)
    {
        //
    }

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
