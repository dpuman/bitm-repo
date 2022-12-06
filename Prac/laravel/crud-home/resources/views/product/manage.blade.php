@extends('master')

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-10  mx-auto">
                    <div class="card">
                        <div class="card-header">All Product Form</div>
                        <div class="card-body">

                            <p class="text-success">{{Session::get('message')}}</p>

                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>SL NO</th>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($products as $product)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$product->name}}</td>
                                        <td>{{$product->price}}</td>
                                        <td>{{$product->description}}</td>
                                        <td>
                                            <img src="{{asset($product->image)}}" height="50" width="70" alt="">
                                        </td>
                                        <td>
                                            <a href="{{route('product.edit',['id'=>$product->id])}}" class="btn btn-success btn-sm">Edit</a>
                                            <a href="{{route('product.delete',['id'=>$product->id])}}" class="btn btn-danger btn-sm" onclick="{return confirm('Are you sure to delere this')} ">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

