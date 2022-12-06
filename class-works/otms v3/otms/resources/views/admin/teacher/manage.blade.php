@extends('admin.master')

@section('body')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">All Teacher Information</h4>
                    <p class="card-title-desc">{{Session::get('message')}}
                    </p>

                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th>SL NO</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Mobile</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>


                        <tbody>
                        @foreach($teachers as $teacher)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$teacher->name}}</td>
                            <td>{{$teacher->email}}</td>
                            <td>{{$teacher->mobile}}</td>
                            <td>
                                <img src="{{asset('/')}}{{$teacher->image}}" class="img-fluid" alt="" height="100" width="100" >
                            </td>
                            <td>
                                <a href="{{route('teacher.edit',['id'=>$teacher->id])}}" class=" me-3 btn btn-success btn-sm float-left">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <form action="{{route('teacher.delete',['id'=>$teacher->id])}}" method="post" >
                                    @csrf
                                    <button  type="submit" class="  btn btn-danger btn-sm float-left">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection
