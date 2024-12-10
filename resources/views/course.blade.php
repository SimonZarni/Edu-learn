@extends('layout.master')
@section('main')
    <h2 class="courses-title">Our Courses</h2>
    <div class="courses-list mb-3">
        @foreach ($courses as $course)
            <div class="course-item">
                <a href="{{ route('courses.show', $course->id) }}" class="course-btn">{{ $course->name }}</a>
            </div>
        @endforeach
    </div>
@endsection
