<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet"/>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <title>Document</title>
</head>
<body>
<img src="{{ Vite::asset('resources/images/bg_main.jpg') }}" alt="login image" class="main__image">
<header class="header">
    <a href="{{ route('welcome') }}" class="logo">NEWS</a>
    <input type="checkbox" id="check">
    <label for="check" class="icons">
        <i class='bx bx-menu' id="menu-icon"></i>
        <i class='bx bx-x' id="close-icon"></i>
    </label>
    <nav class="navbar">
        <a href="{{ route('welcome') }}" style="--i:0;">Home</a>
        <a href="#" style="--i:1;">About</a>
        <a href="{{ route('create') }}" style="--i:2;">Create News</a>
        <a href="{{ route('login') }}" style="--i:3;">Sign In</a>
        <a href="{{ route('register') }}" style="--i:4;">Sign Up</a>
    </nav>
</header>

</body>
</html>

@yield('main')
