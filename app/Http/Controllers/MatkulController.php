<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MatkulController extends Controller
{
    public function index()
    {
        return view('matkul.index');
    }
    public function create()
    {
        return view('matkul.create');
    }
    public function edit()
    {
        return view('matkul.edit');
    }
}
