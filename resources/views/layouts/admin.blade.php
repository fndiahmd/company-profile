<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin')</title>
    <link rel="stylesheet" href="{{ asset('bootstrap-5.3.8-dist/css/bootstrap.min.css') }}">
    <style>
        :root {
            --admin-sidebar: #0f172a;
            --admin-accent: #f59e0b;
            --admin-soft: #f8fafc;
        }

        body {
            background: var(--admin-soft);
        }

        .admin-shell {
            min-height: 100vh;
        }

        .admin-sidebar {
            background: linear-gradient(180deg, var(--admin-sidebar), #1e293b);
            box-shadow: 12px 0 35px rgba(15, 23, 42, 0.12);
        }

        .admin-brand-badge {
            width: 42px;
            height: 42px;
            background: rgba(245, 158, 11, 0.16);
            color: var(--admin-accent);
        }

        .admin-nav-link {
            color: rgba(255,255,255,.72);
            border-radius: 14px;
            padding: .78rem 1rem;
            transition: .2s ease;
        }

        .admin-nav-link:hover,
        .admin-nav-link.active {
            background: rgba(255,255,255,.1);
            color: #fff;
            transform: translateX(4px);
        }

        .admin-card {
            border: 0;
            border-radius: 20px;
            box-shadow: 0 18px 45px rgba(15, 23, 42, 0.08);
        }

        .admin-stat-icon {
            width: 44px;
            height: 44px;
            background: rgba(245, 158, 11, 0.14);
            color: #b45309;
        }

        .admin-img-preview {
            max-height: 160px;
            object-fit: cover;
            border-radius: 14px;
        }

        .table > :not(caption) > * > * {
            padding: 1rem;
        }

        @media (min-width: 992px) {
            .admin-sidebar {
                width: 280px;
                position: sticky;
                top: 0;
                height: 100vh;
            }

            .admin-content {
                min-width: 0;
            }
        }
    </style>
</head>
<body>
    @php
        $navItems = [
            ['label' => 'Dashboard', 'route' => 'admin.dashboard', 'match' => 'admin.dashboard'],
            ['label' => 'Artikel', 'route' => 'admin.articles.index', 'match' => 'admin.articles.*'],
            ['label' => 'Profil', 'route' => 'admin.company-profile.edit', 'match' => 'admin.company-profile.*'],
            ['label' => 'Layanan', 'route' => 'admin.services.index', 'match' => 'admin.services.*'],
            ['label' => 'Galeri', 'route' => 'admin.galleries.index', 'match' => 'admin.galleries.*'],
            ['label' => 'Report PDF', 'route' => 'admin.reports.articles', 'match' => 'admin.reports.*'],
        ];
    @endphp

    <div class="admin-shell d-lg-flex">
        <aside class="admin-sidebar text-white p-3 p-lg-4">
            <div class="d-flex align-items-center gap-3 mb-4">
                <div class="admin-brand-badge rounded-4 d-flex align-items-center justify-content-center fw-bold">NG</div>
                <div>
                    <div class="fw-bold fs-5">Admin Panel</div>
                    <div class="small text-white-50">Nigmagrid CMS</div>
                </div>
            </div>

            <nav class="d-grid gap-2">
                @foreach ($navItems as $item)
                    <a class="admin-nav-link text-decoration-none {{ request()->routeIs($item['match']) ? 'active' : '' }}" href="{{ route($item['route']) }}">
                        {{ $item['label'] }}
                    </a>
                @endforeach
            </nav>

            <div class="mt-4 pt-4 border-top border-light border-opacity-10">
                <a class="btn btn-outline-light w-100 mb-2" href="/">Lihat Website</a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button class="btn btn-warning w-100" type="submit">Logout</button>
                </form>
            </div>
        </aside>

        <div class="admin-content flex-grow-1">
            <header class="bg-white border-bottom">
                <div class="container-fluid py-3 px-3 px-lg-4 d-flex justify-content-between align-items-center">
                    <div>
                        <div class="text-muted small">Admin</div>
                        <h1 class="h4 mb-0">@yield('title', 'Dashboard')</h1>
                    </div>
                    <span class="badge rounded-pill text-bg-light border">{{ now()->format('d M Y') }}</span>
                </div>
            </header>

            <main class="container-fluid p-3 p-lg-4">
                @if (session('success'))
                    <div class="alert alert-success border-0 shadow-sm rounded-4">{{ session('success') }}</div>
                @endif

                @if ($errors->any())
                    <div class="alert alert-danger border-0 shadow-sm rounded-4">
                        <div class="fw-semibold mb-2">Periksa kembali input:</div>
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @yield('content')
            </main>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
