@extends('layouts.admin')

@section('title', 'Profil Perusahaan')

@section('content')
    <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3 mb-4">
        <div>
            <p class="text-muted mb-1">Data ini ditampilkan di halaman About.</p>
            <h2 class="h3 fw-bold mb-0">Profil Perusahaan</h2>
        </div>
        <a class="btn btn-outline-dark rounded-pill px-4" href="/about">Lihat About</a>
    </div>

    <form method="POST" action="{{ route('admin.company-profile.update') }}" enctype="multipart/form-data" class="card admin-card card-body p-4">
        @csrf @method('PUT')

        <div class="row g-3">
            <div class="col-md-6">
                <label class="form-label" for="company_name">Nama Perusahaan</label>
                <input class="form-control" id="company_name" name="company_name" value="{{ old('company_name', $profile?->company_name) }}" required>
            </div>

            <div class="col-md-3">
                <label class="form-label" for="phone">Telepon</label>
                <input class="form-control" id="phone" name="phone" value="{{ old('phone', $profile?->phone) }}">
            </div>

            <div class="col-md-3">
                <label class="form-label" for="email">Email</label>
                <input class="form-control" id="email" type="email" name="email" value="{{ old('email', $profile?->email) }}">
            </div>

            <div class="col-12">
                <label class="form-label" for="description">Deskripsi</label>
                <textarea class="form-control" id="description" name="description" rows="5" required>{{ old('description', $profile?->description) }}</textarea>
            </div>

            <div class="col-md-6">
                <label class="form-label" for="vision">Visi</label>
                <textarea class="form-control" id="vision" name="vision" rows="4">{{ old('vision', $profile?->vision) }}</textarea>
            </div>

            <div class="col-md-6">
                <label class="form-label" for="mission">Misi</label>
                <textarea class="form-control" id="mission" name="mission" rows="4">{{ old('mission', $profile?->mission) }}</textarea>
            </div>

            <div class="col-12">
                <label class="form-label" for="address">Alamat</label>
                <textarea class="form-control" id="address" name="address" rows="2">{{ old('address', $profile?->address) }}</textarea>
            </div>

            <div class="col-12">
                <label class="form-label" for="logo">Logo</label>
                @if($profile?->logo)
                    <div class="mb-3">
                        <img class="img-thumbnail admin-img-preview" src="{{ asset($profile->logo) }}" alt="Logo {{ $profile->company_name }}">
                        <div class="form-text">Logo saat ini. Kosongkan input file jika tidak ingin mengganti logo.</div>
                    </div>
                @endif
                <input class="form-control" id="logo" type="file" name="logo" accept="image/*">
            </div>
        </div>

        <div class="mt-4 d-flex gap-2">
            <button class="btn btn-dark px-4" type="submit">Simpan Profil</button>
            <a class="btn btn-outline-secondary" href="{{ route('admin.dashboard') }}">Batal</a>
        </div>
    </form>
@endsection
