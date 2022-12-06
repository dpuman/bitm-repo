@extends('website.master')
@section('title')
    Contact
@endsection

@section('body')



    <section class="py-5 bg-white">
        <div class="container">


            <div class="row mt-3">
                <div class="col-md-6">
                    <div class="card border-0 shadow h-100">
                        <div class="bg-dark text-white text-center py-1 display-6">Contact US</div>
                        <div class="card-body">

                            <div class="row">
                                <div class="col-md-2">
                                    <i class="fa-solid fa-location-dot fa-2x"></i>
                                </div>
                                <div class="col-md-10">
                                    <h4>Address</h4>
                                    <address>
                                        House No - 420, Road No - 520
                                        Dhanmondi, Dhaka - 1215
                                    </address>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <i class="fa-solid fa-phone fa-2x"></i>
                                </div>
                                <div class="col-md-10">
                                    <h4>Phone</h4>
                                    <p>01521426919</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <i class="fa-solid fa-envelope fa-2x"></i>
                                </div>
                                <div class="col-md-10">
                                    <h4>Email</h4>
                                    <p>sarkermajid21.bd@gmail.com</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card border-0 shadow h-100">
                        <div class="bg-dark text-white text-center py-1 display-6"> Send Message</div>
                        <div class="card-body">
                            <form action="" method="post"  >
                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Full Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="name">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Email Address</label>
                                    <div class="col-md-9">
                                        <input type="email" class="form-control" name="email">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Phone Number</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="phone">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Message</label>
                                    <div class="col-md-9">
                                        <textarea name="message" class="form-control" id=""  cols="30" rows="4"></textarea>
                                    </div>
                                </div>


                                <div class="row mb-3">
                                    <label for="" class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-success w-100" name="" value="Send Message">
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-md-12">
                    <div class="card border-0 shadow h-100">
                        <div class="bg-dark text-white text-center py-1 display-6">Our Location</div>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.5188989286034!2d90.42688361488202!3d23.76452969415353!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c7fddb02d89f%3A0xac8ede4a43ad5cf6!2sMicroDeft!5e0!3m2!1sen!2sbd!4v1670167276558!5m2!1sen!2sbd" width="auto" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>




@endsection
