@extends('master')
@section('title')
    Create Category
@endsection
@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-10 mx-auto">
                    <div class="card">
                        <div class="card-header">All Categories</div>
                        <p class="text-success">{{Session::get('message')}}</p>

                        <div class="card-body">
                            <table class="table table-striped table-hover table-bordered">
                                <thead>
                                    <tr>
                                        <th>SL NO</th>
                                        <th>Name</th>
                                        <th>Descriptions</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                @foreach($categories as $cat)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$cat->name}}</td>
                                        <td>{{$cat->description}}</td>
                                        <td>
                                            <img src="{{asset($cat->image)}}" alt="" height="100" width="100">
                                        </td>
                                        <td>
                                            <a href="{{route('category.edit',['id'=>$cat->id])}}" class="btn btn-outline-success btn-sm">Edit</a>
                                            <a href="{{route('category.delete',['id'=>$cat->id])}}" class="btn btn-outline-danger btn-sm">Delete</a>
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
