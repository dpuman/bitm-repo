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
                        <div class="card-header">Blogs Detail Information</div>
                        <p class="text-success">{{Session::get('message')}}</p>

                        <div class="card-body">
                            <table class="table table-striped table-hover table-bordered">
                                <tr>
                                    <th>Blog Id</th>
                                    <td>{{$blog->id}}</td>
                                </tr>
                                <tr>
                                    <th>Blog Title</th>
                                    <td>{{$blog->title}}</td>
                                </tr>
                                <tr>
                                    <th>Blog category</th>
                                    <td>{{$blog->category->name}}</td>
                                </tr>
                                <tr>
                                    <th>Blog Short Description</th>
                                    <td>{{$blog->short_description}}</td>
                                </tr>
                                <tr>
                                    <th>Blog Short Description</th>
                                    <td>{{$blog->long_description}}</td>
                                </tr>
                                <tr>
                                    <th>Blog Image</th>
                                    <td>
                                        <img src="{{asset($blog->image)}}" alt="" height="100" width="100">

                                    </td>
                                </tr>
                                <tr>
                                    <th>Blog Publication Status</th>
                                    <td>{{$blog->status == 1 ? 'Published' : "Unpublished" }}</td>
                                </tr>
                                <tr>
                                    <th>Total Hit Count</th>
                                    <td>{{$blog->hit_count}}</td>
                                </tr>

                            </table>
                        </div>



                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
