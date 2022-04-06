<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/login&registra.css')}}">
    <title>Registre</title>
</head>
<body>
<div class="login-box">
    <h2>Registre</h2>
    <form action="/guardar-usuari" enctype="multipart/form-data" method="post">
        @csrf
        <div class="user-box">
            <input type="text" name="username" id="username">
            <label>Username</label>
        </div>
        <div class="user-box">
            <input type="text" name="email" id="email">
            <label>Email</label>
        </div>
        <div class="user-box">
            <input type="password" name="password" id="password">
            <label>Password</label>
        </div>
        <button type="submit" class="button">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            Registra
        </button>
    </form>
    <a href="/" class="button">Torna</a>
</div>
</body>
</html>
