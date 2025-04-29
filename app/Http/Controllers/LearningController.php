<?php

namespace App\Http\Controllers;

use App\Models\CourseQuestion;
use App\Models\StudentAnswer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LearningController extends Controller
{
    public function index()
    {
        /** @var \App\Models\User $user */
        $user = Auth::user();
        $my_courses = $user->courses()->with('category')->orderBy('id', 'desc')->get();
        foreach($my_courses as $my_course){
            $totalQuestionsCount = $my_course->questions()->count(); //5
            $answeredQuestionsCount = StudentAnswer::where('user_id', $user->id)
            ->whereHas('question', function ($query) use ($my_course){
                $query->where('course_id', $my_course->id);
            })->disctinc()->count('question_id');

            if($answeredQuestionsCount < $totalQuestionsCount){
                $firstUnansweredQuestion = CourseQuestion::where('course_id', $my_course->id)
                ->whereNotIn('id', function ($query) use ($user){
                    $query->select('question_id')->from('student_answers')
                    ->where('user_id', $user->id);
                })->orderBy('id', 'asc')->first();
                $my_course->nextQuestionId = $firstUnansweredQuestion ? $firstUnansweredQuestion->id : null;
            }else{
                $my_course->nextQuestionId = null;
            }
        }
        // dd($my_course)
        return view('student.courses.index', [
            'my_courses' => $my_courses,
        ]);
    }
}
