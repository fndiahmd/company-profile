@extends('layouts.app')
@section('title', 'About')

@section('content')
    @php
        $companyName = $profile?->company_name ?? 'Nigmagrid';
        $description = $profile?->description ?? 'Nigmagrid is a technology company focused on delivering scalable cloud solutions, advanced cybersecurity, and reliable IT infrastructure for businesses of all sizes.';
        $vision = $profile?->vision ?? 'Building reliable digital infrastructure for modern businesses.';
        $mission = $profile?->mission ?? 'We help organizations accelerate their digital transformation through efficient systems, secure platforms, and innovative solutions tailored to modern challenges.';
        $heroImage = $aboutHero?->image_url ?? asset('images/nigmagrid.jpeg');
        $logo = $profile?->logo ? asset($profile->logo) : null;
    @endphp

    <section class="page-hero text-center text-white" style="background-image:url('{{ $heroImage }}')">
        <div class="hero-overlay"></div>
        <div class="container hero-content">
            @if ($logo)
                <img class="mb-4 bg-white rounded-4 p-3 shadow" src="{{ $logo }}" alt="{{ $companyName }} logo" style="max-height:110px;">
            @endif
            <span class="badge rounded-pill text-bg-warning mb-3 px-3 py-2">About</span>
            <h1 class="display-4 fw-bold section-title">About {{ $companyName }}</h1>
            <p class="lead mt-3 mx-auto" style="max-width:780px;">{{ $vision }}</p>
        </div>
    </section>

    <section class="container section-pad text-center">
        <p class="text-brand fw-semibold mb-2">Company Profile</p>
        <h2 class="section-title mb-4">Innovative Technology Partner</h2>
        <p class="text-muted mx-auto" style="max-width:760px;">{{ $description }}</p>
        <p class="text-muted mx-auto mb-0" style="max-width:760px;">{{ $mission }}</p>
    </section>

    <section class="container pb-5">
        <div class="row g-4">
            <div class="col-md-4"><div class="brand-card h-100 p-4 text-center"><h5 class="fw-bold">Innovation</h5><p class="text-muted mb-0">We continuously adopt the latest technologies to provide cutting-edge solutions.</p></div></div>
            <div class="col-md-4"><div class="brand-card h-100 p-4 text-center"><h5 class="fw-bold">Security</h5><p class="text-muted mb-0">Protecting data and systems with strong, reliable security infrastructure.</p></div></div>
            <div class="col-md-4"><div class="brand-card h-100 p-4 text-center"><h5 class="fw-bold">Scalability</h5><p class="text-muted mb-0">Building flexible systems that grow alongside your business.</p></div></div>
        </div>
    </section>

    <section class="section-soft section-pad">
        <div class="container">
            <div class="text-center mb-5">
                <p class="text-brand fw-semibold mb-2">Why Choose Us</p>
                <h2 class="section-title">Trusted Technology Partner</h2>
            </div>
            <div class="row g-4">
                <div class="col-md-6"><div class="brand-card p-4 h-100"><h5 class="fw-bold">Experienced Team</h5><p class="text-muted mb-0">Our team consists of skilled IT professionals with deep industry experience.</p></div></div>
                <div class="col-md-6"><div class="brand-card p-4 h-100"><h5 class="fw-bold">Modern Technology</h5><p class="text-muted mb-0">We use the latest tools and platforms to ensure high performance and reliability.</p></div></div>
                <div class="col-md-6"><div class="brand-card p-4 h-100"><h5 class="fw-bold">Client Focus</h5><p class="text-muted mb-0">We prioritize your business needs and deliver tailored solutions.</p></div></div>
                <div class="col-md-6"><div class="brand-card p-4 h-100"><h5 class="fw-bold">Responsive Support</h5><p class="text-muted mb-0">Continuous support to ensure your systems run smoothly.</p></div></div>
            </div>
        </div>
    </section>

    <section class="cta-band section-pad text-center">
        <div class="container">
            <h2 class="section-title mb-5">Our Achievements</h2>
            <div class="row g-4">
                <div class="col-md-3"><div class="p-4 rounded-4 bg-dark h-100"><h1 class="fw-bold text-brand">10+</h1><p class="mb-0">Years Experience</p></div></div>
                <div class="col-md-3"><div class="p-4 rounded-4 bg-dark h-100"><h1 class="fw-bold text-brand">200+</h1><p class="mb-0">Projects Completed</p></div></div>
                <div class="col-md-3"><div class="p-4 rounded-4 bg-dark h-100"><h1 class="fw-bold text-brand">100+</h1><p class="mb-0">Clients</p></div></div>
                <div class="col-md-3"><div class="p-4 rounded-4 bg-dark h-100"><h1 class="fw-bold text-brand">25+</h1><p class="mb-0">IT Experts</p></div></div>
            </div>
        </div>
    </section>
@endsection
