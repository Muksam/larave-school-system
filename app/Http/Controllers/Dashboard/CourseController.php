<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Teacher;

class CourseController extends Controller
{
    public function index() {
        $courses = Course::all();
        return view('dashboard.pages.course.show-course',compact('courses'));
    }

    public function create() {
        return view('dashboard.pages.course.add-course');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'course_name' => 'required',
            'details' => 'required',
            'no_of_student'=>'required',
            
        ]);
        $course = $request->all();
  
         if ($image = $request->file('image')) {
             $destinationPath = public_path('dashboard/course/');
             $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
             $image->move($destinationPath, $profileImage);
             $course['image'] = "$profileImage";
        }

        // if ($request->hasfile('image')) {
        //     $file = $request->file('image');
        //     $extension = $file->getClientOriginalExtension();
        //     $filename = time() . "." .$extension;
        //     $file->move('public/dashboard/course/', $filename);
        //     $course->image = $filename;
        // } else {
        //     return $request;
        //     $course->image = "";
        // }
    
        Course::create($course);
     
        return redirect()->route('courses.index')
                        ->with('success','Course created successfully.');
    }


    public function edit(Course $course) {
        $course = Course::find($course)->first();
        return view('dashboard.pages.course.edit-course',compact('course'));
    }

    public function update(Request $request, Course $course) {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'course_name' => 'required',
            'details' => 'required',
            'no_of_student'=>'required',
        ]);
  
        $courseData = $request->all();
  
        if ($image = $request->file('image')) {
            $destinationPath = public_path('dashboard/course/');
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $courseData['image'] = "$profileImage";
        }else{
            unset($courseData['image']);
        }
          
        $course->update($courseData);
        return redirect()->route('courses.index')
                        ->with('success','Course updated successfully.');

    }

    public function destroy(Course $course) {
        $course->delete();
        return redirect()->route('courses.index')
                        ->with('success','Course deleted successfully.');

    }
}
