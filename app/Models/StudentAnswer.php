<?php

namespace App\Models;

use Spatie\Permission\Traits\HasRoles;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class StudentAnswer extends Model
{
        use HasFactory, SoftDeletes, HasRoles;
    protected $guarded = [
        'id'
    ];

    public function question(){
        return $this->belongsTo(CourseQuestion::class, 'course_question_id');
    }
}
