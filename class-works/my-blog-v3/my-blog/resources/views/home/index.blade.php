@extends('master')
@section('title')
    Home
@endsection
@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row ">
                @foreach($blogs as $blog)
                    <div class="col-md-4 mb-3">
                        <div class="card h-100">
                            <img src="{{asset($blog->image)}}" alt="" class="card-img-top" height="300px">
                            <div class="card-body">
                                <p class="fw-bold text-secondary">{{$blog->title}}</p>
                                <a href="{{route('blog-detail',['id'=>$blog->id])}}" class="btn btn-outline-success px-5">Read more</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
