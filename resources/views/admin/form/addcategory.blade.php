@extends('admin.layout.adminlayout')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/admin/layout/adminnavigatortab.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin/form/addcategory.css') }}">
@endsection

@section('header')
@endsection

@section('menu')
@endsection

@section('bodycontent')
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8" id="addcateform">
            <div class="card mb-4">

                    {{ csrf_field() }}
                        <div class="card-header">Add Category</div>
                        <div class="card-body">
                             <!-- Form Group-->
                             <div class="row gx-3 mb-3">
                                <div class="col-md-1"></div>
                                <label class="col-md-3 small mb-1" for="category-root">Category Root</label>
                                <select class="col-md-6" name="category_root" id="category_root">
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->category_name }}" placeholder="Choose category">
                                            {{ $category->category_name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <!-- Form Group-->
                            <div class="row gx-3 mb-3">
                            <div class="col-md-1"></div>
                                <label class="col-md-3 small mb-1" for="category_name">Category Name</label>
                                <input class="col-md-6" id="category_name" name="category_name" type="text">
                            </div>
                            <!-- Form Group-->
                            <div class="row gx-3 mb-3">
                                <div class="col-md-1"></div>
                                <label class="col-md-3 small mb-1" for="status-category">Status Category</label>
                                <div class="form-check form-switch col-md-6">
                                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked">
                                    <label class="form-check-label" for="flexSwitchCheckChecked"></label>
                                </div>
                            </div>

                            <!-- Save changes button-->
                            <div id="submit_buttom"class="button">
                                <span id="btn_submit"class="btn" >Save</span>
                            </div>
                        </div>

            </div>
        <div class="col-md-2"></div>
    </div>

    @section('scripts')
        <script src="{{ asset('js/admin/addcategory.js') }}"></script>
    @endsection
@endsection




