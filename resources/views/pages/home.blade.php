@extends('layouts.app')
@section('title', 'Home')

@section('content')
    @php
        $companyName = $profile?->company_name ?? 'Nigmagrid';
        $heroImage = $homeHero?->image_url ?? asset('images/image1.jpeg');
        $aboutImage = $profile?->logo ? asset($profile->logo) : asset('images/nigmagrid.jpeg');
    @endphp

    <section class="page-hero tall text-center text-white" style="background-image:url('{{ $heroImage }}')">
        <div class="hero-overlay"></div>
        <div class="container hero-content">
            <span class="badge rounded-pill text-bg-warning mb-3 px-3 py-2">{{ $companyName }}</span>
            <h1 class="display-3 fw-bold section-title">Smart Digital Solutions</h1>
            <p class="lead mt-3 mx-auto" style="max-width:760px;">{{ $profile?->vision ?? 'Empowering businesses with scalable cloud, security, and IT infrastructure solutions.' }}</p>
            <a href="/contact" class="btn btn-brand mt-4 px-5 py-2">Get Started</a>
        </div>
    </section>

    <section class="container section-pad">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <p class="text-brand fw-semibold mb-2">About Us</p>
                <h2 class="section-title mb-4">About {{ $companyName }}</h2>
                <p class="text-muted">{{ $profile?->description ?? 'Nigmagrid is a technology-driven company specializing in cloud computing, IT infrastructure, and digital transformation services.' }}</p>
                <p class="text-muted">{{ $profile?->mission ?? 'We help organizations scale efficiently through reliable systems, secure networks, and innovative digital solutions.' }}</p>
                <a href="/about" class="btn btn-outline-warning mt-3 px-4">Learn More</a>
            </div>
            <div class="col-lg-6 text-center">
                <img src="{{ $aboutImage }}" class="img-fluid rounded-4 shadow" style="max-height:420px;object-fit:cover;" alt="{{ $companyName }}">
            </div>
        </div>
    </section>

    <section class="section-soft section-pad">
        <div class="container text-center">
            <p class="text-brand fw-semibold mb-2">Services</p>
            <h2 class="section-title mb-5">Our Services</h2>
            <div class="row g-4">
                @forelse($services as $service)
                    <div class="col-md-6 col-xl-4">
                        <div class="brand-card h-100 overflow-hidden text-start">
                            @if($service->image)
                                <img class="brand-image-sm" src="{{ asset($service->image) }}" alt="{{ $service->title }}">
                            @endif
                            <div class="p-4">
                                <span class="badge text-bg-light border mb-3">{{ $service->category }}</span>
                                <h5 class="fw-bold">{{ $service->title }}</h5>
                                <p class="text-muted mb-0">{{ $service->description ?: 'Reliable technology solution tailored to support business growth.' }}</p>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12"><div class="brand-card p-5 text-muted">Belum ada layanan tersedia.</div></div>
                @endforelse
            </div>
            <a href="/service" class="btn btn-outline-dark mt-5 px-4">View All Services</a>
        </div>
    </section>

    <section class="container section-pad">
        <div class="text-center mb-5">
            <p class="text-brand fw-semibold mb-2">Insights</p>
            <h2 class="section-title">Latest Articles</h2>
        </div>
        <div class="row g-4">
            @forelse($articles as $item)
                <div class="col-md-4">
                    <div class="brand-card h-100 overflow-hidden">
                        @if($item->image)
                            <img class="brand-image-sm" src="{{ asset($item->image) }}" alt="{{ $item->title }}">
                        @endif
                        <div class="p-4">
                            <span class="badge text-bg-light border mb-3">{{ $item->category }}</span>
                            <h5 class="fw-bold">{{ $item->title }}</h5>
                            <p class="text-muted small">{{ \Illuminate\Support\Str::limit($item->content, 110) }}</p>
                            <a href="{{ route('article.show', $item->id) }}" class="text-brand fw-semibold text-decoration-none">Read More</a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12 text-center"><div class="brand-card p-5 text-muted">Tidak ada artikel tersedia.</div></div>
            @endforelse
        </div>
    </section>

    <section class="cta-band section-pad text-center">
        <div class="container">
            <h2 class="section-title">Ready to Transform Your Business?</h2>
            <p class="mt-3 text-white-50">Let’s build your digital future together.</p>
            <a href="/contact" class="btn btn-brand mt-3 px-4">Contact Us</a>
        </div>
    </section>
@endsection
