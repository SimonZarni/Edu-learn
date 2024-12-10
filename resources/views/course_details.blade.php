<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">

<ul>
    <li><a href="{{ route('home') }}" class="btn btn-success">Home</a></li>
    <li><a href="{{ route('courses.index') }}" class="btn btn-success mt-1">Courses</a></li>
</ul>

<h2>Course Details</h2>

<div class="row">
    <div class="col-md-4 mb-4">
        <div class="card">
            <img src="{{ asset('storage/' . $course->image) }}" class="card-img-top" alt="Course Image"
                width="100" />
            <div class="card-body">
                <h5 class="card-title">{{ $course->name }}</h5>
                <p class="card-text">{{ $course->description }}</p>
                <p><strong>Start Date:</strong> {{ $course->start_date }}</p>
                <p><strong>Duration:</strong> {{ $course->duration }}</p>
                <a href="{{ route('applications.create', $course->id) }}" class="btn btn-primary">Apply for Course</a>
                @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
