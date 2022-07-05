@extends('layouts.general')

@section('title-general')
    Домашняя страница!Тут вы можете почитать интересные статьи!
@endsection

@section('content')
    <h1>Последние добавленные статьи</h1>
    <table class='table table-hover table-responsive table-bordered'>
        <tr>
            <th>Автор</th>
            <th>Тема статьи</th>
            <th>Статья</th>
        </tr>

        @foreach($posts as $item)
            <tr>
                <td>{{ $item->name }}</td>
                <td>{{ $item->subject }}</td>
                <td>{{ $item->message }}</td>
        @endforeach
    </table>

@endsection

@section('aside')
    @parent
    <p>Если вы хотите узнать больше !зайдите и прочитайте в раздел О Нас!</p>
@endsection
