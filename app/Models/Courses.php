<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    /** @use HasFactory<\Database\Factories\CoursesFactory> */
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'teacher_id',
    ];

    public function teacher()
    {
        return $this->belongsTo(Users::class,'teacher_id');
    }

    public function lessons()
    {
        return $this->hasMany(Lessons::class);
    }

    public function enrollments()
    {
        return $this->hasMany(Enrollments::class);
    }
}
