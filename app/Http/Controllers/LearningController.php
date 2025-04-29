<?php

namespace App\Http\Controllers;

use App\Models\Course;
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
        foreach($my_courses as $course){
            $totalQuestionsCount = $course->questions()->count(); //5
            $answeredQuestionsCount = StudentAnswer::where('user_id', $user->id)
            ->whereHas('question', function ($query) use ($course){
                $query->where('course_id', $course->id);
            })->distinct()->count('course_question_id');

            if($answeredQuestionsCount < $totalQuestionsCount){
                $firstUnansweredQuestion = CourseQuestion::where('course_id', $course->id)
                ->whereNotIn('id', function ($query) use ($user){
                    $query->select('course_question_id')->from('student_answers')
                    ->where('user_id', $user->id);
                })->orderBy('id', 'asc')->first();
                $course->nextQuestionId = $firstUnansweredQuestion ? $firstUnansweredQuestion->id : null;
            }else{
                $course->nextQuestionId = null;
            }
        }
        // dd($my_course)
        return view('student.courses.index', [
            'my_courses' => $my_courses,
        ]);
    }

    public function learning(Course $course, $question)
    {
        /** @var \App\Models\User $user */
        $user = Auth::user();
        $isEnrolled = $user->courses()->where('course_id', $course->id)->exists();

        if(!$isEnrolled){
            abort(403, 'You are not enrolled in this course.');
        }
        $current_question = CourseQuestion::where('course_id', $course->id)->where('id', $question)->firstOrFail();

        // dd([
        //     'course' => $course,
        //     'question' => $current_question,
        // ]);
        return view('student.courses.learning', [
            'course' => $course,
            'question' => $current_question,
        ]);

    }

}
