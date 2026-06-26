@extends('layouts.app')
@section('title', $article->title ?? 'Article Detail')

@section('content')
    @php
        $heroImage = $articleHero?->image_url ?? asset('images/image9.jpeg');
    @endphp

    <section class="page-hero text-white" style="background-image:url('{{ $heroImage }}')">
        <div class="hero-overlay"></div>
        <div class="container hero-content">
            <span class="badge rounded-pill text-bg-warning mb-3 px-3 py-2">{{ $article->category }}</span>
            <h1 class="fw-bold display-5 section-title" style="max-width:900px;">{{ $article->title }}</h1>
        </div>
    </section>

    <section class="container section-pad">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="mb-4">
                    <a href="/article" class="text-decoration-none text-brand fw-semibold">← Back to Articles</a>
                </div>
                @if($article->image)
                    <div class="mb-4">
                        <img src="{{ asset($article->image) }}" class="img-fluid rounded-4 shadow w-100" style="max-height:480px;object-fit:cover;" alt="{{ $article->title }}">
                    </div>
                @endif
                <article class="brand-card p-4 p-lg-5">
                    <div class="text-muted" style="line-height:1.9;font-size:1.05rem;">
                        {!! nl2br(e($article->content)) !!}
                    </div>
                </article>
            </div>
        </div>
    </section>
@endsection
