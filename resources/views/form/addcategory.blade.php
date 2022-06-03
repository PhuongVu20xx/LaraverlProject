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
        <h3>Controller / Category / Add Category</h3>
        <hr>
    </div>
@endsection

@section('bodynav')
    <div class="col-sm-12">
        <ul class="nav nav-tabs">
            <li><a class="text-decoration-none" href="/addcategory" data-toggle="tab">Add Category</a></li>
            <li><a class="text-decoration-none" href="/allproduct" data-toggle="tab">All Category</a></li>
        </ul>
    </div>
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
                                <input class="col-md-6" id="category-name" name="category-name" type="text">
                            </div>
                            <!-- Form Group-->
                            <div class="row gx-3 mb-3">
                                <div class="col-md-1"></div>
                                <label class="col-md-3 small mb-1" for="status-category">Status Category</label>
                                <div class="form-check form-switch col-md-6">
                                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
                                    <label class="form-check-label" for="flexSwitchCheckChecked"></label>
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
                @if (count($allCategories) > 0)
                    <span hidden> {{ $i = 1 }}</span>
                    <div class="table-responsive ">
                        <table id="myTable" class="table bg-white">
                            <thead class="bg-dark">
                                <tr>
                                    <th class="text-light">ID</th>
                                    <th class="text-light">Category Name</th>
                                    <th class="text-light">Category Root</th>
                                    <th class="text-light">Status</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($allcategories as $category)
                                    <tr>
                                        <th>{{ $i++ }}</th>
                                        <td>{{ $category->category_name }}</td>
                                        <td>{{ $category->category_root_name }}</td>
                                        @if ($category->category_status == 1)
                                            <td><input type="checkbox" id="category_status"class="category_status"name="category_status" data-id={{$category->category_id}} checked></td>
                                        @else
                                            <td><input type="checkbox" id="category_status" class="category_status"name="category_status"data-id={{$category->category_id}}></td>
                                        @endif
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @endif
            </div>
        </section>
@endsection

@section('footer')
    @include('layouts.footer')
@endsection

@section('scripts')
    <script src="{{ asset('js/admin/category_controller.js') }}"></script>
@endsection
