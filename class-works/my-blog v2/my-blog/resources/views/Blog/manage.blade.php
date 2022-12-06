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
                        <div class="card-header">All Blogs</div>
                        <p class="text-success">{{Session::get('message')}}</p>

                        <div class="card-body">
                            <table class="table table-striped table-hover table-bordered">
                                <thead>
                                <tr>
                                    <th>SL NO</th>
                                    <th>title</th>
                                    <th>Category</th>
                                    <th>image</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($blogs as $blog)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$blog->title}}</td>
                                        <td>{{$blog->category->name}}</td>
                                        <td>
                                            <img src="{{asset($blog->image)}}" alt="" height="100" width="100">
                                        </td>
                                        <td>{{$blog->status == 1 ? 'Published' : 'Unpublished'}}</td>

                                        <td style="">
                                            <a href="{{route('blog.show',$blog->id)}}" class="btn btn-outline-success btn-sm">Detail</a>
                                            <a href="{{route('blog.edit',$blog->id)}}" class="btn btn-outline-success btn-sm">Edit</a>
                                            <form action="{{route('blog.destroy', $blog->id)}}" method="post" onsubmit="return confirm('Are you sure?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-outline-danger btn-sm">Delete</button>
                                            </form>
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
