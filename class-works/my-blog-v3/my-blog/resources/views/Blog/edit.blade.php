@extends('master')
@section('title')
    Edit Category
@endsection
@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header">Edit Blog</div>
                        <form action="{{route('blog.update',$blog->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="card-body">
                                <p class="text-success">{{Session::get('message')}}</p>
                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Category Name</label>
                                    <div class="col-md-9">
                                        <select class="form-control" name="category_id" id="">
                                            <option value="">-- Category Name --</option>
                                            @foreach($categories as $cat)
                                                <option value="{{$cat->id}}" {{$cat->id == $blog->category_id ? 'selected' : ''}} >{{$cat->name}}</option>
                                            @endforeach
                                        </select>

                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Blog Title</label>
                                    <div class="col-md-9">
                                        <input value="{{$blog->title}}" type="text" name="title" id="" class="form-control">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Short Description</label>
                                    <div class="col-md-9">
                                        <textarea name="short_description" id="" cols="30" rows="4" class="form-control">{{$blog->short_description}}</textarea>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Long Description</label>
                                    <div class="col-md-9">
                                        <textarea name="long_description" id="" cols="30" rows="4" class="form-control">{{$blog->long_description}}</textarea>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Image</label>
                                    <div class="col-md-9">
                                        <input type="file" name="image" id="" class="form-control">
                                        <img src="{{asset($blog->image)}}" alt="" height="100" width="100">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit"  class="btn btn-outline-success px-5" value="Update Blog">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
