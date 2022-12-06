@extends('master')
@section('bitm')
    About Page
@endsection


@section('body')
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header text-center text-capitalize bg-dark text-white fw-bold">Full name program</div>
                        <div class="card-body">
                            <form action="{{route('full-name')}}" method="POST">
                                @csrf
                                <div class="row mb-3">
                                    <label for="" class="col-md-3">First Name</label>
                                    <div class="col-md-9">
                                        <input type="text" name="first_name" id="" class="form-control">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Last Name</label>
                                    <div class="col-md-9">
                                        <input type="text" name="last_name" id="" class="form-control">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Full Name</label>
                                    <div class="col-md-9">
                                        <input type="text" readonly id="" class="form-control" value="{{Session::get('message')}}">
                                    </div>
                                </div>

                                <div class="row ">
                                    <label for="" class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" name="" id="" class="btn btn-outline-success" value="Make Full Name">
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection()

