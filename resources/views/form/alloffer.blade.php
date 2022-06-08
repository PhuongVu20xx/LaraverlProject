@extends('layouts.adminlayout')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/admin/adminnavigatortab.css') }}">
    <link rel="stylesheet" href="{{ asset('css/form/alloffer.css') }}">
    <script src="https://kit.fontawesome.com/8b058784b8.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/form/respose-tableadminfeedback.css') }}">
@endsection

@section('header')
@endsection

@section('menu')
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
                            <th class="text-light">Edit</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($alloffer as $offer)
                            <tr>
                                <td>
                                    {{ $offer->offer_id }}
                                </td>
                                <td>
                                    {{ $offer->offer_name }}
                                </td>
                                <td>
                                    {{ $offer->offer_details  }}
                                </td>
                                <td>
                                    {{ $offer->offer_price  }}
                                </td>
                                <td>
                                    {{ $offer->offer_start_date  }}
                                </td>
                                <td>
                                    {{ $offer->offer_end_date  }}
                                </td>
                                <td>
                                    <i class="fa-solid fa-pen-to-square" style="color:black"></i>
                                </td>
                            </tr>
                        @endforeach
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
        <script src="{{ asset('js/admin/category_controller.js') }}"></script>
    @endsection
@endsection


