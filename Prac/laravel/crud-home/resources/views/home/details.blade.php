@extends('master')

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{asset($product->image)}}" class="card-img" alt="my image" height="">
                </div>
                <div class="col-md-6">
                    <div class="card card-body">

                        <h4>{{$product->name}}</h4>
                        <p>{{$product->price}}</p>
                        <p>{{$product->description}}</p>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
