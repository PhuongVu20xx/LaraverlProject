@extends('layouts.layout')

<!-- HEADER -->
@section('header')
    @include('layouts.header')
    <div class="backgroundheader"></div>
@endsection
<!-- CSS -->
@section('css')
    <link rel="stylesheet" href="{{asset('css/product.css')}}">
@endsection

@section('body')
<div class="row">
    <div class="col-4">
    <h5>Add Product</h5>
    </div>
    <div class="col-8">
        <form action="">  
                <div class="product">
                   <div class="p1">
                       <label for="choose">Choose Cate &emsp;&nbsp;</label> 
                            <select name="choose" id="choose">
                                 <option value="choose1">choose1</option>
                                 <option value="choose2">choose2</option>
                             </select>
                    </div> 
                    <div class="p2">
                       <p>Product Name </p>
                       <input type="text" name="choose" placeholder="Product Name ">
                    </div> 
                    <div class="p3">
                       <p >Price </p><input type="text" name="status" placeholder="Price">
                    </div>
                    <div class="p4">
                       <label for="unit">Unit &emsp; &emsp;&emsp; &emsp;</label>
                        <select name="unit" id="unit" form="unit">
                            <option value="unit1">unit1</option>
                            <option value="unit2">unit2</option>   
                        </select>
                    </div>
                    <div class="p5">
                       <p >Information </p>
                       <input type="text" name="status" placeholder="Information">
                    </div>
                    <div class="p6">
                       <p >Img </p>
                       <input type="file" name="img">
                    </div>
                    <div class="p7">
                       <p > Status</p>
                       <input type="text" name="status" placeholder="status">
                    </div>
                    <div class="submit">
                       <button  type="submit" class="button1"> Save</button>
                    </div>
                  
                </div>
        </form>
    </div>
   
 </div>
@endsection

@section('footer')
@include('layouts.footer')
@endsection