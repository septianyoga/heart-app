<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
</head>

<body>
    <form action="/register" method="post">
        @csrf
        <label for="name">Name</label>
        <input type="text" name="name" id="name">
        @error('name')
            <span>{{ $message }}</span>
        @enderror
        <br>
        <label for="email">Email</label>
        <input type="email" name="email" id="email">
        @error('email')
            <span>{{ $message }}</span>
        @enderror
        <br>
        <label for="nik">NIK</label>
        <input type="text" name="nik" id="nik">
        @error('nik')
            <span>{{ $message }}</span>
        @enderror
        <br>
        <label for="no_hp">No. Handphone</label>
        <input type="text" name="no_hp" id="no_hp">
        @error('no_hp')
            <span>{{ $message }}</span>
        @enderror
        <br>
        <label for="no_bpjs">No. BPJS</label>
        <input type="text" name="no_bpjs" id="no_bpjs"> <br>
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
        @error('password')
            <span>{{ $message }}</span>
        @enderror
        <br>
        <label for="password_confirmation">Konfirmasi Password</label>
        <input type="password" name="password_confirmation" id="password_confirmation"></label>
        <button type="submit">Daftar</button>
    </form>
    <a href="/login">Login</a>
</body>

</html>
