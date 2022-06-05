@extends('layouts.adminlayout')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/admin/adminnavigatortab.css') }}">
    <link rel="stylesheet" href="{{ asset('css/form/allpayment.css') }}">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/form/respose-tableadminfeedback.css') }}">
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
        <h3>Controller / Offer / All Offer</h3>
        <hr>
    </div>
@endsection

@section('bodynav')
    @include('form.formNavigator')
@endsection

@section('bodycontent')
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8" id="addofferform">
            <div class="card mb-4">
                <form action="/addoffer" method="post">
                    {{ csrf_field() }}
                        <div class="card-header">Add Offer</div>
                        <div class="card-body">
                            <!-- Form Group-->
                            <div class="row gx-3 mb-3">
                                <div class="col-md-6">
                                    <label class="small mb-1" for="offer_id">ID</label>
                                    <input class=" form-control" id="offer_id" name="offer_id" type="text">
                                </div>
                                <div class="col-md-6">
                                    <label class=" small mb-1" for="offer_name">Offer Name</label>
                                    <input class="form-control" id="offer_name" name="offer_name" type="text">
                                </div>
                            </div>
                            
                            <!-- Form Group-->
                            <div class="row gx-3 mb-3">
                                <div class="col-md-6">
                                    <label class=" small mb-1" for="offer_detail">Offer Detail</label>
                                    <input class=" form-control" id="offer_detail" name="offer_detail" type="text">
                                </div>
                                <div class="col-md-6">
                                    <label class=" small mb-1" for="offer_price">Offer Price</label>
                                    <input class=" form-control" id="offer_price" name="offer_price" type="text">
                                </div>
                            </div>

                            <!-- Form Group-->
                            <div class="row gx-3 mb-3">
                                <div class="col-md-6">
                                    <label class=" small mb-1" for="offer_start_date">Start Date</label>
                                    <input class=" form-control" id="offer_start_date" name="offer_start_date" type="datetime-local">
                                </div>
                                <div class="col-md-6">
                                    <label class=" small mb-1" for="offer_end_date">End Date</label>
                                    <input class=" form-control" id="offer_end_date" name="offer_end_date" type="datetime-local">
                                </div>
                            </div>

                            <!-- Save changes button-->
                            <div class="button">
                                <button class="btn" type="submit">Save</button>
                            </div>
                        </div>
                </form>
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
                            <th class="text-light">Offer ID</th>
                            <th class="text-light">Offer Name</th>
                            <th class="text-light">Offer Details</th>
                            <th class="text-light">Offer Price</th>
                            <th class="text-light">Start Date</th>
                            <th class="text-light">End Date</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($alloffer as $offer)
                            <tr>
                                <td>
                                    <span name ="offer_id" id="offer_id">{{ $offer->offer_id }}</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        id="edit_category" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                        <path
                                            d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                        <path fill-rule="evenodd"
                                            d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                    </svg>
                                </td>
                                <td name ="offer_name" id="offer_name">{{ $offer->offer_name }}</td>
                                <td name ="offer_details" id="offer_details">{{ $offer->offer_details  }}</td>
                                <td name ="offer_price" id="offer_price">{{ $offer->offer_price  }}</td>
                                <td name ="offer_start_date" id="offer_start_date">{{ $offer->offer_start_date  }}</td>
                                <td name ="offer_end_date " id="offer_end_date ">{{ $offer->offer_end_date  }}</td>
                            </tr>
                        @endforeach
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
    <script src="{{ asset('js/admin/category_controller.js') }}"></script>
@endsection
