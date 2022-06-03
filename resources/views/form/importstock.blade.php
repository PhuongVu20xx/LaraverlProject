@extends('layouts.adminlayout')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/adminnavigatortab.css') }}">
    <link rel="stylesheet" href="{{ asset('css/form/importstock.css') }}">
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
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8" id="insertstock-form">
                <!-- Account details card-->
                <div class="card mb-4">
                    <form action="">
                        <div class="card-header">Insert Stock</div>
                        <div class="card-body">
                            <!-- Form Row-->
                            <div class="row gx-3 mb-3">
                                <!-- Form Group (first name)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputFirstName">Product Name</label>
                                    <select name="select_product" id="select_product" class="select_product">
                                            @foreach ($select_product as $products)
                                                <option value="{{$products->product_name}}" placeholder="Choose Category">
                                                    {{$products->product_name}}
                                                </option>
                                            @endforeach
                                    </select>
                                </div>
                                <!-- Form Group (last name)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputLastName">Supplier</label>
                                    <select name="select_suppliers" id="select_suppliers" class="select_suppliers">
                                        @foreach ($select_suppliers as $suppliers)
                                                <option value="{{$suppliers->supplier_name }}" placeholder="Choose Category">
                                                    {{$suppliers->supplier_name }}
                                                </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <!-- Form Row-->
                            <div class="row gx-3 mb-3">
                                <!-- Form Group (organization name)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="offersname">Offers Name</label>
                                    <input class="form-control" id="offersname" name="offersname" type="text" value="NULL">
                                </div>
                                <!-- Form Group (location)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="Status">Product Supplier Status</label>
                                    <input class="form-control" id="Status" type="text"  >
                                </div>
                            </div>
                            <!-- Form Group (email address)-->
                            <div class="mb-3">
                                <label class="small mb-1" for="price">Price</label>
                                <input class="form-control" id="price" name="price" type="email">
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
                                <th class="text-light">Quantity</th>
                                <th class="text-light">Price</th>

                            </tr>
                        </thead>

                        <tbody>
                            @for ($i = 0; $i <= 100; $i++)
                                <tr>
                                    <td data-title="Id">ID {{ $i }} </td>
                                    <td data-title="Name">Name Product {{ $i }}</td>
                                    <td data-title="Producer">Producer {{ $i }}</td>
                                    <td data-title="Quantity">Quantity {{ $i }}</td>
                                    <td data-title="Price">Price {{ $i }}</td>
                                </tr>
                            @endfor
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
