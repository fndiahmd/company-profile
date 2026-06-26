<div class="row g-3">
    <div class="col-md-8">
        <label class="form-label" for="title">Judul</label>
        <input class="form-control" id="title" name="title" value="{{ old('title', $article?->title) }}" required>
    </div>

    <div class="col-md-4">
        <label class="form-label" for="category">Kategori</label>
        <input class="form-control" id="category" name="category" value="{{ old('category', $article?->category ?? 'award') }}" required>
    </div>

    <div class="col-md-4">
        <label class="form-label" for="order">Urutan</label>
        <input class="form-control" id="order" name="order" type="number" value="{{ old('order', $article?->order ?? 0) }}">
    </div>

    <div class="col-12">
        <label class="form-label" for="content">Konten</label>
        <textarea class="form-control" id="content" name="content" rows="6" required>{{ old('content', $article?->content) }}</textarea>
    </div>

    <div class="col-12">
        <label class="form-label" for="image">Gambar</label>
        @if($article?->image)
            <div class="mb-3">
                <img class="img-thumbnail admin-img-preview" src="{{ asset($article->image) }}" alt="{{ $article->title }}">
                <div class="form-text">Gambar saat ini. Kosongkan input file jika tidak ingin mengganti gambar.</div>
            </div>
        @endif
        <input class="form-control" id="image" name="image" type="file" accept="image/*">
    </div>
</div>
