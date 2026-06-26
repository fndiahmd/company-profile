@extends('layouts.admin')

@section('title', 'Dashboard Admin')

@section('content')
    <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3 mb-4">
        <div>
            <p class="text-muted mb-1">Ringkasan konten website</p>
            <h2 class="h3 fw-bold mb-0">Dashboard Admin</h2>
        </div>
        <a class="btn btn-outline-dark rounded-pill px-4" href="/">Lihat Website</a>
    </div>

    <div class="row g-3 mb-4">
        @foreach ([
            ['label' => 'Artikel', 'value' => $counts['articles'], 'route' => 'admin.articles.index'],
            ['label' => 'Profil', 'value' => $counts['companyProfiles'], 'route' => 'admin.company-profile.edit'],
            ['label' => 'Layanan', 'value' => $counts['services'], 'route' => 'admin.services.index'],
            ['label' => 'Galeri', 'value' => $counts['galleries'], 'route' => 'admin.galleries.index'],
        ] as $item)
            <div class="col-md-6 col-xl-3">
                <a class="text-decoration-none text-dark" href="{{ route($item['route']) }}">
                    <div class="card admin-card h-100">
                        <div class="card-body d-flex justify-content-between align-items-start">
                            <div>
                                <div class="text-muted small text-uppercase fw-semibold">{{ $item['label'] }}</div>
                                <div class="display-6 fw-bold mb-0">{{ $item['value'] }}</div>
                            </div>
                            <div class="admin-stat-icon rounded-4 d-flex align-items-center justify-content-center fw-bold">{{ mb_substr($item['label'], 0, 1) }}</div>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>

    <div class="card admin-card">
        <div class="card-body p-4">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <div>
                    <h2 class="h5 fw-bold mb-1">Menu Pengelolaan</h2>
                    <p class="text-muted mb-0">Kelola konten yang tampil di halaman publik.</p>
                </div>
            </div>
            <div class="row g-3">
                <div class="col-md-6 col-xl-4"><a class="btn btn-light border w-100 text-start p-3 rounded-4" href="{{ route('admin.articles.index') }}">Kelola Artikel/Berita</a></div>
                <div class="col-md-6 col-xl-4"><a class="btn btn-light border w-100 text-start p-3 rounded-4" href="{{ route('admin.company-profile.edit') }}">Kelola Profil Perusahaan</a></div>
                <div class="col-md-6 col-xl-4"><a class="btn btn-light border w-100 text-start p-3 rounded-4" href="{{ route('admin.services.index') }}">Kelola Produk/Layanan</a></div>
                <div class="col-md-6 col-xl-4"><a class="btn btn-light border w-100 text-start p-3 rounded-4" href="{{ route('admin.galleries.index') }}">Kelola Galeri</a></div>
                <div class="col-md-6 col-xl-4"><a class="btn btn-light border w-100 text-start p-3 rounded-4" href="{{ route('admin.reports.articles') }}">Export Report Artikel PDF</a></div>
            </div>
        </div>
    </div>
@endsection
