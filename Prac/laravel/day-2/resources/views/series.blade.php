@extends('master')

@section('title')
Series
@endsection

@section('body')
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header">Series</div>
                <div class="card-body">
                    <form action="{{route('generate-series')}}" method="post">
                        @csrf
                        <div class="row mb-3">
                            <label for="" class="col-md-3">Start Number</label>
                            <div class="col-md-9">
                                <input type="number" name="start_number" id="" class="form-control">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="" class="col-md-3">End Number</label>
                            <div class="col-md-9">
                                <input type="number" name="end_number" id="" class="form-control">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="" class="col-md-3">Series</label>
                            <div class="col-md-9">
                                <textarea class="form-control"  id="" cols="30" rows="4">{{Session::get('series')}}</textarea>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="" class="col-md-3"></label>
                            <div class="col-md-9">
                                <input type="submit" value="Create a series" class="btn btn-success">
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
