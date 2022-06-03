@extends('layouts.adminlayout')


@section('css')
    <link rel="stylesheet" href="{{ asset('css/adminnavigatortab.css') }}">
    <link rel="stylesheet" href="{{ asset('css/addproduct-form.css') }}">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/respose-tableadminfeedback.css') }}">
@endsection

@section('header')
    @include('layouts.header')
    <div class="backgroundheader"></div>
@endsection


@section('menu')
    @include('admin.menu')
@endsection

@section('bodyheader')
    <div>
        <h3>Add Product</h3>
        <hr>
    </div>
@endsection

@section('bodynav')
    @include('admin.navigator')
@endsection

@section('bodycontent')
    <div>
        <!-- <form action="/addcategory" method="post">
            <div class="searchproduct" id="searchproduct">
                <div>
                    ID: <input type="text" id="id" class="id">
                    Name: <input type="text" id="name" class="name">
                    <input type="submit" id="submit" class="submit" value="Search">
                </div>
            </div>
            <div class="addproduct" id="addproduct">
                <div>
                    Name: <input type="text" id="name" class="name">
                    Producer: <input type="text" id="producer" class="producer">
                    Unit: <input type="text" id="unit" class="unit">
                    Infomation: <input type="text" id="infomation" class="information">
                    <input type="submit" id="submit" class="submit" value="Add">
                </div>
            </div>
        </form> -->
        <div class="row">
            <div class="col-4">
                <h5>Add Product</h5>
            </div>
            <div class="col-8">
                <form action="/addproduct" method="post" enctype="multipart/form-data">  
                    {{ csrf_field() }}
                    <div class="product">

                            <div class="category-root">
                                <span>Category Root</span>
                                        <select name="category_root" id="category_root" class="category_root">
                                            @foreach ($category_root as $category)
                                                <option value="{{ $category->category_name }}" placeholder="Choose Category">
                                                    {{$category-> category_name }}
                                                </option>
                                            @endforeach
                                        </select>
                            </div> 

                            <div class="category-name">
                                <span>Category Name</span> 
                                    <select name="category_name" id="category_name" class="category_name">
                                        @foreach ($category_name as $category)
                                                <option value="{{ $category->category_name }}" placeholder="Choose Category">
                                                    {{$category-> category_name }}
                                                </option>
                                            @endforeach
                                    </select>
                            </div>                             

                            <div class="p2">
                                <span>Product Name</span>
                                <input type="text" name="product_name" id="product_name" class="product_name" placeholder="Product Name ">
                            </div> 

                            <div class="unit-name">
                                <span>Unit</span>
                                    <select name="unit_name" id="unit_name" class="unit_name">
                                        @foreach ($unit_name as $unit)
                                                <option value="{{ $unit->unit_name }}" placeholder="Choose Unit">
                                                    {{$unit-> unit_name }}
                                                </option>
                                            @endforeach
                                    </select>
                            </div> 

                            <div class="p5">
                                <span>Information</span>
                                <input type="text" name="information" id="information" class="informatino" placeholder="Information">
                            </div>

                            <div class="p6">
                                <span>Image</span>
                                <input type="file" name="img" id="img" class="img">
                            </div>

                            <div class="submit-btn">
                                <button  type="submit" class="button1"> Save</button>
                            </div>
                    </div>
                </form>
            </div>
        </div>
        <section class="bg-white p-5">
            <div id="no-more-tables" class="content">
                <div class="clearfix"> </div>
                <div class="clearfix"></div>
                <div class="table-responsive ">
                    <table id="myTable" class="table bg-white">
                        <thead class="bg-dark">
                            <tr>
                                <th class="text-light">ID</th>
                                <th class="text-light">Name Product</th>
                                <th class="text-light">Producer</th>
                                <th class="text-light">Price</th>
                                <th class="text-light">Unit</th>
                                <th class="text-light">Total Quantity</th>
                                <th class="text-light">Information</th>
                            </tr>
                        </thead>

                        <tbody>
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </Section>
    </div>
@endsection

@section('footer')
    @include('layouts.footer')
@endsection


@section('scripts')
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
    <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="//cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('js/tableadminfeedback.js') }}"></script>
@endsection
