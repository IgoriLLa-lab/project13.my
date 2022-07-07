@extends('layouts.general')

@section('title-general')
    Домашняя страница!Тут вы можете почитать интересные статьи!
@endsection

@section('content')
    <h1>Тут вы можете оставить комментарий к этой статье</h1>
    <table class='table table-hover table-responsive table-bordered'>
        <tr>
            <th>Автор</th>
            <th>Тема статьи</th>
            <th>Статья</th>
            <th>Аватар</th>

            <tr>
                <td>{{ $post->name }}</td>
                <td>{{ $post->subject }}</td>
                <td>{{ $post->message }}</td>
                <td><img src="{{ asset('/storage/' . $post->image) }}"></td>
        </tr>
    </table>

{{--    не реализовано!--}}
    <h4>Коментарии</h4>
    @foreach($post->comments as $comment)
        <div class="display-comment">
            <p>{{ $comment->comment }}</p>
        </div>
    @endforeach
    <hr/>

    <h7>Добавить комментарий</h7>
    <form action="{{ route('comment-add') }}" method="post">
        @csrf
        <div class="form-group">
                <input type="text" name="comment" class="form-control" />
            <input type="hidden" name="post_id" value="{{ $post->id }}" />
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-warning" value="Добавить" />
        </div>
    </form>

@endsection

@section('aside')
    @parent
    <p>Если вы хотите узнать больше !зайдите и прочитайте в раздел О Нас!</p>
@endsection
