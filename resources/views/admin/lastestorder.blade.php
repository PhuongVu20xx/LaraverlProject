@extends('layouts.adminlayout')

@section('css')

    <head>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/respose-tableadminfeedback.css') }}">
    </head>
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
        <h3>Latest Order</h3>
        <hr>
    </div>
@endsection

@section('bodynav')
    @include('form.formNavigator')
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
                            <th class="text-light">Content</th>
                            <th class="text-light">Name</th>
                            <th class="text-light">Time</th>
                        </tr>
                    </thead>

                    <tbody>
                        @for ($i = 0; $i <= 100; $i++)
                            <tr>
                                <td data-title="Content">Content {{ $i }} </td>
                                <td data-title="Name">Name {{ $i }}</td>
                                <td data-title="Time">Time {{ $i }}</td>
                            </tr>
                        @endfor
                    </tbody>
                </table>
            </div>
        </div>
    </section>
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
