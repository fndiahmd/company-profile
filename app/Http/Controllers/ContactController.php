<?php

namespace App\Http\Controllers;

use App\Models\CompanyProfile;
use App\Models\Gallery;
use Illuminate\View\View;

class ContactController extends Controller
{
    public function index(): View
    {
        $profile = CompanyProfile::first();
        $contactHero = Gallery::query()
            ->where('placement', 'contact_hero')
            ->where('is_active', true)
            ->orderBy('order')
            ->latest()
            ->first();

        return view('pages.contact', compact('profile', 'contactHero'));
    }
}
