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
        <form action="/addcategory" method="post">
            {{ csrf_field() }}
            <table class="addcategory-form">

                <tr class="category-name">
                    <th><span>Category name </span></th>
                    <th><input type="text" id="name" class="name" name="category_name" placeholder="Category"></th> 
                </tr>

                <tr class="category-root">
                    <th><span>Category root</span></th>
                    <th>
                        <select name="category_root" id="category">
                            @foreach ($categories as $category)
                                <option value="{{ $category->category_name }}" placeholder="Choose category">
                                    {{ $category->category_name }}
                                </option>
                            @endforeach
                        </select>
                    </th>
                </tr>

                <tr class="category-status">
                    <th><span>Status category</span></th>
                    <th><input type="checkbox" class="checkbox" id="checkbox" name="status"></th>
                </tr>

            </table>
            <div class="submit-btn">
                <input type="submit" id="submit" class="submit" value="Submit">
            </div>
        </form>

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
