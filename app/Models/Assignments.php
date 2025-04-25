<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assignments extends Model
{
    /** @use HasFactory<\Database\Factories\AssignmentsFactory> */
    use HasFactory;

    protected $fillable = [
        'lesson_id',
        'title',
        'description',
        'due_date',
    ];

    public function lesson()
    {
        return $this->belongsTo(Lessons::class);
    }

    public function submissins()
    {
        return $this->hasMany(Submissions::class);
    }
}
