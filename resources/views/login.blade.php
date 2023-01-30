<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>

    <h1>login</h1>

    @if (session('error'))
        <p>{{ session('error') }}</p>
    @endif
    <form action="login" method="post">
        @csrf
        <input type="email" name="email" placeholder="email">
        <input type="password" name="password" placeholder="password">
        <button>Login</button>

    </form>

    <a href="{{ route('login.teacher') }}">login guru</a>

</body>
</html>
