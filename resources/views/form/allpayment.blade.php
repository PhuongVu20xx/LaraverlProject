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
        <h3>Controller / Payment / All Payment</h3>
        <hr>
    </div>
@endsection

@section('bodynav')
  
@endsection

@section('bodycontent')
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8" id="addpaymentform">
            <div class="card mb-4">
                <form action="/addpayment" method="post">
                    {{ csrf_field() }}
                        <div class="card-header">Add Payment</div>
                        <div class="card-body">
                            <!-- Form Group-->
                            
                            <!-- Form Group-->
                            <div class="row gx-3 mb-3">
                                <label class="col-md-3 small mb-1" for="payment_mode_name">Payment Mode Name</label>
                                <input class="col-md-6 form-control" id="payment_mode_name" name="payment_mode_name" type="text">
                            </div>
                            <!-- Form Group-->
                            <div class="row gx-3 mb-3">
                                <label class="col-md-3 small mb-1" for="offer_name">Offer Name</label>
                                <select class="col-md-6 form-control" name="offer_name" id="offer_name">
                                    @foreach ($offer_name as $offer)
                                        <option value="{{ $offer->offer_name }}">
                                            {{ $offer->offer_name }}
                                        </option>
                                    @endforeach
                                </select>
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
                            <th class="text-light">ID</th>
                            <th class="text-light">Payment Name</th>
                            <th class="text-light">Offer Name</th>
                            <th class="text-light">Edit</th>
                        </tr>
                    </thead>

                    <tbody>
                        @if (count($allpayment)>0)
                            <span hidden>{{$i=1}}</span>
                            @foreach ($allpayment as $payment)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $payment->payment_mode_name  }}</td>
                                    <td>{{ $payment->offer_name  }}</td>
                                    <td><i class="fa-solid fa-pen-to-square" style="color:black"></i></td>
                                </tr>
                            @endforeach
                        @endif
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
