<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">

<form action="{{ route('logout') }}" method="POST">
    @csrf
    <button type="submit" class="btn btn-danger">Logout</button>
</form>

<ul>
    <li><a href="{{ route('admin.dashboard') }}" class="btn btn-success">Dashboard</a></li>
    <li><a href="{{ route('course.index') }}" class="btn btn-success mt-1">Courses</a></li>
    <li><a href="{{ route('admin.application.index') }}" class="btn btn-success mt-1">Applications</a></li>
</ul>

<h2>Courses</h2>

<a href="{{ route('course.create') }}" class="btn btn-success">Add New Course</a>

<table class="table table-bordered mt-2">
    <thead>
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Description</th>
            <th>Image</th>
            <th>Start Date</th>
            <th>Duration</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($courses as $course)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $course->name }}</td>
                <td>{{ $course->description }}</td>
                <td>
                    <img src="{{ asset('storage/' . $course->image) }}" alt="Course Image" width="100" />
                </td>
                <td>{{ $course->start_date }}</td>
                <td>{{ $course->duration }}</td>
                <td>
                    <a href="{{ route('course.edit', $course->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('course.destroy', $course->id) }}" method="POST"
                        style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm"
                            onclick="return confirm('Are you sure to delete this course?')">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
