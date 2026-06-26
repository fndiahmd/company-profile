@extends('layouts.app')
@section('title', 'Services')

@section('content')
    @php $heroImage = $serviceHero?->image_url ?? asset('images/image7.jpeg'); @endphp

    <section class="page-hero text-center text-white" style="background-image:url('{{ $heroImage }}')">
        <div class="hero-overlay"></div>
        <div class="container hero-content">
            <span class="badge rounded-pill text-bg-warning mb-3 px-3 py-2">Services</span>
            <h1 class="display-4 fw-bold section-title">Our Services</h1>
            <p class="lead mt-3 mx-auto" style="max-width:760px;">Comprehensive IT solutions to support your business growth.</p>
        </div>
    </section>

    <section class="container section-pad">
        @forelse($services as $category => $items)
            <div class="mb-5">
                <p class="text-brand fw-semibold mb-2">{{ $category }}</p>
                <h2 class="section-title mb-4">{{ $category }} Solutions</h2>
                <div class="row g-4">
                    @foreach($items as $item)
                        <div class="col-md-6 col-xl-4">
                            <div class="brand-card h-100 overflow-hidden">
                                @if($item->image)
                                    <img class="brand-image" src="{{ asset($item->image) }}" alt="{{ $item->title }}">
                                @endif
                                <div class="p-4">
                                    <h5 class="fw-bold">{{ $item->title }}</h5>
                                    <p class="text-muted mb-0">{{ $item->description ?: 'Reliable and scalable IT service tailored to your business needs.' }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @empty
            <div class="brand-card p-5 text-center text-muted">Belum ada layanan aktif.</div>
        @endforelse
    </section>

    <section class="section-soft section-pad">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <p class="text-brand fw-semibold mb-2">Why Choose Us</p>
                    <h2 class="section-title mb-4">Why Our Services?</h2>
                    <p class="text-muted">We provide reliable and scalable IT services tailored to your business needs. Our solutions are built with modern technology and best practices.</p>
                    <ul class="text-muted mb-0">
                        <li>High performance systems</li>
                        <li>Secure and reliable infrastructure</li>
                        <li>Experienced IT professionals</li>
                        <li>Responsive support</li>
                    </ul>
                </div>
                <div class="col-lg-6 text-center">
                    <img src="{{ asset('images/galleries/image8.jpeg') }}" class="img-fluid rounded-4 shadow" style="max-height:420px;object-fit:cover;" alt="Service support">
                </div>
            </div>
        </div>
    </section>

    <section class="cta-band section-pad text-center">
        <div class="container">
            <h2 class="section-title">Need Custom IT Solutions?</h2>
            <p class="mt-3 text-white-50">We are ready to help your business grow with technology.</p>
            <a href="/contact" class="btn btn-brand mt-3 px-4">Contact Us</a>
        </div>
    </section>
@endsection
