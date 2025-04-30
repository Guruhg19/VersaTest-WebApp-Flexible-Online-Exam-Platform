<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Course;
use Illuminate\Http\Request;
use App\Models\CourseStudent;
use App\Models\StudentAnswer;
use App\Models\CourseQuestion;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class CourseStudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Course $course)
    {
        $students = $course->students()->orderBy('id', 'desc')->get();
        $questions = $course->questions()->orderBy('id', 'desc')->get();
        $totalQuestions = $questions->count();

        foreach($students as $student){
            $studentAnswer = StudentAnswer::whereHas('question', function ($query) use ($course){
                $query->where('course_id', $course->id);
            })->where('user_id', $student->id)->get();

            $answerCount =  $studentAnswer->count();
            $correctAnswerCount = $studentAnswer->where('answer', 'correct')->count();

            if($answerCount == 0){
                $student->status = 'Not Started';
            }else if($correctAnswerCount < $totalQuestions){
                $student->status = 'Not Passed';
            }else if($correctAnswerCount == $totalQuestions){
                $student->status = 'Passed';
            }
        }

        

        return view('admin.students.index', compact('course', 'students', 'questions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Course $course)
    {
        // dd($course);
        $students = $course->students()->orderBy('id', 'desc')->get();

        return view('admin.students.add_student', compact('course', 'students'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Course $course)
    {
        $request->validate([
            'email' => 'required|email',
        ]);

        $user = User::where('email', $request->email)->first();

        if(!$user){
            $error = ValidationException::withMessages([
                'system_error' => 'Email student tidak tersedia',
            ]);
            throw $error;
        }

        $isEnrolled = $course->students()->where('user_id', $user->id)->exists();
        if($isEnrolled){
            $error = ValidationException::withMessages([
                'system_error' => 'Email student sudah terdaftar',
            ]);
            throw $error;
        }

        DB::beginTransaction();

        try {
            $course->students()->attach($user->id);
            DB::commit();
            return redirect()->route('dashboard.course.course_students.index', $course);
        } catch (\Exception $e) {
            DB::rollBack();
            $error = ValidationException::withMessages([
                'system_error' => 'System Error ' . $e->getMessage(),
            ]);
            throw $error;
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(CourseStudent $courseStudent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CourseStudent $courseStudent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CourseStudent $courseStudent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CourseStudent $courseStudent)
    {
        //
    }
}
