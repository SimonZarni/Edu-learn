<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::all();
        return view('course', ['courses' => $courses]);
    }

    public function show(Course $course)
    {
        return view('course_details', ['course' => $course]);
    }

    public function home()
    {
        $random_courses = Course::inRandomOrder()->take(3)->get();

        return view('home', ['random_courses' => $random_courses]);
    }
}
