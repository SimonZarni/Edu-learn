<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">

<h1>Login</h1>
<div class="col-md-6">
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <label for="email" class="form-label">Email:</label>
        <input type="email" name="email" class="form-control" value="{{ old('email') }}" required>

        <label for="password" class="form-label">Password:</label>
        <input type="password" name="password" class="form-control" required>

        <button type="submit" class="btn btn-success mt-1">Login</button>
        @if ($errors->has('password'))
            <div style="color: red; margin-top: 10px;">
                {{ $errors->first('password') }}
            </div>
        @endif
        <p>Don't have an account? <a href="{{ route('register') }}">Register</a></p>
    </form>
</div>

