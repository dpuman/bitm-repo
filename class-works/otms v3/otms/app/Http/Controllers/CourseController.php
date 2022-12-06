<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        return view('teacher.course.index');
    }
    public function create(Request $request)
    {
        return $request->all();
    }
    public function manage()
    {
        return view('teacher.course.manage');
    }
    public function edit($id)
    {
        return view('teacher.course.edit');
    }

    public function update(Request $request,$id)
    {

    }

    public function delete($id)
    {

    }
}
