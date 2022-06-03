@extends('layouts.adminlayout')


@section('css')
    <link rel="stylesheet" href="{{ asset('css/adminnavigatortab.css') }}">
    <link rel="stylesheet" href="{{ asset('css/addproduct-form.css') }}">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/respose-tableadminfeedback.css') }}">
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
        <h3>Add Product</h3>
        <hr>
    </div>
@endsection

@section('bodynav')
    @include('admin.navigator')
@endsection

@section('bodycontent')
    <div>
        <!-- <form action="/addcategory" method="post">
            <div class="searchproduct" id="searchproduct">
                <div>
                    ID: <input type="text" id="id" class="id">
                    Name: <input type="text" id="name" class="name">
                    <input type="submit" id="submit" class="submit" value="Search">
                </div>
            </div>
            <div class="addproduct" id="addproduct">
                <div>
                    Name: <input type="text" id="name" class="name">
                    Producer: <input type="text" id="producer" class="producer">
                    Unit: <input type="text" id="unit" class="unit">
                    Infomation: <input type="text" id="infomation" class="information">
                    <input type="submit" id="submit" class="submit" value="Add">
                </div>
            </div>
        </form> -->
        <div class="row">
            <div class="col-4">
                <h5>Add Product</h5>
            </div>
            <div class="col-8">
                <form action="">  
                    <div class="product">
                        <div class="p1">
                            <label for="choose">Choose Cate &emsp;&nbsp;</label> 
                                    <select name="choose" id="choose">
                                        <option value="choose1">choose1</option>
                                        <option value="choose2">choose2</option>
                                    </select>
                            </div> 

                            <div class="p2">
                                <p>Product Name </p>
                                <input type="text" name="choose" placeholder="Product Name ">
                            </div> 

                            <div class="p3">
                                <p >Price </p><input type="text" name="status" placeholder="Price">
                            </div>
                            
                            <div class="p4">
                            <label for="unit">Unit &emsp; &emsp;&emsp; &emsp;</label>
                                <select name="unit" id="unit" form="unit">
                                    <option value="unit1">unit1</option>
                                    <option value="unit2">unit2</option>   
                                </select>
                            </div>

                            <div class="p5">
                                <p >Information </p>
                                <input type="text" name="status" placeholder="Information">
                            </div>

                            <div class="p6">
                                <p >Img </p>
                                <input type="file" name="img">
                            </div>

                            <div class="p7">
                                <p > Status</p>
                                <input type="text" name="status" placeholder="status">
                            </div>

                            <div class="submit">
                                <button  type="submit" class="button1"> Save</button>
                            </div>
                    </div>
                </form>
            </div>
        </div>
        <section class="bg-white p-5">
            <div id="no-more-tables" class="content">
                <div class="clearfix"> </div>
                <div class="clearfix"></div>
                <div class="table-responsive ">
                    <table id="myTable" class="table bg-white">
                        <thead class="bg-dark">
                            <tr>
                                <th class="text-light">ID</th>
                                <th class="text-light">Name Product</th>
                                <th class="text-light">Producer</th>
                                <th class="text-light">Price</th>
                                <th class="text-light">Unit</th>
                                <th class="text-light">Total Quantity</th>
                                <th class="text-light">Information</th>
                            </tr>
                        </thead>

                        <tbody>
                            @for ($i = 0; $i <= 100; $i++)
                                <tr>
                                    <td data-title="Id">ID {{ $i }} </td>
                                    <td data-title="Name">Name Product {{ $i }}</td>
                                    <td data-title="Producer">Producer {{ $i }}</td>
                                    <td data-title="Price">Price {{ $i }}</td>
                                    <td data-title="Unit">Unit {{ $i }}</td>
                                    <td data-title="TotalQuantity">Total Quantity {{ $i }}</td>
                                    <td data-title="Information">Information {{ $i }}</td>
                                </tr>
                            @endfor
                        </tbody>
                    </table>
                </div>
            </div>
        </Section>
    </div>
@endsection

@section('footer')
    @include('layouts.footer')
@endsection


@section('scripts')
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
    <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="//cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('js/tableadminfeedback.js') }}"></script>
@endsection
