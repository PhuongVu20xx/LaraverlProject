@extends('layouts.layout')

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/dataTables.jqueryui.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/scroller/2.0.5/css/scroller.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/searchbuilder/1.3.2/css/searchBuilder.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
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
<div class="container mb-5 mt-3">
    <table id="myTable" class="table table-sm table-striped" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Content</th>
                <th>Time</th>
            </tr>
        </thead>

        <tbody>
            @for ($i = 0; $i <= 100; $i++) <tr>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/poper.js/1.14.7/umd/poper.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.jqueryui.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/scroller/2.0.5/js/dataTables.scroller.min.js"></script>
<script src="https://cdn.datatables.net/searchbuilder/1.3.2/js/dataTables.searchBuilder.min.js"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/feedback.js')}}"></script>

<script>
$('.feedbacktable').DataTable({});
</script>
@endsection