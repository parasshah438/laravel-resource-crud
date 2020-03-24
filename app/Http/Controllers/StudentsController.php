<?php

namespace App\Http\Controllers;

use App\Students;
use Validator;
use Illuminate\Http\Request;
use App\Http\Requests\StudentRequest;

class StudentsController extends Controller
{
    
    public function index()
    {
        $data = Students::latest()->paginate(5);  
        return view('student.index',compact('data'));
    }

    public function create()
    {
        return view('student.create');
    }

    public function store(StudentRequest $request)
    {
        $data = new Students;
        $data->roll_no = $request->input('roll_no');
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->save();
        return redirect('student')->with('success','Successfully register with us.');
    }

    public function show($id)
    {
        $data = Students::findOrFail($id);
        return view('student.show',compact('data'));
    }

    public function edit($id)
    {
        $data = Students::findOrFail($id);
        return view('student.edit',compact('data'));
    }

    public function update(StudentRequest $request,$id)
    {
        $students = Students::findOrFail($id);
        $students->update($request->all());
        return redirect()->route('student.index')->with('success','Successfully update records.');
    }

    public function destroy($id)
    {
        $data = Students::findOrFail($id);
        $data->delete();
        return redirect()->route('student.index')->with('success','Successfully delete records.');
    }
}
