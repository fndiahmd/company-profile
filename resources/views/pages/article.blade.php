@extends('layouts.app')
@section('title', 'Article')

@section('content')
    @php $heroImage = $articleHero?->image_url ?? asset('images/image9.jpeg'); @endphp

    <section class="page-hero text-center text-white" style="background-image:url('{{ $heroImage }}')">
        <div class="hero-overlay"></div>
        <div class="container hero-content">
            <span class="badge rounded-pill text-bg-warning mb-3 px-3 py-2">Insights</span>
            <h1 class="display-4 fw-bold section-title">Our Articles</h1>
            <p class="lead mt-3 mx-auto" style="max-width:760px;">Updates, awards, and company insights managed from the admin panel.</p>
        </div>
    </section>

    <section class="container section-pad">
        <div class="row g-4">
            @forelse($articles as $index => $item)
                <div class="{{ $index === 0 ? 'col-12' : 'col-md-6 col-xl-4' }}">
                    <div class="brand-card h-100 overflow-hidden {{ $index === 0 ? 'd-lg-flex' : '' }}">
                        @if($item->image)
                            <img class="{{ $index === 0 ? 'brand-image' : 'brand-image-sm' }}" src="{{ asset($item->image) }}" alt="{{ $item->title }}" style="{{ $index === 0 ? 'max-width:420px;height:auto;min-height:260px;' : '' }}">
                        @endif
                        <div class="p-4 p-lg-5 flex-grow-1">
                            <span class="badge text-bg-light border mb-3">{{ $item->category }}</span>
                            <h2 class="{{ $index === 0 ? 'h3' : 'h5' }} fw-bold">{{ $item->title }}</h2>
                            <p class="text-muted">{{ \Illuminate\Support\Str::limit($item->content, $index === 0 ? 220 : 120) }}</p>
                            <a href="{{ route('article.show', $item->id) }}" class="text-brand fw-semibold text-decoration-none">Read More</a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12"><div class="brand-card p-5 text-center text-muted">Tidak ada artikel tersedia.</div></div>
            @endforelse
        </div>
    </section>
@endsection
