<?php

namespace App\Http\Controllers;

use App\Models\CompanyProfile;
use App\Models\Gallery;
use Illuminate\View\View;

class AboutController extends Controller
{
    public function index(): View
    {
        $profile = CompanyProfile::first();
        $aboutHero = Gallery::query()
            ->where('placement', 'about_hero')
            ->where('is_active', true)
            ->orderBy('order')
            ->latest()
            ->first();

        return view('pages.about', compact('profile', 'aboutHero'));
    }
}
