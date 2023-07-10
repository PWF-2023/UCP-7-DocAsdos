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
        return view('lecture.index');
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
        //
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
        return view('lectur.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Lecture $lecture)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Lecture $lecture)
    {
        //
    }
}
