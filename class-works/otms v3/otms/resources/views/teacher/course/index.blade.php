@extends('teacher.master')

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Add Course Form</h4>
                    <p class="text-center text-success">{{Session::get('message')}}</p>

                    <form action="{{route('course.create')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row mb-4">
                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Course Category</label>
                            <div class="col-sm-9">
                                <select name="category" id="" class="form-control">
                                    <option value="" selected>-- Select Course Category --</option>
                                    <option value="cat_name" >Category Name</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Course Title</label>
                            <div class="col-sm-9">
                                <input type="text" name="title" class="form-control" id="horizontal-firstname-input">
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label for="horizontal-obj-input" class="col-sm-3 col-form-label">Course Objective</label>
                            <div class="col-sm-9">
                                <textarea  name="objective" class="form-control" id="horizontal-obj-input"></textarea>
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label for="horizontal-des-input" class="col-sm-3 col-form-label">Course  Description</label>
                            <div class="col-sm-9">
                                <textarea  name="description" class="summernote" id="horizontal-des-input"></textarea>
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label for="horizontal-date-input" class="col-sm-3 col-form-label">Starting Date</label>
                            <div class="col-sm-9">
                                <input type="date" name="starting_date"  class="form-control" id="horizontal-date-input">
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label for="horizontal-fee-input" class="col-sm-3 col-form-label">Course Fee</label>
                            <div class="col-sm-9">
                                <input type="number" name="fee"  class="form-control" id="horizontal-fee-input">
                            </div>
                        </div>



                        <div class="form-group row mb-4">
                            <label for="horizontal-image-input" class="col-sm-3 col-form-label">Image</label>
                            <div class="col-sm-9">
                                <input type="file"  name="image"  class="form-control-file" id="horizontal-image-input">
                            </div>
                        </div>

                        <div class="form-group row justify-content-end">
                            <div class="col-sm-9">

                                <div>
                                    <button type="submit" class="btn btn-primary w-md">Create New Course</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
