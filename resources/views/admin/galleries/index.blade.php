@extends('layouts.admin')

@section('title', 'Galeri')

@section('content')
    <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3 mb-4">
        <div>
            <p class="text-muted mb-1">Atur gambar galeri dan background halaman</p>
            <h2 class="h3 fw-bold mb-0">Galeri</h2>
        </div>
        <a class="btn btn-dark rounded-pill px-4" href="{{ route('admin.galleries.create') }}">Tambah Galeri</a>
    </div>

    <div class="row g-4">
        @forelse($galleries as $gallery)
            <div class="col-md-6 col-xl-3">
                <div class="card admin-card h-100 overflow-hidden">
                    <img class="card-img-top" src="{{ asset($gallery->image) }}" alt="{{ $gallery->title }}" style="height: 180px; object-fit: cover;">
                    <div class="card-body">
                        <div class="d-flex justify-content-between gap-2 mb-2">
                            <h2 class="h6 fw-bold mb-0">{{ $gallery->title }}</h2>
                            <span class="badge {{ $gallery->is_active ?? true ? 'text-bg-success' : 'text-bg-secondary' }}">{{ $gallery->is_active ?? true ? 'Aktif' : 'Nonaktif' }}</span>
                        </div>
                        <div class="small text-muted mb-2">{{ $gallery->placement_label ?? 'Galeri Umum' }}</div>
                        <p class="text-muted small mb-3">{{ $gallery->caption ?: 'Tidak ada caption.' }}</p>
                        <div class="d-flex flex-wrap gap-2">
                            <a class="btn btn-sm btn-outline-secondary" href="{{ route('admin.galleries.show',$gallery) }}">Lihat</a>
                            <a class="btn btn-sm btn-outline-primary" href="{{ route('admin.galleries.edit',$gallery) }}">Edit</a>
                            <form method="POST" action="{{ route('admin.galleries.destroy',$gallery) }}" onsubmit="return confirm('Hapus galeri?')">
                                @csrf @method('DELETE')
                                <button class="btn btn-sm btn-outline-danger" type="submit">Hapus</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12">
                <div class="card admin-card"><div class="card-body text-center text-muted py-5">Belum ada galeri.</div></div>
            </div>
        @endforelse
    </div>

    <div class="mt-3">{{ $galleries->links() }}</div>
@endsection
