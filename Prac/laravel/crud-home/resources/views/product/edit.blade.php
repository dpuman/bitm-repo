@extends('master')
@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header">Edit Product Form</div>
                        <div class="card-body">

                            <p class="text-success">{{Session::get('message')}}</p>
                            <form action="{{route('product.update',['id'=>$product->id])}}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="row mb-3">
                                    <label class="col-md-3" for="">Product Name</label>
                                    <div class="col-md-9">
                                        <input value="{{$product->name}}" type="text" name="name" id="" class="form-control">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-3" for="">Product Description</label>
                                    <div class="col-md-9">
                                        <textarea class="form-control" name="description" id="" cols="30" rows="4">{{$product->description}}</textarea>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-3" for="">Product Price</label>
                                    <div class="col-md-9">
                                        <input value="{{$product->price}}" type="number" name="price" id="" class="form-control">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-3" >Product Image</label>
                                    <div class="col-md-9">
                                        <input type="file" name="image" id="" class="form-control">
                                        <img src="{{asset($product->image)}}" alt="" height="150" width="150">

                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-3" ></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-outline-success px-5" value="Update Product">

                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
