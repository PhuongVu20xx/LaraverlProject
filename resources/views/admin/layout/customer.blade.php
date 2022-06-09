@extends('admin.layout.adminlayout')

@section('css')

    <link rel="stylesheet" type="text/css" href="{{ asset('css/admin/form/respose-tableadminfeedback.css') }}">

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
                            <th class="text-light">Name</th>
                            <th class="text-light">Email</th>
                            <th class="text-light">Bill ID</th>
                            <th class="text-light">Total Payment</th>

                        </tr>
                    </thead>

                    <tbody>
                        @for ($i = 0; $i <= 100; $i++)
                            <tr>
                                <td data-title="Content">ID {{ $i }} </td>
                                <td data-title="Name">Name {{ $i }}</td>
                                <td data-title="Email">Email {{ $i }}</td>
                                <td data-title="BillID">Bill ID {{ $i }}</td>
                                <td data-title="TotalPayment">Total Payment {{ $i }}</td>
                            </tr>
                        @endfor
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    @section('scripts')
        <script src="{{ asset('js/admin/tableadminfeedback.js') }}"></script>
    @endsection
@endsection
