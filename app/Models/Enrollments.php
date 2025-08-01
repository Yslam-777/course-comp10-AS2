<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Enrollments extends Model
{
    protected $fillable = [
        'student_id',
        'course_id',
        'enrolled_at',
    ];

    public function student()
    {
        return $this->belongsTo(Users::class,'student_id');
    }

    public function course()
    {
        return $this->belongsTo(Courses::class,);
    }
}
