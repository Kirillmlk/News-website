@extends('layout')
@section('header')

<div class="container-form">
    <h1>Оставьте свою новость</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form class="mt-4" method="post" action="{{ route('create_check') }}" enctype="multipart/form-data">
        @csrf
        <input type="email" name="email" id="email" placeholder="Введите email" class="form-control"><br>
        <input type="text" name="subject" id="subject" placeholder="Введите название новости" class="form-control"><br>
        <textarea name="message" id="message" class="form-control" placeholder="Введите вашу новость"></textarea><br>
        <input type="file" name="image" id="image" class="form-control"><br>
        <button type="submit" class="btn btn-success">Отправить</button>
    </form>
</div>

@endsection
