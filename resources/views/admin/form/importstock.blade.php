@extends('admin.layout.adminlayout')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/admin/layout/adminnavigatortab.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin/form/importstock.css') }}">
    {{-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css"> --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/admin/form/respose-tableadminfeedback.css') }}">
@endsection

@section('header')
@endsection


@section('menu')
@endsection

@section('bodycontent')
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8" id="insertstock-form">
            <!-- Account details card-->
            <div class="card mb-4">
                <form action="/importstock" method="post">
                    <div class="card-header">Insert Stock</div>
                    <div class="card-body">
                        <!-- Form Row-->
                        <div class="row gx-3 mb-3">
                            <!-- Form Group (first name)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="select_product">Product Name</label>
                                <select name="select_product" id="select_product" class="form-control">
                                    @foreach ($select_product as $products)
                                        <option value="{{ $products->product_name }}">
                                            {{ $products->product_name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <!-- Form Group (last name)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="select_suppliers">Supplier</label>
                                <select name="select_suppliers" id="select_suppliers" class="form-control">
                                    @foreach ($select_suppliers as $suppliers)
                                        <option value="{{ $suppliers->supplier_name }}">
                                            {{ $suppliers->supplier_name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                            <!-- Form Row-->
                        <div class="row gx-3 mb-3">
                            <!-- Form Group (offers_name)-->
                            {{-- <div class="col-md-6">
                                <label class="small mb-1" for="offers_name">Offers Name</label>
                                <select name="offers_name" id="offers_name" class="form-control">
                                    @foreach ($offers_name as $offer)
                                        <option value="{{ $offer->offer_name }}">
                                            {{ $offer->offer_name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div> --}}

                            
                            <label class="small mb-1" for="quantity">Quantity</label>
                            <input class="form-control" onchange="sum()" name="quantity" id="quantity" type="number" value="0" step="1">
                            
                          
                        </div>
                            <!-- Form Group (stock status)-->
                        <div class="row gx-3 mb-3">
                            <div class="col-md-4"></div>
                            <label class="col-md-3 small mb-1" for="status">Status</label>
                            <div class="form-check form-switch col-md-1">
                                <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
                                <label class="form-check-label" for="flexSwitchCheckChecked"></label>
                            </div>
                        </div>
                            <!-- Save changes button-->
                        <div class="button">
                            <button class="btn" type="submit">Save</button>
                        </div>
                </form>
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>

    @section('scripts')
        {{-- <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
        <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="//cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js"></script> --}}
        <script src="{{ asset('js/admin/tableadminfeedback.js') }}"></script>
    @endsection
@endsection



