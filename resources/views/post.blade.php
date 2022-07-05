@extends('layouts.general')

@section('title-general')
    Контакты
@endsection

@section('content')
    <h1>Тут Вы можете написать любой пост на любую тему</h1>

    <form action="{{ route('post-form') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Введите имя автора</label>
            <input type="text" name="name" placeholder="Введите имя" id="name" class="form-control">
        </div>

        <div class="form-group">
            <label for="subject">Тема поста</label>
            <input type="text" name="subject" placeholder="Тема сообщения" id="subject" class="form-control">
        </div>

        <div class="form-group">
            <label for="message">Введите Ваше сообщение</label>
            <textarea name="message" id="message" class="form-control" placeholder="Введите Ваш текст"></textarea>
        </div>

        <button type="submit" class="btn btn-success">Отправить</button>
    </form>

@endsection

