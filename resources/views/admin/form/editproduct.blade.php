@extends('admin.layout.adminlayout')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/form/importstock.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin/adminnavigatortab.css') }}">
    {{-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css"> --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/admin/layout/respose-tableadminfeedback.css') }}">
@endsection

@section('header')
@endsection

@section('menu')
@endsection

@section('bodycontent')
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-xl-8" id="editproduct-form">
            <!-- Account details card-->
            <div class="card mb-4">
                <form action="/editproduct" method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}
                <div class="card-header">Edit Product</div>
                <div class="card-body">
                    <!-- Form Row-->
                    <div class="row gx-3 mb-3">
                        <!-- Form Group (first name)-->
                        <div class="col-md-6">
                            <label class="small mb-1" for="category_name">Category Name</label>
                            <select name="category_name" id="category_name" class="form-control ">
                                @foreach ($category_name as $category)
                                    <option value="{{ $category->category_name }}">
                                        {{ $category->category_name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <!-- Form Group (last name)-->
                        <div class="col-md-6">
                            <label class="small mb-1" for="product_name">Product Name</label>
                            <input class="form-control" id="product_name" type="text" name="product_name">
                        </div>
                    </div>
                    <!-- Form Row-->
                    <div class="row gx-3 mb-3">
                        <!-- Form Group-->
                        <div class="col-md-6">
                            <label class="small mb-1" for="information">Information</label>
                            <input class="form-control" id="information" type="text" name="information" >
                        </div>
                        <!-- Form Group -->
                        <div class="col-md-6">
                            <label class="small mb-1" for="unit_name">Unit</label>
                            <select name="unit_name" id="unit_name" class="form-control">
                                @foreach ($unit_name as $unit)
                                    <option value="{{ $unit->unit_name }}" placeholder="Choose Unit">
                                        {{ $unit->unit_name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <!-- Form Row-->
                    <div class=" gx-3 mb-3">
                        <!-- Form Group -->
                        <div class="">
                            <label class="small mb-1" for="img">Image</label>
                            <input type="file" name="img" id="img" class="form-control">
                        </div>

                    </div>
                    <!-- Save changes button-->
                    <div class="button">
                        <button class="btn" type="submit">Save</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>

    @section('scripts')
        {{-- <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
        <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="//cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js"></script> --}}
        <script src="{{ asset('js/admin/tableadminfeedback.js') }}"></script>
    @endsection
@endsection


