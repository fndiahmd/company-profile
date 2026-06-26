@extends('layouts.admin')
@section('title', $gallery->title)
@section('content')
<a class="btn btn-outline-secondary mb-3" href="{{ route('admin.galleries.index') }}">Kembali</a>
<div class="card bg-white"><div class="card-body"><h1 class="h3">{{ $gallery->title }}</h1><p class="text-muted">Urutan {{ $gallery->order }}</p><img class="img-fluid mb-3" src="{{ asset($gallery->image) }}" alt="{{ $gallery->title }}"><div>{!! nl2br(e($gallery->caption)) !!}</div></div></div>
@endsection
