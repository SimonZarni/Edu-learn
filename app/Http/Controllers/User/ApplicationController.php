<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Application;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApplicationController extends Controller
{
    // public function create(Course $course)
    // {
    //     return view('application', ['course' => $course]);
    // }

    public function create(Course $course)
    {
        if (!Auth::check()) {
            return redirect()->route('courses.show', $course->id)
                ->with('error', 'You must be logged in to apply for a course.');
        }
        
        return view('application', ['course' => $course]);
    }

    public function store(Request $request, $course_id)
    {
        $request->validate([
            'full_name' => 'required|string|max:255',
            'age' => 'required|integer|min:1',
            'phone' => 'required|string|max:15',
        ]);

        $user = auth()->user();

        Application::create([
            'user_id' => $user->id,
            'course_id' => $course_id,
            'full_name' => $request->full_name,
            'age' => $request->age,
            'phone' => $request->phone,
            'email' => $user->email,
            'application_date' => now(),
        ]);

        return redirect()->route('courses.show', $course_id)->with('success', 'Application submitted successfully.');
    }
}
