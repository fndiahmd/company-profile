<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\CompanyProfile;
use App\Models\Gallery;
use App\Models\Service;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function index(): View
    {
        $counts = [
            'articles' => Article::count(),
            'companyProfiles' => CompanyProfile::count(),
            'services' => Service::count(),
            'galleries' => Gallery::count(),
        ];

        return view('admin.dashboard', compact('counts'));
    }
}
