<?php

namespace App\Models;

use Spatie\Permission\Traits\HasRoles;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CourseQuestion extends Model
{
        use HasFactory, SoftDeletes, HasRoles;
    protected $guarded = [
        'id'
    ];

    public function course(){
        return $this->belongsTo(Course::class);
    }

    public function answers(){
        return $this->hasMany(CourseAnswer::class, 'course_question_id', 'id');
    }

}
