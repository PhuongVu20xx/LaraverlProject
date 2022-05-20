@extends('layouts.layout')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/adminnavigatortab.css') }}">
@endsection

@section('header')
    @include('layouts.header')
    <div class="backgroundheader"></div>
@endsection

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
            {{csrf_field()}}
            <div>
                <h3>Add Category</h3>

                Name category: <input type="text" id="name" class="name" name="category">
                <input type="submit" id="submit" class="submit" value="Submit">
            </div>
            <div>
                <h3>Add Sub Category</h3>

                Name sub category: <input type="text" id="name" class="name" name="subcategory">
                Name category: <input type="text" id="name" class="name" name="category">
                <input type="submit" id="submit" class="submit" value="Submit">
            </div>
            <div>
                <h3>Check Avaiable Category</h3>
                Name category: <input type="text" id="name" class="name" name="category">
                <input type="submit" id="submit" class="submit" value="Submit">
            </div>
            <div>
                <h3>Deactivate Category</h3>
                Name category: <input type="text" id="name" class="name" name="category">
                Activate: <input type="checkbox" id="name" class="name" name="category">
                <input type="submit" id="submit" class="submit" value="Submit">
            </div>
        </form>

        @if (count($categories) > 0)

            <section class="bg-white p-5">
                <div id="no-more-tables" class="content">
                    <div class="clearfix"> </div>
                    <div class="clearfix"></div>
                    <div class="table-responsive ">
                        <table id="myTable" class="table bg-white">
                            <thead class="bg-dark">
                                <tr>
                                    <th class="text-light">ID</th>
                                    <th class="text-light">Name</th>
                                    <th class="text-light">Status</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($categories as $category)
                                    <tr>
                                        <td data-title="Content">$category->name </td>
                                        <td data-title="Name">$category->sub_category</td>
                                        @if($category->status==1)
                                        <td data-title="Status"><input type="checkbox" class="category_status"name="category_status" checked></td>
                                        @else
                                        <td data-title="Status"><input type="checkbox" class="category_status"name="category_status" checked></td>
                                        @endif
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
    </div>
@endsection

@section('footer')
    @include('layouts.footer')
@endsection
