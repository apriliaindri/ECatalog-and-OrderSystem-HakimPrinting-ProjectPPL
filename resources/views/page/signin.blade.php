<!DOCTYPE html>
<html>
<head>
    <title>Sign Im</title>
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
        <h2>Sign In</h2>

        <form action="/signin" method="POST">
            @csrf

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

            <button type="submit">Sign In</button>

        </form>
    </div>

</div>

</body>
</html>
