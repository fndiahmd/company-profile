<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    public const PLACEMENTS = [
        'home_hero' => 'Background Home',
        'about_hero' => 'Background About',
        'service_hero' => 'Background Layanan',
        'contact_hero' => 'Background Kontak',
        'article_hero' => 'Background Artikel',
        'general_gallery' => 'Galeri Umum',
    ];

    protected $fillable = [
        'title',
        'caption',
        'image',
        'placement',
        'is_active',
        'order',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    public function getImageUrlAttribute(): string
    {
        return asset($this->image);
    }

    public function getPlacementLabelAttribute(): string
    {
        return self::PLACEMENTS[$this->placement] ?? self::PLACEMENTS['general_gallery'];
    }
}
