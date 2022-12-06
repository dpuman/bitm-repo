@extends('admin.master')

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Update Teacher Form</h4>
                    <p class="text-center text-success">{{Session::get('message')}}</p>

                    <form action="{{route('teacher.update',["id"=>$teacher->id])}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row mb-4">
                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Teacher Name</label>
                            <div class="col-sm-9">
                                <input value="{{$teacher->name}}" type="text" name="name" class="form-control" id="horizontal-firstname-input">
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label for="horizontal-email-input" class="col-sm-3 col-form-label">Teacher Email</label>
                            <div class="col-sm-9">
                                <input value="{{$teacher->email}}" type="email" name="email" class="form-control" id="horizontal-email-input">
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label for="horizontal-password-input" class="col-sm-3 col-form-label">Password</label>
                            <div class="col-sm-9">
                                <input type="password" value="" name="password" class="form-control" id="horizontal-password-input">
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label for="horizontal-phone-input" class="col-sm-3 col-form-label">Mobile Number</label>
                            <div class="col-sm-9">
                                <input value="{{$teacher->mobile}}" type="number" name="mobile"  class="form-control" id="horizontal-phone-input">
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label for="horizontal-address-input" class="col-sm-3 col-form-label">Address</label>
                            <div class="col-sm-9">
                                <textarea  name="address"  class="form-control" id="horizontal-address-input">{{$teacher->name}}</textarea>
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label for="horizontal-image-input" class="col-sm-3 col-form-label">Image</label>
                            <div class="col-sm-9">
                                <input type="file"  name="image"  class="form-control-file mb-2" id="horizontal-image-input">
                                <img src="{{asset('/')}}{{$teacher->image}}" alt="" width="100" height="100">
                            </div>
                        </div>

                        <div class="form-group row justify-content-end">
                            <div class="col-sm-9">

                                <div>
                                    <button type="submit" class="btn btn-primary w-md">Update Teacher</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
