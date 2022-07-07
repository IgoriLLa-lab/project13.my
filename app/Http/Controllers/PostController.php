<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Models\Post;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function post()
    {
        return view('post');
    }


    /**
     * Функция показа страницы About
     */
    public function about()
    {
        return view('about');
    }

    /**
     * Функция отправки поста в Базу данных
     * @param PostRequest $req
     * @return RedirectResponse
     */
    public function submit(PostRequest $req): RedirectResponse
    {


        $name = $req->input('name');
        $subject = $req->input('subject');
        $message = $req->input('message');
        $path = $req->file('image')->store('uploads', 'public');

        $post = new Post();

        $post->name = $name;
        $post->subject = $subject;
        $post->message = $message;
        $post->image = $path;

        $post->save();

        return redirect()->route('post')->with('success', 'Ваш пост отправлен и опубликован');

    }

    /**
     * Функция вывода всех постов
     */
    public function allPost()
    {
        $post = DB::table('posts')->get();
        return view('home', ['posts' => $post]);

    }

    public function showPostByCar()
    {
        $post = DB::table('posts')->where('subject', 'LIKE', '%авто%')->get();
        return view('car-theme', ['posts' => $post]);
    }

    public function showTwoHoursTheme()
    {
        $post = DB::table('posts')->orderBy('created_at', 'desc')->limit(3)->get();
        return view('two-hour', ['posts' => $post]);
    }

    public function viewOne($id)
    {
        $post = Post::query()->find($id);

        return view('one-post', compact('post'));
    }
}
