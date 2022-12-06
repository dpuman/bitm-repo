@extends('master')

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                @foreach($products as $product)
                    <div class="col-md-3 mb-3">
                        <div class="card">
                            <img src="{{asset($product->image)}}" alt="my image" height="220">
                            <div class="card-body">
                                <h4>{{$product->name}}</h4>
                                <p>{{$product->price}}</p>
                                <hr/>
                                <a href="{{route('product.detail',['id'=>$product->id])}}" class="btn btn-outline-success px-5">Details</a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
@endsection
