<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\User;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::where('user_id', auth()->user()->id)
                ->orderBy('created_at', 'desc')
                ->get();

        //dd($courses);

        return view('course.index', compact('courses'));
    }
    public function create()
    {
        return view('course.create');
    }
    public function edit()
    {
        return view('course.edit');
    }
}
