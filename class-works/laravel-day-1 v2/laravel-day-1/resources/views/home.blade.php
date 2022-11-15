@extends('master')
@section('bitm')
        Home Page
@endsection

@section('body')
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                @foreach($blogs as $blog)
                <div class="col-md-3 mb-4">
                    <div class="card h-100">
                        <img src="{{asset('/')}}images/{{$blog['image']}}" alt="" height="250">
                        <div class="card-body">
                            <h4>{{$blog['title']}}</h4>
                            <p>{{$blog['short_description']}}</p>
                            <hr/>
                            <a href="{{route('blog-detail',['id'=>$blog['id']])}}" class="btn btn-outline-success">Read More</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection()

