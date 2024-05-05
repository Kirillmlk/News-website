
@extends('layout')
@section('header')

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
@endsection

