<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet"/>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <title>Home</title>
</head>
<body>
<img src="{{ Vite::asset('resources/images/bg_main.jpg') }}" alt="login image" class="main__image">
@extends('layout')
@section('header')
@endsection
<div class="container-news">
    <div class="blog-section">
        <div class="title-news">
            <h2>Blog & News</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores aut distinctio eius eum libero
                molestiae nisi sapiente sequi sunt ullam?
            </p>
        </div>
        <div class="cards">
            @foreach($news as $el)
                <div class="card">
                    <div class="image-section">
                        <img src="{{ asset('storage/images/' . $el->image) }}" alt="Изображение карточки">
                    </div>
                    <div class="content-card">
                        <h4>{{ $el->subject }}</h4>
                        <p>{{ $el->message }}</p>
                        <p>Author: {{ $el->email }}</p>
                        <a href="#">Read more</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
</body>
</html>

