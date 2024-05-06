@extends('layout')

@section('main')
<div class="news__container">
    <div class="news__details">
        <h2>{{ $news->subject }}</h2>
        <p class="news__message">{{ $news->message }}</p>
        <p>Author: {{ $news->email }}</p>
    </div>
</div>
@endsection

