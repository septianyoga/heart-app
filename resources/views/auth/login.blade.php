<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>

<body>
    <form action="/login" method="post">
        @csrf
        <label for="email">Email</label>
        <input type="email" name="email" id="email">
        @error('email')
            <span>{{ $message }}</span>
        @enderror
        <br>
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
        @error('password')
            <span>{{ $message }}</span>
        @enderror
        <button type="submit">Login</button>
    </form>
    <a href="/register">Daftar</a>
</body>

</html>
