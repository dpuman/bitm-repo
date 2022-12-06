@extends('master')
@section('title')
    Create Category
@endsection
@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header">Update Categories</div>
                        <form action="{{route('category.update',$category->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <p class="text-success">{{Session::get('message')}}</p>
                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Category Name</label>
                                    <div class="col-md-9">
                                        <input value="{{$category->name}}" type="text" name="name" id="" class="form-control">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Category Description</label>
                                    <div class="col-md-9">
                                        <textarea name="description" id="" cols="30" rows="4" class="form-control">{{$category->description}}</textarea>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Image</label>
                                    <div class="col-md-9">
                                        <input type="file" name="image" id="" class="form-control">
                                        <img src="{{asset($category->image)}}" alt="" height="100" width="100">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit"  class="btn btn-outline-success px-5" value="Update">
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
