@extends('website.master')
@section('title')
    Training Detail
@endsection

@section('body')
    <section class="py-5 bg-white">
        <div class="container">


            <div class="row mb-3">
                <div class="card mx-0 ">
                    <div class="row">
                        <div class="col-md-6  card-body">
                            <img src="{{asset('/')}}website/images/blog-1.jpg" alt="" class="card-img">
                        </div>

                        <div class="col-md-6">
                            <div class="card-body">
                                <div class="card-header bg-transparent text-center"><h3>Course details</h3></div>
                                <div class="card-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.  laboriosam molestiae odio suscipit unde vel, velit veritatis vero voluptatem voluptatibus.</p>

                                    <div class="row mb-3">
                                        <label class="col-md-3"><h6>Course Name :</h6></label>
                                        <div class="col-md-9">
                                            <h6>PHP with Laravel Framework</h6>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-md-3"><h6>Teacher Name :</h6></label>
                                        <div class="col-md-9">
                                            <h6>Niaz Ahmed Nayeem</h6>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-md-3"><h6>Start Date :</h6></label>
                                        <div class="col-md-9">
                                            <h6>01-January-2023</h6>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-md-3"><h6>End Date :</h6></label>
                                        <div class="col-md-9">
                                            <h6>30-June-2023</h6>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-md-3"><h6>Course Duration :</h6></label>
                                        <div class="col-md-9">
                                            <h6>6 months</h6>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-md-3"><h6>Course fee :</h6></label>
                                        <div class="col-md-9">
                                            <h6>TK. 6000</h6>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-md-3"><h6>Total Class :</h6></label>
                                        <div class="col-md-9">
                                            <h6>120</h6>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-md-3"></label>
                                        <div class="col-md-9">
                                            <a href="" class="btn btn-info shadow">Enroll Now</a>
                                        </div>
                                    </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>


            <div class="row mt-3">
                <div class="col">
                    <div class="card border-0 shadow h-100">
                        <div class="bg-dark text-white text-center py-1 display-6">Training Detail</div>
                        <div class="card-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, aut culpa eveniet facere in incidunt maxime modi, mollitia natus nemo neque nihil nisi obcaecati odit praesentium repellendus, temporibus totam unde.</p>

                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, aut culpa eveniet facere in incidunt maxime modi, mollitia natus nemo neque nihil nisi obcaecati odit praesentium repellendus, temporibus totam unde.</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>




@endsection
