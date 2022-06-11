@extends('admin.layout.index1')


@section('css')
<<<<<<< HEAD
    <!-- <link rel="stylesheet" href="{{ asset('css/admin/layout/adminnavigatortab.css') }}"> -->
=======
>>>>>>> 611f505d865cbabc95ff3b9c9f82945494160ac3
    <link rel="stylesheet" href="{{ asset('css/admin/form/form.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/form/respose-tableadminfeedback.css') }}">
    <style>
        #addproduct-form{
            margin-top: 30px;
        }
    </style>
@endsection

@section('slidebar')
    @include('admin.layout.slidebar')
@endsection


@section('topbar')
    @include('admin.layout.topbar')
@endsection

@section('body')
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-xl-8" id="addproduct-form">
            <!-- Account details card-->
            <div class="card mb-4">
                <div class="card-header">Add Product</div>
                <div class="card-body">
                    <form action="/addproduct" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <!-- Form Row-->
                        <div class="row gx-3 mb-3">
                            <!-- Form Group (first name)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputFirstName">Category Root</label>
                                <select name="category_root" id="category_root" class="form-control">
                                    @foreach ($category_root as $category)
                                        <option value="{{ $category->category_name }}" placeholder="Choose Category">
                                            {{ $category->category_name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <!-- Form Group (last name)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputLastName">Category Name</label>
                                <select name="category_name" id="category_name" class="form-control ">
                                    @foreach ($category_name as $category)
                                        <option value="{{ $category->category_name }}" placeholder="Choose Category">
                                            {{ $category->category_name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <!-- Form Row-->
                        <div class="row gx-3 mb-3">
                            <!-- Form Group-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="product_name">Product Name</label>
                                <input class="form-control" name="product_name" id="product_name" type="text" placeholder="Enter Product Name">
                            </div>
                            <!-- Form Group -->
                            <div class="col-md-6">
                                <label class="small mb-1" for="information">Information</label>
                                <input class="form-control" name="information" id="information" type="text" placeholder="Enter Information">
                            </div>
                        </div>
                        <!-- Form Row-->
                        <div class="row gx-3 mb-3">
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
                            <!-- Form Group-->
                            <div class="col-md-6">
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
        <script src="{{ asset('js/admin/tableadminfeedback.js') }}"></script>
    @endsection
@endsection



