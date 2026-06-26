<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\CompanyProfile;
use App\Models\Gallery;
use App\Models\Service;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        $profile = CompanyProfile::first();
        $homeHero = Gallery::query()
            ->where('placement', 'home_hero')
            ->where('is_active', true)
            ->orderBy('order')
            ->latest()
            ->first();
        $services = Service::where('is_active', true)
            ->orderBy('order')
            ->take(6)
            ->get();
        $articles = Article::latest()->take(3)->get();

        return view('pages.home', compact('profile', 'homeHero', 'services', 'articles'));
    }
}
