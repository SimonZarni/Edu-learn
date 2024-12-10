<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
<link rel="stylesheet" href="{{ asset('css/app.css') }}">

<div class="login-container d-flex justify-content-center align-items-center">
    <div class="login-card">
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <label for="email" class="form-label">Email:</label>
            <input type="email" name="email" class="form-control" value="{{ old('email') }}" required>

            <label for="password" class="form-label">Password:</label>
            <input type="password" name="password" class="form-control" required>

            <button type="submit" class="btn btn-submit">Login</button>

            @if ($errors->has('password'))
                <div class="error-message">
                    {{ $errors->first('password') }}
                </div>
            @endif

            <p class="register-link">Don't have an account? <a href="{{ route('register') }}">Register</a></p>
        </form>
    </div>
</div>


