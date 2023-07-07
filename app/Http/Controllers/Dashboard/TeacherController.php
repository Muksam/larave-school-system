<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Teacher;

class TeacherController extends Controller
{

    public function index() {
        $teachers = Teacher::all();
        return view('dashboard.pages.teacher.show-teacher',compact('teachers'));
    }

    public function create() {
        return view('dashboard.pages.teacher.add-teacher');
    }

    public function store(Request $request)
    {
        $request->validate([
            'teacher_name' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
  
        $teacher = $request->all();
  
        if ($image = $request->file('image')) {
            $destinationPath = public_path('dashboard/teacher/');
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $teacher['image'] = "$profileImage";
        }
    
        Teacher::create($teacher);
     
        return redirect()->route('teachers.index')
                        ->with('success','Teacher created successfully.');
    }


    public function edit(Teacher $teacher) {
        $teacher = Teacher::find($teacher)->first();
        return view('dashboard.pages.teacher.edit-teacher',compact('teacher'));
    }

    public function update(Request $request, Teacher $teacher) {
        $request->validate([
            'teacher_name' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
  
        $teacherData = $request->all();
  
        if ($image = $request->file('image')) {
            $destinationPath = public_path('dashboard/teacher/');
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $teacherData['image'] = "$profileImage";
        }else{
            unset($teacherData['image']);
        }
          
        $teacher->update($teacherData);
        return redirect()->route('teachers.index')
                        ->with('success','Teacher updated successfully.');

    }

    public function destroy(Teacher $teacher) {
        $teacher->delete();
        return redirect()->route('teachers.index')
                        ->with('success','Teacher deleted successfully.');

    }

    
}
