@extends('layouts.adminlayout')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/adminnavigatortab.css') }}">
    <link rel="stylesheet" href="{{ asset('css/addcategory-form.css') }}">
@endsection

@section('header')
    @include('layouts.header')
    <div class="backgroundheader"></div>
@endsection

@section('menu')
    @include('admin.menu')
@endsection

@section('bodyheader')
    <div class="form-title">
        <h3>Add Category</h3>
        <hr>
    </div>
@endsection

@section('bodynav')
    @include('admin.navigator')
@endsection

@section('bodycontent')
    <div>
        <div class="col-md-8">
            <div class="card mb-4">
                <form action="/addcategory" method="post">
                    {{ csrf_field() }}
                        <div class="cart-header"></div>
                        <div class="cart-body">
                            <!-- Form Group (email address)-->
                            <div class="mb-3">
                                <label class="small mb-1" for="category-name">Category Name</label>
                                <input class="form-control" id="category-name" name="category-name" type="text">
                            </div>
                             <!-- Form Group (email address)-->
                             <div class="mb-3">
                                <label class="small mb-1" for="category-root">Category Root</label>
                                <select name="category_root" id="category">
                                    @foreach ($categories as $category)
                                         <option value="{{ $category->category_name }}" placeholder="Choose category">
                                            {{ $category->category_name }}
                                         </option>
                                     @endforeach
                                </select>
                            </div>
                            <!-- Form Group (email address)-->
                            <div class="mb-3">
                                <label class="small mb-1" for="status-category">Status Category</label>
                                <input class="form-control" id="status-category" name="status-category" type="checkbox">
                            </div>
                            <!-- Save changes button-->
                            <div class="button">
                                <button class="btn" type="submit">Save</button>
                            </div>
                        </div>
                </form>
            </div>
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
                                @foreach ($allCategories as $category)
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
