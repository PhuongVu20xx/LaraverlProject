@extends('layouts.adminlayout')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/admin/adminnavigatortab.css') }}">
    <link rel="stylesheet" href="{{ asset('css/form/addcategory.css') }}">
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
        <h3>Controller / Category / Edit Category</h3>
        <hr>
    </div>
@endsection

@section('bodynav')
    @include('form.formNavigator')
@endsection

@section('bodycontent')
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8" id="addcateform">
            <div class="card mb-4">
                <form action="/addcategory" method="post">
                    {{ csrf_field() }}
                    <div class="card-header">Add Category</div>
                    <div class="card-body">
                        <!-- Form Group-->
                        <div class="row gx-3 mb-3">
                            <div class="col-md-1"></div>
                            <label class="col-md-3 small mb-1" for="category-root">Category Root</label>
                            <select class="col-md-6" name="category_root" id="category">
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
                            <label class="col-md-3 small mb-1" for="category-name">Category Name</label>
                            <input class="col-md-6" id="category-name" name="category-name" type="text"
                                value="{{ $name }}">
                        </div>
                        <!-- Form Group-->
                        <div class="row gx-3 mb-3">
                            <div class="col-md-1"></div>
                            <label class="col-md-3 small mb-1" for="status-category">Status Category</label>
                                <div class="form-check form-switch col-md-6">
                                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
                                    <label class="form-check-label" for="flexSwitchCheckChecked"></label>
                                </div>
                            {{-- @if ($status == 1)
                                <label class="col-md-3 small mb-1" for="status-category">Status Category</label>
                                <div class="form-check form-switch col-md-6">
                                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
                                    <label class="form-check-label" for="flexSwitchCheckChecked"></label>
                                </div>
                            @else
                                <label class="col-md-3 small mb-1" for="status-category">Status Category</label>
                                <div class="form-check form-switch col-md-6">
                                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked">
                                    <label class="form-check-label" for="flexSwitchCheckChecked"></label>
                                </div>
                            @endif --}}

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
    @endsection

    @section('footer')
        @include('layouts.footer')
    @endsection

    @section('scripts')
        <script src="{{ asset('js/admin/category_controller.js') }}"></script>
    @endsection
