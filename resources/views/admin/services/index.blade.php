@extends('layouts.admin')

@section('title', 'Layanan')

@section('content')
    <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3 mb-4">
        <div>
            <p class="text-muted mb-1">Kelola produk dan layanan</p>
            <h2 class="h3 fw-bold mb-0">Layanan</h2>
        </div>
        <a class="btn btn-dark rounded-pill px-4" href="{{ route('admin.services.create') }}">Tambah Layanan</a>
    </div>

    <div class="card admin-card">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-light">
                        <tr><th>Judul</th><th>Kategori</th><th>Urutan</th><th>Status</th><th class="text-end">Aksi</th></tr>
                    </thead>
                    <tbody>
                        @forelse($services as $service)
                            <tr>
                                <td class="fw-semibold">{{ $service->title }}</td>
                                <td><span class="badge text-bg-light border">{{ $service->category }}</span></td>
                                <td>{{ $service->order }}</td>
                                <td><span class="badge {{ $service->is_active ? 'text-bg-success' : 'text-bg-secondary' }}">{{ $service->is_active ? 'Aktif' : 'Nonaktif' }}</span></td>
                                <td>
                                    <div class="d-flex justify-content-end gap-2">
                                        <a class="btn btn-sm btn-outline-secondary" href="{{ route('admin.services.show',$service) }}">Lihat</a>
                                        <a class="btn btn-sm btn-outline-primary" href="{{ route('admin.services.edit',$service) }}">Edit</a>
                                        <form method="POST" action="{{ route('admin.services.destroy',$service) }}" onsubmit="return confirm('Hapus layanan?')">
                                            @csrf @method('DELETE')
                                            <button class="btn btn-sm btn-outline-danger" type="submit">Hapus</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr><td colspan="5" class="text-center text-muted py-5">Belum ada layanan.</td></tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="mt-3">{{ $services->links() }}</div>
@endsection
