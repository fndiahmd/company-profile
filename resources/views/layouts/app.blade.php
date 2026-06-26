<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Nigmagrid Indonesia')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <style>
        :root{--brand-navy:#0f172a;--brand-slate:#1e293b;--brand-blue:#1e3a5f;--brand-accent:#f59e0b;--brand-soft:#f8fafc}
        body{background:#fff;color:#0f172a}.navbar{backdrop-filter:blur(12px)}
        main{overflow:hidden}.brand-link{color:rgba(255,255,255,.78)!important}.brand-link:hover,.brand-link.active{color:var(--brand-accent)!important}
        .page-hero{min-height:62vh;padding-top:120px;padding-bottom:80px;background-size:cover;background-position:center;position:relative;display:flex;align-items:center}
        .page-hero.tall{min-height:100vh}.hero-overlay{position:absolute;inset:0;background:linear-gradient(135deg,rgba(15,23,42,.82),rgba(15,23,42,.68))}.hero-content{position:relative;z-index:1}
        .section-pad{padding:5rem 0}.section-soft{background:var(--brand-soft)}.section-title{font-weight:800;letter-spacing:-.03em}
        .brand-card{border:0;border-radius:22px;box-shadow:0 18px 45px rgba(15,23,42,.08);transition:.25s ease;background:#fff}.brand-card:hover{transform:translateY(-6px);box-shadow:0 24px 55px rgba(15,23,42,.13)}
        .brand-image{height:210px;width:100%;object-fit:cover}.brand-image-sm{height:150px;width:100%;object-fit:cover}.btn-brand{background:var(--brand-accent);border-color:var(--brand-accent);color:#111827;font-weight:700}.btn-brand:hover{background:#d97706;border-color:#d97706;color:#111827}
        .cta-band{background:linear-gradient(135deg,var(--brand-navy),var(--brand-slate));color:#fff}.text-brand{color:var(--brand-accent)!important}.bg-brand-blue{background:var(--brand-blue)}
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm fixed-top w-100">
        <div class="container">
            <a href="/" class="navbar-brand d-flex align-items-center gap-2">
                <img src="{{ asset('images/galleries/nigmagrid-logo.png') }}" style="height:50px;" alt="Nigmagrid Indonesia">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center gap-3">
                    <li class="nav-item"><a href="/" class="nav-link brand-link {{ request()->is('/') ? 'active fw-bold' : '' }}">Home</a></li>
                    <li class="nav-item"><a href="/about" class="nav-link brand-link {{ request()->is('about') ? 'active fw-bold' : '' }}">About</a></li>
                    <li class="nav-item"><a href="/service" class="nav-link brand-link {{ request()->is('service') ? 'active fw-bold' : '' }}">Service</a></li>
                    <li class="nav-item"><a href="/article" class="nav-link brand-link {{ request()->is('article*') ? 'active fw-bold' : '' }}">Article</a></li>
                    <li class="nav-item"><a href="/contact" class="nav-link brand-link {{ request()->is('contact') ? 'active fw-bold' : '' }}">Contact</a></li>
                    <li class="nav-item ms-2"><a href="/login" class="btn btn-outline-light btn-sm rounded-pill px-3">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <main>@yield('content')</main>
    <footer class="bg-dark text-white py-4">
        <div class="container d-flex flex-column flex-md-row justify-content-between gap-2 text-center text-md-start">
            <div class="fw-semibold">Nigmagrid Indonesia</div>
            <div class="text-white-50">&copy; 2026. All rights reserved.</div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
