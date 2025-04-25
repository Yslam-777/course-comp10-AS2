<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Users;
use App\Models\Courses;
use App\Models\Lessons;
use App\Models\Assignments;
use App\Models\Enrollments;
use App\Models\Submissions;

class DatabaseSeeder extends Seeder
{
    public function run() : void
    {
        $teachers = Users::factory(2)->create([
            "role" => "teacher",
        ]);

        $students = Users::factory(5)->create([
            "role" => "student",
        ]);

        $courses = Courses::factory(3)->make()->each(function ($course) use ($teachers){
            $course->teacher_id = $teachers->random()->id;
            $course->save();

            $lessons = Lessons::factory(3)->create([
                'course_id' => $course->id,
            ]);

            foreach ($lessons as $lesson) {
                $assignment = Assignments::factory()->create([
                    'lesson_id' => $lesson->id,
                ]);

                foreach (Users::where('role', 'student')->get() as $student) {
                    Submissions::factory()->create([
                        'assignment_id' => $assignment->id,
                        'student_id' => $student->id,
                    ]);
                }
            }
        });

        foreach ($students as $student) {
            foreach ($courses->random(2) as $course) {
                Enrollments::create([
                    'student_id' => $student->id,
                    'course_id' => $course->id,
                    'enrolled_at' => now(),
                ]);
            }
        }
    }
}
