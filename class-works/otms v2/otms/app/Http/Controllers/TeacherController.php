<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index(){
        return view('admin.teacher.index');
    }

    public function create(Request $request){

        Teacher::createTeacher($request);
        return redirect('/teacher/manage')->with('message',"Teacher Created successfully");
        return $request->all();
    }

    public function manage(){
        return view('admin.teacher.manage');

    }
}
