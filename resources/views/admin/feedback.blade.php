@extends('layouts.layout')

@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css">
@endsection

@section('header')
@include('layouts.header')
@endsection

@section('menu')
@include('admin.navigator')
@endsection

@section('content')
<div>
    <h3>Feed Back</h3>
</div>
<div class="table-responsive">
    <table id="table-feedback" class="table table-sm table-striped" style="width:100%">
        <thead class="table-dark">
            <tr scope="col">
                <th>ID</th>
                <th>Name</th>
                <th>Content</th>
                <th>Time</th>
            </tr>
        </thead>

        <tbody>
            @for ($i = 0; $i <= 100; $i++)
                <tr scope="row">
                <th>{{ $i }} </th>
                <td>{{ $i }} </td>
                <td>{{ $i }} </td>
                <td>{{ $i }} </td>
                </tr>
            @endfor
        </tbody>

    </table>
</div>
@endsection

@section('footer')
@include('layouts.footer')
@endsection
@section('javascript')
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.bootstrap5.js"></script>
<script src="{{asset('js/feedback.js')}}"></script>
@endsection