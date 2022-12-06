@extends('master')
@section('bitm')
    Detail Page
@endsection()
@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="card card-body">
                        <img src="{{asset('/')}}images/{{$blog['image']}}" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                   <div class="card card-body">
                       <h1 class="text-capitalize">{{$blog['title']}}</h1>
                       <p>{{$blog['short_description']}}</p>
                       <p>{{$blog['long_description']}}</p>
                   </div>
                </div>
            </div>
        </div>
    </section>
@endsection
