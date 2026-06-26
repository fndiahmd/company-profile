<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Response;

class ReportController extends Controller
{
    public function articlesPdf(): Response
    {
        $articles = Article::orderBy('order')->get();
        $pdf = Pdf::loadView('admin.reports.articles-pdf', compact('articles'));

        return $pdf->download('laporan-artikel.pdf');
    }
}
