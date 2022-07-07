<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request): RedirectResponse
    {

        $comment = new Comment;
        $comment->comment = $request->get('comment');
        $post = Post::query()->find($request->get('post_id'));
        $post->comments()->save($comment);

        return back()->with('success', 'Ваш комментарий отправлен');

    }

    public function commentView($id)
    {
        $comments = Post::query()->find($id)->comments()->get();

        return view('one-post', compact('comments'));
    }
}
