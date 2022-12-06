@extends('master')
@section('title')
    Home
@endsection
@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row ">

                    <div class="col-md-12">
                        <div class="card card-body">
                            <h1>{{$blog->title}}</h1>
                            <img src="{{asset($blog->image)}}" alt="">
                            <p class="py3">{{$blog->short_description}}</p>
                            <p>{{$blog->long_description}}</p>
                            <hr>
                            <h4 class="text-center">Write Your Comment</h4>
                            <hr>
                            <div class="row">
                                <div class="col-md-6 mx-auto">
                                    <div class="card card-body">
                                        <form method="post" action="{{route('new-blog-comment',['id'=>$blog->id])}}">
                                            @csrf
                                            <div class="row mb-3">
                                                <input class="form-control" name="name" id="" >
                                            </div>

                                            <div class="row mb-3">
                                                <textarea class="form-control" name="comment" id="" cols="30" rows="8"></textarea>
                                            </div>
                                            <div class="row mb-3">
                                                <input type="submit" value="Submit" class="btn btn-success w-100">
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>

            </div>
        </div>
    </section>
@endsection
