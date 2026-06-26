@extends('layouts.admin')

@section('title', 'Artikel')

@section('content')
    <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3 mb-4">
        <div>
            <p class="text-muted mb-1">Kelola berita dan penghargaan</p>
            <h2 class="h3 fw-bold mb-0">Artikel</h2>
        </div>
        <a class="btn btn-dark rounded-pill px-4" href="{{ route('admin.articles.create') }}">Tambah Artikel</a>
    </div>

    <div class="card admin-card">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-light">
                        <tr><th>Judul</th><th>Kategori</th><th>Urutan</th><th>Gambar</th><th class="text-end">Aksi</th></tr>
                    </thead>
                    <tbody>
                        @forelse ($articles as $article)
                            <tr>
                                <td class="fw-semibold">{{ $article->title }}</td>
                                <td><span class="badge text-bg-light border">{{ $article->category }}</span></td>
                                <td>{{ $article->order }}</td>
                                <td>
                                    @if($article->image)
                                        <img class="admin-img-preview" src="{{ asset($article->image) }}" width="96" alt="{{ $article->title }}">
                                    @else
                                        <span class="text-muted small">Tidak ada</span>
                                    @endif
                                </td>
                                <td>
                                    <div class="d-flex justify-content-end gap-2">
                                        <a class="btn btn-sm btn-outline-secondary" href="{{ route('admin.articles.show', $article) }}">Lihat</a>
                                        <a class="btn btn-sm btn-outline-primary" href="{{ route('admin.articles.edit', $article) }}">Edit</a>
                                        <form method="POST" action="{{ route('admin.articles.destroy', $article) }}" onsubmit="return confirm('Hapus artikel?')">
                                            @csrf @method('DELETE')
                                            <button class="btn btn-sm btn-outline-danger" type="submit">Hapus</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr><td colspan="5" class="text-center text-muted py-5">Belum ada artikel.</td></tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="mt-3">{{ $articles->links() }}</div>
@endsection
