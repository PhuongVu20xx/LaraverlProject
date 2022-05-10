@extends('layouts.layout')

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
<div>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Content</th>
        </tr>
        <tr>
            <td>1</td>
            <td>2</td>
            <td>3</td>
        </tr>
    </table>
</div>
@endsection

@section('footer')
@include('layouts.footer')
@endsection