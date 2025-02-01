<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>

    <!-- Tampilkan pesan error jika ada -->
    @if($errors->any())
        <div style="color: red;">
            {{ $errors->first('login') }}
        </div>
    @endif

    <!-- Form Login -->
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div>
            <label for="team_name">Team Name:</label>
            <input type="text" id="team_name" name="team_name" required>
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div>
            <button type="submit">Login</button>
        </div>
    </form>

    <!-- Link ke halaman registrasi -->
    <p>Don't have an account? <a href="{{ route('register') }}">Sign up</a></p>
</body>
</html>