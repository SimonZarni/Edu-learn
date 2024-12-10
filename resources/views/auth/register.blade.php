<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
<link rel="stylesheet" href="{{ asset('css/app.css') }}">

<div class="register-container d-flex justify-content-center align-items-center">
    <div class="register-card">
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <label for="name" class="form-label">Username:</label>
            <input type="text" name="name" class="form-control" value="{{ old('name') }}" required>

            <label for="email" class="form-label">Email:</label>
            <input type="email" name="email" class="form-control" value="{{ old('email') }}" required>

            <label for="password" class="form-label">Password:</label>
            <input type="password" name="password" class="form-control" required>

            <label for="confirm_password" class="form-label">Confirm Password:</label>
            <input type="password" name="confirm_password" class="form-control" required>

            <button type="submit" class="btn btn-submit">Register</button>

            @if ($errors->has('confirm_password'))
                <div class="error-message">
                    Password and confirm password are not the same.
                </div>
            @endif

            <p class="login-link">Already have an account? <a href="{{ route('login') }}">Login</a></p>
        </form>
    </div>
</div>

