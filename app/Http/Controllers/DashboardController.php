<?php

namespace App\Http\Controllers;

use App\Models\Users;
use App\Models\Courses;
use App\Models\Lessons;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $coursesCount = Courses::count();
        $teachersCount = Users::where('role','teacher')->count();
        $studentsCount = Users::where('role','student')->count();
        $lessonsCount = Lessons::count();

        return view('dashboard', compact(
            'coursesCount',
            'teachersCount',
            'studentsCount',
            'lessonsCount'
        ));
    }
}
