@extends('admin.layout.adminlayout')

@section('css')
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
                            <th class="text-light">Category Name</th>
                            <th class="text-light">Product Name</th>
                            <th class="text-light">Information</th>
                            <th class="text-light">Image</th>
                        </tr>
                    </thead>

                    <tbody>
                        @if (count($allproduct) > 0)
                            <span hidden> {{ $i = 1 }}</span>
                            @foreach ($allproduct as $product)
                                <tr>
                                    <td>{{ $i++ }} </td>
                                    <td>{{ $product->category_id }}</td>
                                    <td>{{ $product->product_name }}</td>
                                    <td>{{ $product->information }}</td>
                                    <td><img src="{{ asset('upload.product') }}/{{ $product->img_name }}" id="img_product"
                                            alt=""></td>
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


