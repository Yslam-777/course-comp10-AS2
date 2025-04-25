<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    /** @use HasFactory<\Database\Factories\UsersFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function courses()
    {
        return $this->hasMany(Courses::class,'teacher_id');
    }

    public function enrollments()
    {
        return $this->hasMany(Enrollments::class,'student_id');
    }

    public function submissions()
    {
        return $this->hasMany(Submissions::class,'student_id');
    }
}
