<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Submissions extends Model
{
    use HasFactory;

    protected $fillable = [
        'assignment_id',
        'student_id',
        'content',
        'submitted_at',
        'grade',
        'feedback',
    ];

    public function assignment()
    {
        return $this->belongsTo(Assignments::class);
    }

    public function courses()
    {
        return $this->belongsTo(Users::class,'student_id');
    }

}
