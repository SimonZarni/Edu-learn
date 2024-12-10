<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">

<form action="{{ route('course.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="name" class="form-label">Course Name:</label>
        <input type="text" name="name" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="description" class="form-label">Description:</label>
        <textarea name="description" class="form-control" required></textarea>
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
        <input type="text" name="duration" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-primary mt-1">Add Course</button>
</form>
