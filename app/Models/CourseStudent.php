<?php

namespace App\Models;

use Spatie\Permission\Traits\HasRoles;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CourseStudent extends Model
{
        use HasFactory, SoftDeletes, HasRoles;
    protected $guarded = [
        'id'
    ];


}
