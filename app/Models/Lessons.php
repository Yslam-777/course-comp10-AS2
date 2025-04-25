<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lessons extends Model
{
    /** @use HasFactory<\Database\Factories\LessonsFactory> */
    use HasFactory;

    protected $fillable = [
        'course_id',
        'title',
        'content',
        'video_url',
        'position',
    ];

    public function course()
    {
        return $this->belongsTo(Courses::class);
    }

    public function assignments()
    {
        return $this->hasMany(Assignments::class,);
    }
}
