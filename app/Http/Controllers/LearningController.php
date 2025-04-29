<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LearningController extends Controller
{
    public function index()
    {
        /** @var \App\Models\User $user */
        $user = Auth::user();
        $my_courses = $user->courses()->with('category')->orderBy('id', 'desc')->get();
        // dd($my_course);
        return view('student.courses.index', [
            'my_courses' => $my_courses,
        ]);
    }
}
