@extends('admin.layout.adminlayout')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/admin/form/form.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/admin/layout/respose-tableadminfeedback.css') }}">
    <style>
        #editimportproduct-form{
            margin-top: 70px;
        }
    </style>
@endsection

@section('header')
@endsection

@section('menu')
@endsection

@section('bodycontent')
    <div class="col-md-8 container-xl px-4 mt-4" id="editimportproduct-form">
            <!-- Account details card-->
            <div class="card mb-4">
                <form action="/editimportproduct" method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="card-header">Edit Import Product</div>
                    <div class="card-body">
                        <!-- Form Row-->
                        <div class="form-group">
                            <!-- Form Group (first name)-->
                            <div class="col-md-1"></div>
                            <div class="col-md-5">
                                <label class="control-label" for="select_product">Product Name</label>
                                <select name="select_product" id="select_product" class="form-control">
                                    @foreach ($select_product as $products)
                                        <option value="{{ $products->product_name }}" >
                                            {{ $products->product_name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <!-- Form Group (last name)-->
                            
                            <div class="col-md-5">
                                <label class="control-label" for="select_suppliers">Supplier</label>
                                <select name="select_suppliers" id="select_suppliers" class="form-control">
                                    @foreach ($select_suppliers as $suppliers)
                                        <option value="{{ $suppliers->supplier_name }}" >
                                            {{ $suppliers->supplier_name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-1"></div>
                        </div>
                        <!-- Form Row-->
                        <div class="form-group">
                            <!-- Form Group (organization name)-->
                            <div class="col-md-1"></div>
                            <div class="col-md-5">
                                <label class="control-label" for="offers_name">Offers Name</label>
                                <select name="offers_name" id="offers_name" class="form-control">
                                    @foreach ($select_offer as $offers)
                                        <option value="{{ $offers->offer_name }}" >
                                            {{ $offers->offer_name }}
                                        </option>
                                    @endforeach
                                </select>                            
                            </div>
                            <!-- Form Group (location)-->
                            <div class="col-md-5">
                                <label class="control-label" for="quantity">Quantity</label>
                                <input class="form-control" onchange="sum()" name="quantity" id="quantity" type="number" value="0" step="1">
                            </div>
                            <div class="col-md-1"></div>
                        </div>
                        <!-- Form Group (email address)-->
                       
                        <div class="form-group">
                            <div class="col-md-1"></div>
                            <div class="mb-3 col-md-10">
                                <label class="control-label" for="price">Price</label>
                                <input class="form-control" onchange="sum()" id="price" name="price" step="500" type="text">
                            </div>
                            <div class="col-md-1"></div>

                        </div>
                        
                       
                        <!-- Form Row-->
                        <div class="form-group">
                            <!-- Form Group (first name)-->
                            <div class="col-md-1"></div>
                            <div class="col-md-5">
                                <label class="control-label" for="importdate">Import Date</label>
                                <input class="form-control" id="importdate" name="importdate" type="date">

                            </div>
                            <!-- Form Group (last name)-->
                            <div class="col-md-5">
                                <label class="control-label" for="emp_name">Employee</label>
                                <select name="emp_name" id="emp_name" class="form-control">
                                    @foreach ($select_manager as $manager)
                                        <option value="{{ $manager->emp_name }}" >
                                            {{ $manager->emp_name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-1"></div>
                        </div>
                        <!-- Form Row-->
                        <div class="form-group">
                            <!-- Form Group (first name)-->
                            <div class="col-md-1"></div>
                            <div class="col-md-5">
                                <label class="control-label" for="totalpayment">Total Payment</label>
                                <input class="form-control" id="totalpayment" name="totalpayment" type="decimal" disabled >
                            </div>
                            <!-- Form Group (last name)-->
                            <div class="col-md-5">
                                <label class="control-label" for="note">Note</label>
                                <input class="form-control" id="note" name="note" type="text" >
                            </div>
                            <div class="col-md-1"></div>
                        </div>
                        <!-- Save changes button-->
                        <div class="button">
                            <button class="btn" type="submit">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    @section('scripts')
        <script src="{{ asset('js/admin/tableadminfeedback.js') }}"></script>
        <script src="{{ asset('js/admin/importproduct.js') }}"></script>
    @endsection
@endsection


