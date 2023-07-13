<?php

namespace App\Http\Controllers;

use App\Models\Lecture;
use Illuminate\Http\Request;

class LectureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lectures = Lecture::where('id', '!=', '1')
            ->orderBy('nama')
            ->get();

        return view('lecture.index', compact('lectures'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('lecture.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|max:255',
            'email' => 'required|max:255',
        ]);

        Lecture::create([
            'nama' => ucfirst($request->nama),
            'email' => $request->email,
        ]);

        return redirect()->route('lecture.index')->with('success', 'Lecture created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Lecture $lecture)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Lecture $lecture)
    {
        if ($lecture->id) {
            return view('lecture.edit', compact('lecture'));
        } else {
            return redirect()->route('lecture.index')->with('danger', 'You are not authorized to edit this category!');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Lecture $lecture)
    {
        $request->validate([
            'nama' => 'required|max:255',
        ]);

        $lecture->update([
            'nama' => ucfirst($request->nama),
        ]);

        return redirect()->route('lecture.index')->with('success', 'Lecture updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Lecture $lecture)
    {
        //
    }
}
