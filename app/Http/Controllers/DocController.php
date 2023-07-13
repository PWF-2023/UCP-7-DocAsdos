<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Lecture;
use App\Models\User;
use App\Models\Documentation;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class DocController extends Controller
{
    public function index()
    {
        $docs = Documentation::with('course')
        ->orderBy('created_at', 'desc')
        ->get();
        $users = User::get();
        $lectures = Lecture::get();

        return view('documentation.index', compact('docs','users','lectures'));
    }

    public function create()
    {
        $users = User::where('id', '!=', '1')->get();
        $lectures = Lecture::get();
        $courses = Course::get();
        return view('documentation.create', compact('users', 'lectures', 'courses'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|max:255',
        ]);
        Documentation::create([
            'course_id' => $request->course_id,
            'user_id' => $request->user_id,
            'lecture_id' => $request->lecture_id,
            'image' => ucfirst($request->image),
        ]);

        return redirect()->route('documentation.index')->with('success', 'Documentation Created succesfully!');
    }
}
