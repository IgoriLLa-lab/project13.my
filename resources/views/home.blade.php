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
            <th>Аватар</th>
            <th>Комментарий</th>

        </tr>

        @foreach($posts as $item)
            <tr>
                <td>{{ $item->name }}</td>
                <td>{{ $item->subject }}</td>
                <td>{{ $item->message }}</td>
                <td><img src="{{ asset('/storage/' . $item->image) }}"></td>
                <td><a class="me-3 py-2 text-blue text-decoration-none" href= "{{ route('one-post', $item->id) }}">Детальнее</a></td>
        @endforeach
    </table>

@endsection

@section('aside')
    @parent
    <p>Если вы хотите узнать больше !зайдите и прочитайте в раздел О Нас!</p>
@endsection
