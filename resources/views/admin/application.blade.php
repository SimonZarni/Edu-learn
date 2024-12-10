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

<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Full Name</th>
            <th>Course Name</th>
            <th>Age</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Application Date</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($applications as $application)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $application->full_name }}</td>
                <td>{{ $application->course->name }}</td>
                <td>{{ $application->age }}</td>
                <td>{{ $application->phone }}</td>
                <td>{{ $application->email }}</td>
                <td>{{ $application->application_date->format('Y-m-d') }}</td>
                <td>
                    <span class="text-{{ $application->status == 'approved' ? 'success' : ($application->status == 'rejected' ? 'danger' : 'warning') }}">
                        {{ ucfirst($application->status) }}
                    </span>
                </td>
                <td>
                    @if($application->status == 'pending')
                        <form action="{{ route('admin.application.updateStatus', ['application' => $application->id, 'status' => 'approved']) }}" method="POST" style="display:inline;">
                            @csrf
                            <button type="submit" class="btn btn-success" onclick="return confirm('Are you sure to accept this application?')">Accept</button>
                        </form>
                        <form action="{{ route('admin.application.updateStatus', ['application' => $application->id, 'status' => 'rejected']) }}" method="POST" style="display:inline;">
                            @csrf
                            <button type="submit" class="btn btn-danger"  onclick="return confirm('Are you sure to reject this application?')">Reject</button>
                        </form>
                    @else
                        <span class="text-muted">No action needed</span>
                    @endif
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
