@extends('layouts.admin')
@section('title', $service->title)
@section('content')
<a class="btn btn-outline-secondary mb-3" href="{{ route('admin.services.index') }}">Kembali</a>
<div class="card bg-white"><div class="card-body"><h1 class="h3">{{ $service->title }}</h1><p class="text-muted">{{ $service->category }} · Urutan {{ $service->order }} · {{ $service->is_active ? 'Aktif' : 'Tidak aktif' }}</p>@if($service->image)<img class="img-fluid mb-3" src="{{ asset($service->image) }}" alt="{{ $service->title }}">@endif<div>{!! nl2br(e($service->description)) !!}</div></div></div>
@endsection
