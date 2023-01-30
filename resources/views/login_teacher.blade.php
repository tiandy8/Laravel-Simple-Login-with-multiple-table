<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>

    <h1>login Guru</h1>

    @if (session('error'))
        <p>{{ session('error') }}</p>
    @endif
    <form action="login-teacher" method="post">
        @csrf
        <input type="text" name="nis"  placeholder="nis" maxlength="4">
        <input type="password" name="password" placeholder="password">
        <button>Login guru</button>

    </form>

    <a href="{{ route('login') }}">login siswa</a>
</body>
</html>
