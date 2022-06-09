@extends('admin.layout.adminlayout')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/admin/layout/adminnavigatortab.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin/form/form.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/admin/form/respose-tableadminfeedback.css') }}">
    <style>
        #img_product{
            width: 80%;
            height: 80%;
            object-fit: center;
            object-position: center;
        }
    </style>
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
        <script src="{{ asset('js/admin/tableadminfeedback.js') }}"></script>
    @endsection
@endsection



