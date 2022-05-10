@extends('layouts.layout')

@section('header')
@include('layouts.header')
@endsection

@section('menu')
@include('admin.navigator')
@endsection

@section('content')
<div>
    <h3>Latest Order</h3>
</div>
<div>
    <table class="table">
        <tr scope="col">
            <th>ID</th>
            <th>Name</th>
            <th>Content</th>
            <th>Time</th>
        </tr>
        @for ($i = 0; $i <= 10; $i++) 
        <tr scope="row">
            <td>{{ $i }} </td>
            <td>{{ $i }} </td>
            <td>{{ $i }} </td>
            <td>{{ $i }} </td>
        </tr>
        @endfor
    </table>
</div>
@endsection

@section('footer')
@include('layouts.footer')
@endsection
