@extends('layouts.general')

@section('title-general')

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

    <h2>Поиск статей</h2>
    <form method="GET" action="/">
        @csrf
        <div class="mb-3">
            <input type="search" class="form-control" id="q" name="q" value={{ request()->get('q', '') }}>
        </div>
        <button type="submit" class="btn btn-primary">Search</button>
    </form>


@endsection

@section('aside')
    @parent
    <p>Если вы хотите узнать больше !зайдите и прочитайте в раздел О Нас!</p>
@endsection
