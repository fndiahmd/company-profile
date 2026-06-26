<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GallerySeeder extends Seeder
{
    public function run(): void
    {
        DB::table('galleries')->insert([
            [
                'title' => 'Home Hero Background',
                'caption' => 'Background halaman utama website Nigmagrid.',
                'image' => 'images/galleries/home-hero.jpg',
                'placement' => 'home_hero',
                'is_active' => true,
                'order' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'About Hero Background',
                'caption' => 'Background halaman About Nigmagrid.',
                'image' => 'images/galleries/about-hero.jpg',
                'placement' => 'about_hero',
                'is_active' => true,
                'order' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Service Hero Background',
                'caption' => 'Background halaman Layanan Nigmagrid.',
                'image' => 'images/galleries/service-hero.jpg',
                'placement' => 'service_hero',
                'is_active' => true,
                'order' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Contact Hero Background',
                'caption' => 'Background halaman Kontak Nigmagrid.',
                'image' => 'images/galleries/contact-hero.jpg',
                'placement' => 'contact_hero',
                'is_active' => true,
                'order' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Article Hero Background',
                'caption' => 'Background halaman Artikel Nigmagrid.',
                'image' => 'images/galleries/article-hero.jpg',
                'placement' => 'article_hero',
                'is_active' => true,
                'order' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Galeri Umum - Infrastruktur',
                'caption' => 'Dokumentasi infrastruktur teknologi Nigmagrid.',
                'image' => 'images/galleries/general-1.jpg',
                'placement' => 'general_gallery',
                'is_active' => true,
                'order' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Galeri Umum - Tim Kami',
                'caption' => 'Dokumentasi kegiatan tim Nigmagrid.',
                'image' => 'images/galleries/general-2.jpg',
                'placement' => 'general_gallery',
                'is_active' => false,
                'order' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
