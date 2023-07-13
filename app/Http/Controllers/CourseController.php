<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Lecture;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class CourseController extends Controller
{
    public function index()
    {
        // $lectures = Lecture::with('lecture')->get();

        $courses = Course::with('lecture')
            ->get();


        //dd($courses);

        return view('course.index', compact('courses','lectures'));
    }
    public function create()
    {
        $users = User::where('id', '!=', '1')->get();
        $lectures = Lecture::get();
        return view('course.create', compact('users', 'lectures'));
    }
    public function edit()
    {
        return view('course.edit');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|max:255',
        ]);
        Course::create([
            'nama' => ucfirst($request->nama),
            'user_id' => $request->user_id,
            'semester' => ucfirst($request->semester),
            'lecture_id' => $request->lecture_id,
        ]);

        return redirect()->route('course.index')->with('success', 'Course Created succesfully!');
    }
}
