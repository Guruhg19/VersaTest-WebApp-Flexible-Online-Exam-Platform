<?php

namespace App\Models;

use Spatie\Permission\Traits\HasRoles;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Course extends Model
{
    use HasFactory, SoftDeletes, HasRoles;
    protected $guarded = [
        'id'
    ];

    public function category(){
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function questions(){
        return $this->hasMany(CourseQuestion::class, 'course_id', 'id');
    }

    public function students(){
        return $this->belongsToMany(User::class, 'course_students', 'course_id', 'user_id');
    }
}
