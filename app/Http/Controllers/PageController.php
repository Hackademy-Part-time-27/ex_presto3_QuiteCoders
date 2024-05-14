<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class PageController extends Controller
{

    public function welcome()
    {
        $title = config('app.name');

        return view('welcome', compact('title'));

    }

    public function aboutMe()
    {
        $name = 'Giuseppe';

        return view('pages.about-me', [
            'title' => $name,
            'description' => 'Laravel<br>Teacher',
        ]);
    }

    public function articles()
    {
        $articles = Article::where('visible', true)->get();

        return view('pages.articles', ['articles' => $articles]);
    }

    public function article(Article $article)
    {
        return view('pages.article', ['article' => $article]);
    }
}