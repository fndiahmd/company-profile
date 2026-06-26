<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Gallery;
use Illuminate\View\View;

class ArticleController extends Controller
{
    public function index(): View
    {
        $articles = Article::orderBy('order')->latest()->get();
        $articleHero = Gallery::query()
            ->where('placement', 'article_hero')
            ->where('is_active', true)
            ->orderBy('order')
            ->latest()
            ->first();

        return view('pages.article', compact('articles', 'articleHero'));
    }

    public function show($id): View
    {
        $article = Article::findOrFail($id);
        $articleHero = Gallery::query()
            ->where('placement', 'article_hero')
            ->where('is_active', true)
            ->orderBy('order')
            ->latest()
            ->first();

        return view('pages.article-detail', compact('article', 'articleHero'));
    }
}
