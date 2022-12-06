<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public $teachers,$teacher;
    public function index()
    {
        return view('admin.teacher.index');
    }

    public function create(Request $request)
    {
        Teacher::createTeacher($request);
        return redirect('/teachers')->with('message',"Teacher Created successfully");
    }

    public function manage()
    {
        $this->teachers = Teacher::orderBy('id','desc')->get();
        return view('admin.teacher.manage',['teachers'=>$this->teachers]);
    }

    public function editTeacher($id)
    {
        $this->teacher = Teacher::find($id);
        return view('admin.teacher.edit',['teacher'=>$this->teacher]);
    }

    public function updateTeacher(Request $request,$id)
    {
        Teacher::updateTeacher($request,$id);
        return redirect('/teacher/manage')->with('message','Updated successfully');
    }

    public function deleteTeacher($id){
        Teacher::deleteTeacher($id);
        return redirect('/teacher/manage')->with('message',"Teacher Deleted");
    }
}
