@extends('master')
@section('bitm')
    Section
@endsection()

@section('body')
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header">My Calculator</div>
                        <div class="card-body">
                            <form action="{{route('calculator')}}" method="POST">
                                @csrf
                                <div class="row mb-3">
                                    <label for="" class="col-md-3">First Number</label>
                                    <div class="col-md-9">
                                        <input type="number" name="first_number" id="" class="form-control">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Second Number</label>
                                    <div class="col-md-9">
                                        <input type="number" name="second_number" id="" class="form-control">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Your Choice</label>
                                    <label for=""><input type="radio" name="choice" value="+" checked> + </label>
                                    <label for=""><input type="radio" name="choice" value="-"> - </label>
                                    <label for=""><input type="radio" name="choice" value="*"> * </label>
                                    <label for=""><input type="radio" name="choice" value="/"> / </label>
                                    <label for=""><input type="radio" name="choice" value="%"> % </label>
                                </div>

                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Result</label>
                                    <div class="col-md-9">
                                        <input type="text"  id="" class="form-control" readonly value="{{Session::get('result')}}">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="" class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit"  id="" class="btn btn-outline-success" value="Make Result">
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


