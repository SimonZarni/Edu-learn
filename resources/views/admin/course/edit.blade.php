<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">

<form action="{{ route('course.update', $course->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="name" class="form-label">Course Name:</label>
        <input type="text" name="name" class="form-control" value="{{ old('name', $course->name) }}" required>
    </div>

    <div class="form-group">
        <label for="description" class="form-label">Description:</label>
        <textarea name="description" class="form-control" required>{{ old('description', $course->description) }}</textarea>
    </div>

    <div class="form-group">
        <label for="image" class="form-label">Course Image:</label>
        <input type="file" name="image" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="start_date" class="form-label">Start Date:</label>
        <input type="date" name="start_date" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="duration" class="form-label">Duration:</label>
        <input type="text" name="duration" class="form-control" value="{{ old('duration', $course->duration) }}" required>
    </div>

    <button type="submit" class="btn btn-primary mt-1">Update Course</button>
</form>
