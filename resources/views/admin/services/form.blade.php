<div class="row g-3">
    <div class="col-md-6">
        <label class="form-label" for="category">Kategori</label>
        <input class="form-control" id="category" name="category" value="{{ old('category', $service?->category) }}" required>
    </div>

    <div class="col-md-6">
        <label class="form-label" for="title">Judul</label>
        <input class="form-control" id="title" name="title" value="{{ old('title', $service?->title) }}" required>
    </div>

    <div class="col-md-4">
        <label class="form-label" for="order">Urutan</label>
        <input class="form-control" id="order" type="number" name="order" value="{{ old('order', $service?->order ?? 0) }}">
    </div>

    <div class="col-md-8 d-flex align-items-end">
        <div class="form-check form-switch mb-2">
            <input class="form-check-input" id="is_active" type="checkbox" name="is_active" value="1" @checked(old('is_active', $service?->is_active ?? true))>
            <label class="form-check-label" for="is_active">Aktif</label>
        </div>
    </div>

    <div class="col-12">
        <label class="form-label" for="description">Deskripsi</label>
        <textarea class="form-control" id="description" name="description" rows="5">{{ old('description', $service?->description) }}</textarea>
    </div>

    <div class="col-12">
        <label class="form-label" for="image">Gambar</label>
        @if($service?->image)
            <div class="mb-3">
                <img class="img-thumbnail admin-img-preview" src="{{ asset($service->image) }}" alt="{{ $service->title }}">
                <div class="form-text">Gambar saat ini. Kosongkan input file jika tidak ingin mengganti gambar.</div>
            </div>
        @endif
        <input class="form-control" id="image" type="file" name="image" accept="image/*">
    </div>
</div>
