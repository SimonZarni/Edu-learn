@extends('layout.master')
@section('main')
<h2 class="text-center mb-5">Course Details</h2>

<div class="course-details-container1 d-flex justify-content-center align-items-center">
    <div class="course-card1 d-flex flex-row align-items-center">
        <div class="course-image1">
            <img src="{{ asset('storage/' . $course->image) }}" alt="Course Image" class="img-fluid rounded" />
        </div>
        <div class="course-info1 ms-4">
            <h3 class="course-title1">{{ $course->name }}</h3>
            <p class="course-description1">{{ $course->description }}</p>
            <div class="course-meta1">
                <p><strong>Start Date:</strong> {{ $course->start_date }}</p>
                <p><strong>Duration:</strong> {{ $course->duration }}</p>
            </div>
            <a href="{{ route('applications.create', $course->id) }}" class="btn btn-primary">Apply for Course</a>
            @if (session('error'))
                <div class="alert alert-danger mt-3">
                    {{ session('error') }}
                </div>
            @endif
        </div>
    </div>
</div>
@endsection


