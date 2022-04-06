<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{url('css/login&registra.css')}}">
    <title>Login</title>
</head>
<body>
<div class="login-box">
    <h2>Login</h2>
{{--    <span>{{Auth::user()}}</span>--}}
    <form id="login-form" class="form" action="/check-credentials" method="post">
        @csrf
        <div class="user-box">
            <input type="text" name="email" id="email" required="">
            <label>Email</label>
        </div>
        <div class="user-box">
            <input type="password" name="password" id="password" required="">
            <label>Password</label>
        </div>

        <button type="submit" class="button">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            Inicia sessió
        </button>
    </form>

        <form id="login-form" class="form" action="/registra" method="get">
            <button type="submit" class="button">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                Registra
            </button>
        </form>

</div>
</body>
</html>
