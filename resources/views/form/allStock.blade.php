@extends('layouts.adminlayout')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/admin/adminnavigatortab.css') }}">
    <link rel="stylesheet" href="{{ asset('css/form/allproduct.css') }}">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/form/respose-tableadminfeedback.css') }}">
@endsection

@section('header')
@endsection

@section('menu')
@endsection

@section('bodycontent')
    <section class="bg-white p-5">
        <div id="no-more-tables" class="content">

            <div class="clearfix"> </div>
            <div class="clearfix"></div>

            <div class="table-responsive ">
                <table id="myTable" class="table bg-white">
                    <thead class="bg-dark">
                        <tr>
                            <th class="text-light">ID</th>
                            <th class="text-light">Product Name</th>
                            <th class="text-light">Suppliers</th>
                            <th class="text-light">Quantity</th>
                            <th class="text-light">Status</th>
                            <th class="text-light">Edit</th>
                        </tr>
                    </thead>

                    <tbody>
                        @if (count($allstock) > 0)
                            <span hidden> {{ $i = 1 }}</span>
                            @foreach ($allstock as $stock)
                                <tr>
                                    <td>{{ $i++ }} </td>
                                    <td>{{ $stock->select_product }}</td>
                                    <td>{{ $stock->select_suppliers }}</td>
                                    @if ($category->products_suppliers_status == 1)
                                        <td><input type="checkbox" id="stock_status" class="stock_status"name="stock_status" data-id={{ $stock->product_name }} checked></td>
                                    @else
                                        <td>
                                            <input type="checkbox" id="stock_status" class="stock_status" name="stock_status" data-id={{ $stock->product_name }}>
                                        </td>
                                    @endif
                                    <td><i id="edit_stock" onclick="edit(event)"  data-id={{ $stock->select_product }} class="fa-solid fa-pen-to-square" style="color:black"></i></td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    @section('scripts')
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
        <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="//cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js"></script>
        <script src="{{ asset('js/tableadminfeedback.js') }}"></script>
    @endsection
@endsection



