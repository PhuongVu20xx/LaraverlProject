@extends('layouts.adminlayout')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/adminnavigatortab.css') }}">
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
        <h3>Edit Product</h3>
        <hr>
    </div>
@endsection

@section('bodynav')
    @include('admin.navigator')
@endsection

@section('bodycontent')
    <div>
        <form action="/editproduct" method="post">
            <div class="searchproduct" id="searchproduct">
                <div>
                    ID: <input type="text" id="id" class="id"> 
                    Name: <input type="text" id="name" class="name">
                    <input type="submit" id="submit" class="submit" value="Search">
                </div>
            </div>
            <div class="editproduct" id="editproduct">
                <div>
                    ID: <input type="text" id="id" class="id">
                    Name: <input type="text" id="name" class="name">
                    <input type="submit" id="submit" class="submit" value="Update">
                </div>
            </div>
        </form>

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
                                <th class="text-light">Total Quantity</th>

                            </tr>
                        </thead>

                        <tbody>
                            @for ($i = 0; $i <= 100; $i++)
                                <tr>
                                    <td data-title="Id">ID {{ $i }} </td>
                                    <td data-title="Name">Name Product {{ $i }}</td>
                                    <td data-title="Producer">Producer {{ $i }}</td>
                                    <td data-title="Price">Price {{ $i }}</td>
                                    <td data-title="TotalQuantity">Total Quantity {{ $i }}</td>
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