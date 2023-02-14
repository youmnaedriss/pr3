<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function create()
    {
        return view('student.create');
    }
    function list(){
        return Student::all();
    }

    public function store(Request $request)
    {
        $student = new Student;
        $student->name = $request->input('name');
        $student->email = $request->input('email');
        $student->course = $request->input('course');
        $student->section = $request->input('section');
        $student->save();
        return redirect()->back();
    }

    function delapi($id){
        $student = Student::find($id);
     $result=$student->delete();
      
     if($result){
        return "Student Has Been Deleted";
            }else{
                return "Error";
           }
    }

    public function index()
    {
        //$student = Student::all();
        $student = Student::paginate(10);
        return view('student.index', compact('student'));
    }



    public function edit($id)
    {
        $student = Student::find($id);
        return view('student.edit', compact('student'));
    }


    public function update(Request $request, $id)
    {
        $student = Student::find($id);
        $student->name = $request->input('name');
        $student->email = $request->input('email');
        $student->course = $request->input('course');
        $student->section = $request->input('section');
        $student->update();
           return redirect('students');
    }


    public function destroy($id)
    {
        $student = Student::find($id);
        $student->delete();
        return redirect()->back();
    }

    public function index1()
    {
       $student = Student::paginate(10);
        return view('student.search', compact('student'));
    }
    public function simple(Request $request)

    {
       
              if( $request->input('search')){
           
        $student = Student::where('name', 'LIKE', "%" . $request->search . "%")->paginate(10);
        }else{
        $student = Student::paginate(10);
	}
        return view('student.search', compact('student'));
    }
    function addapi(Request $request){
        // return "Data Has Been Saved";
       
         $student = new Student;
         $student->name = $request->name;
         $student->email = $request->email;
         $student->course = $request->course;
         $student->section = $request->section;
         $result=$student->save();
         if($result){
          return "Data HAs Been Saved";
              }else{
                  return "Error";
  
              }}
}
