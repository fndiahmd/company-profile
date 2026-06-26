@extends('layouts.admin')
@section('title', 'Edit Layanan')
@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <p class="text-muted mb-1">Perbarui produk atau layanan</p>
            <h2 class="h3 fw-bold mb-0">Edit Layanan</h2>
        </div>
        <a class="btn btn-outline-secondary" href="{{ route('admin.services.index') }}">Kembali</a>
    </div>

    <form method="POST" action="{{ route('admin.services.update', $service) }}" enctype="multipart/form-data" class="card admin-card card-body p-4">
        @csrf @method('PUT')
        @include('admin.services.form', ['service' => $service])
        <div class="mt-4 d-flex gap-2">
            <button class="btn btn-dark px-4" type="submit">Simpan</button>
            <a class="btn btn-outline-secondary" href="{{ route('admin.services.index') }}">Batal</a>
        </div>
    </form>
@endsection
