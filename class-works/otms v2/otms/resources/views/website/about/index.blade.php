@extends('website.master')
@section('title')
    About Us
@endsection

@section('body')

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card card-body border-0 shadow">
                        <h3>Our Mission</h3>
                        <hr/>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto asperiores aspernatur error esse eveniet exercitationem expedita illum ipsum iste laboriosam magni minima, molestias officia possimus quos recusandae, reiciendis reprehenderit similique.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa eius iste magnam necessitatibus perferendis. Ab architecto, cupiditate deserunt dignissimos dolore, dolorem est eveniet ipsa ipsum laboriosam quia reiciendis, repellat reprehenderit?</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card card-body border-0 shadow">
                        <h3>Our Vission</h3>
                        <hr/>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto asperiores aspernatur error esse eveniet exercitationem expedita illum ipsum iste laboriosam magni minima, molestias officia possimus quos recusandae, reiciendis reprehenderit similique.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa eius iste magnam necessitatibus perferendis. Ab architecto, cupiditate deserunt dignissimos dolore, dolorem est eveniet ipsa ipsum laboriosam quia reiciendis, repellat reprehenderit?</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-white">
        <div class="container">
            <div class="row bg-danger">
                <div class="col">
                    <div class="card card-body border-0 text-center">
                        <h3>Our Instructor</h3>



                    </div>
                </div>
            </div>

            <div class="row mt-3">

                <div class="col-md-4">
                    <div class="card">
                        <img src="{{asset('/')}}website/images/team-3.jpg" alt="" class="card-img-top">
                        <div class="card-body">
                            <h4>Instructor Name</h4>
                            <p>Instructor Designation</p>
                        </div>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{asset('/')}}website/images/team-3.jpg" alt="" class="card-img-top">
                        <div class="card-body">
                            <h4>Instructor Name</h4>
                            <p>Instructor Designation</p>
                        </div>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{asset('/')}}website/images/team-3.jpg" alt="" class="card-img-top">
                        <div class="card-body">
                            <h4>Instructor Name</h4>
                            <p>Instructor Designation</p>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>


@endsection
