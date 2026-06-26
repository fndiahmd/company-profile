@extends('layouts.admin')

@section('title', $article->title)

@section('content')
<a class="btn btn-outline-secondary mb-3" href="{{ route('admin.articles.index') }}">Kembali</a>
<div class="card bg-white">
    <div class="card-body">
        <h1 class="h3">{{ $article->title }}</h1>
        <p class="text-muted">{{ $article->category }} · Urutan {{ $article->order }}</p>
        @if($article->image)<img class="img-fluid mb-3" src="{{ asset($article->image) }}" alt="{{ $article->title }}">@endif
        <div>{!! nl2br(e($article->content)) !!}</div>
    </div>
</div>
@endsection
