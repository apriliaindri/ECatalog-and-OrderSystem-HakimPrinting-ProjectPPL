<!DOCTYPE html>
<html>
<head>
    <title>Sign Up</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{ asset('css/style-signup.css') }}">
</head>
<body>

<div class="container">

    {{-- LEFT IMAGE --}}
    <div class="left">
        <img src="{{ asset('images/img2.jpeg') }}">
    </div>

    {{-- RIGHT FORM --}}
    <div class="right">
        <h2>Sign Up</h2>

        <form action="/signup" method="POST">
            @csrf

            {{-- NAMA --}}
            <label>Nama Lengkap</label>
            <div class="input-group">
                <span>👤</span>
                <input type="text" name="name" required>
            </div>

            {{-- EMAIL --}}
            <label>Email</label>
            <div class="input-group">
                <span>✉️</span>
                <input type="email" name="email" required>
            </div>

            {{-- PASSWORD --}}
            <label>Password</label>
            <div class="input-group">
                <span>🔒</span>
                <input type="password" name="password" required>
            </div>

            <button type="submit">Sign Up</button>

            <p class="login">
                Sudah memiliki akun? <a href="/signin1">Sign In</a>
            </p>
        </form>

    </div>

</div>

</body>
</html>
