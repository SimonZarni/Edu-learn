<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = Course::all();
        return view('admin.course.index', ['courses' => $courses]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.course.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'start_date' => 'required|date',
            'duration' => 'required|string',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image')->store('courses/images', 'public');
        }

        Course::create([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $image,
            'start_date' => $request->start_date,
            'duration' => $request->duration,
        ]);

        return redirect()->route('course.index')->with('success', 'Course created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Course $course)
    {
        return view('admin.course.edit', ['course' => $course]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Course $course)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'start_date' => 'required|date',
            'duration' => 'required|string',
        ]);

        if ($request->hasFile('image')) {
            if ($course->image && file_exists(storage_path('app/public/' . $course->image))) {
                unlink(storage_path('app/public/' . $course->image));
            }

            $image = $request->file('image')->store('courses/images', 'public');
        } else {
            $image = $course->image;
        }

        $course->update([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $image,
            'start_date' => $request->start_date,
            'duration' => $request->duration,
        ]);

        return redirect()->route('course.index')->with('success', 'Course updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        $course->delete();

        return redirect()->route('course.index')->with('success', 'Course deleted successfully.');
    }
}
