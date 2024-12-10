<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">

<h2>Welcome to admin dashboard, {{ Auth::user()->name }}.</h2>

<form action="{{ route('logout') }}" method="POST">
    @csrf
    <button type="submit" class="btn btn-danger">Logout</button>
</form>

<ul>
    <li><a href="{{ route('admin.dashboard') }}" class="btn btn-success">Dashboard</a></li>
    <li><a href="{{ route('course.index') }}" class="btn btn-success mt-1">Courses</a></li>
    <li><a href="{{ route('admin.application.index') }}" class="btn btn-success mt-1">Applications</a></li>
</ul>
