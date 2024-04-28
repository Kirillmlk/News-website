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
<img src="{{ Vite::asset('resources/images/bg_main.jpg') }}" alt="login image" class="login__image">
@extends('layout')
@section('header')
@endsection
<div class="container-form">
{{--    <form class="add-form" method="post" action="/create/check">--}}
{{--        <input type="email" name="email" id="email" placeholder="Введите email" class="form-control"><br>--}}
{{--        <input type="text" name="subject" id="subject" placeholder="ВВедите название новости" class="form-control"><br>--}}
{{--        <textarea name="message" id="message" cols="form-control" placeholder="Ваша новость"></textarea>--}}
{{--    </form>--}}
    <form class="mt-4" method="post" action="/review/check">
        @csrf
        <input type="email" name="email" id="email" placeholder="Введите email" class="form-control"><br>
        <input type="text" name="subject" id="subject" placeholder="Введите отзыв" class="form-control"><br>
        <textarea name="message" id="message" class="form-control" placeholder="Введите сообщение"></textarea><br>
        <button type="submit" class="btn btn-success">Отправить</button>
    </form>
</div>
</body>
</html>
