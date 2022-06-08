@extends('layouts.adminlayout')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/admin/adminnavigatortab.css') }}">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/form/response-tableadminfeedback.css') }}">
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
        <h3>Controller / Category / All Category</h3>
        <hr>
    </div>
@endsection

@section('bodynav')
    @include('form.formNavigator')
@endsection

@section('bodycontent')
    <section class="bg-white p-5">
        <div id="no-more-tables" class="content">
            <div class="clearfix"> </div>
            <div class="clearfix"></div>

            <div class="table-responsive ">
                <table id="myTable" class="table bg-white">
                    <thead class="bg-dark">
                        <tr>
                            <th class="text-light">ID</th>
                            <th class="text-light">Category Name</th>
                            <th class="text-light">Category Root</th>
                            <th class="text-light">Status</th>
                            <th class="text-light">Edit</th>
                        </tr>
                    </thead>

                    <tbody>
                        @if (count($allcategories) > 0)
                            <span hidden> {{ $i = 1 }}</span>
                            @foreach ($allcategories as $category)
                                <tr>
                                    <th>{{ $i++ }}</th>
                                    <td>
                                        <span id="category_name">{{ $category->category_name }}</span>

                                    </td>
                                    <td>{{ $category->category_root_name }}</td>
                                    @if ($category->category_status == 1)
                                        <td><input type="checkbox" id="category_status" class="category_status"
                                                name="category_status" data-id={{ $category->category_id }} checked></td>
                                    @else
                                        <td><input type="checkbox" id="category_status" class="category_status"
                                                name="category_status" data-id={{ $category->category_id }}></td>
                                    @endif
                                    <td><i id="edit_category" onclick="edit(event)"  data-id={{ $category->category_id }} class="fa-solid fa-pen-to-square" style="color:black"></i></td>
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
