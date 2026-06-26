@php
    $selectedPlacement = old('placement', $gallery?->placement ?? 'general_gallery');
    $isActive = old('is_active', $gallery?->is_active ?? true);
@endphp

<div class="row g-3">
    <div class="col-md-8">
        <label class="form-label" for="title">Judul</label>
        <input class="form-control" id="title" name="title" value="{{ old('title', $gallery?->title) }}" required>
    </div>

    <div class="col-md-4">
        <label class="form-label" for="order">Urutan</label>
        <input class="form-control" id="order" type="number" name="order" value="{{ old('order', $gallery?->order ?? 0) }}">
    </div>

    <div class="col-md-8">
        <label class="form-label" for="placement">Dipakai Untuk</label>
        <select class="form-select" id="placement" name="placement" required>
            @foreach (\App\Models\Gallery::PLACEMENTS as $value => $label)
                <option value="{{ $value }}" @selected($selectedPlacement === $value)>{{ $label }}</option>
            @endforeach
        </select>
        <div class="form-text">Pilih posisi background halaman atau galeri umum.</div>
    </div>

    <div class="col-md-4 d-flex align-items-end">
        <div class="form-check form-switch mb-2">
            <input class="form-check-input" id="is_active" type="checkbox" name="is_active" value="1" @checked((bool) $isActive)>
            <label class="form-check-label" for="is_active">Aktif</label>
        </div>
    </div>

    <div class="col-12">
        <label class="form-label" for="caption">Caption</label>
        <textarea class="form-control" id="caption" name="caption" rows="3">{{ old('caption', $gallery?->caption) }}</textarea>
    </div>

    <div class="col-12">
        <label class="form-label" for="image">Gambar</label>
        @if($gallery?->image)
            <div class="mb-3">
                <img class="img-thumbnail admin-img-preview" src="{{ asset($gallery->image) }}" alt="{{ $gallery->title }}">
                <div class="form-text">Gambar saat ini. Kosongkan input file jika tidak ingin mengganti gambar.</div>
            </div>
        @endif
        <input class="form-control" id="image" type="file" name="image" accept="image/*" @required(! $gallery)>
    </div>
</div>
