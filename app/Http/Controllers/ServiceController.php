<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Service;
use Illuminate\View\View;

class ServiceController extends Controller
{
    public function index(): View
    {
        $services = Service::where('is_active', true)
            ->orderBy('category')
            ->orderBy('order')
            ->get()
            ->groupBy('category');
        $serviceHero = Gallery::query()
            ->where('placement', 'service_hero')
            ->where('is_active', true)
            ->orderBy('order')
            ->latest()
            ->first();

        return view('pages.service', compact('services', 'serviceHero'));
    }
}
