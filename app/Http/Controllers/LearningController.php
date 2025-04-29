<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LearningController extends Controller
{
    public function index()
    {
        // return 'Hello for Student';
        return view('student.courses.index');
    }
}
