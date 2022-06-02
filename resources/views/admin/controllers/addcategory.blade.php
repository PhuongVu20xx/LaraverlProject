@extends('layouts.adminlayout')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/adminnavigatortab.css') }}">
@endsection

{{-- @section('header')
    @include('layouts.header')
    <div class="backgroundheader"></div>
@endsection --}}

@section('menu')
    @include('admin.navigator')
@endsection

@section('bodyheader')
    <div>
        <h3>Add Category</h3>
        <hr>
    </div>
@endsection

@section('bodynav')
    @include('admin.controllers.navigator')
@endsection

@section('bodycontent')
    <div>
        <form action="/addcategory" method="post">
            {{ csrf_field() }}
            <div>
                <h3>Add Category</h3>
                Category name: <input type="text" id="name" class="name" name="name_category"
                    placeholder="category">
                Category root :
                <select name="category" id="category">
                    @foreach ($categories as $category)
                        <option value="{{ $category->category_name }}" placeholder="Choose category">{{ $category->category_name }}
                        </option>
                    @endforeach
                </select>
                Deactivate category : <input type="checkbox" class="checkbox" id="checkbox" name="check_box">
                <input type="submit" id="submit" class="submit" value="Submit">
            </div>
        </form>

        <section class="bg-white p-5">
            <div id="no-more-tables" class="content">
                <div class="clearfix"> </div>
                <div class="clearfix"></div>
                @if (count($categories) > 0)
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
                                @foreach ($categories as $category)
                                    <tr>
                                        <th>{{ $i++ }}</th>
                                        <td>{{ $category->category_name }}</td>
                                        <td>{{ $category->category_root }}</td>
                                        @if ($category->category_status == 1)
                                            <td data-title="Status"><input type="checkbox" class="category_status"
                                                    name="category_status" checked></td>
                                        @else
                                            <td data-title="Status"><input type="checkbox" class="category_status"
                                                    name="category_status" checked></td>
                                        @endif
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @endif
            </div>
    </div>
@endsection

@section('footer')
    @include('layouts.footer')
@endsection

@section('scripts')
    <script src="{{ asset('js/addcategory.js') }}"></script>
@endsection
