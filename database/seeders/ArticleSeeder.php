<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('articles')->insert([
            [
                'title' => 'Innovation Award "Good Achievement" PT. Jasa Marga',
                'content' => 'Penghargaan ini diberikan sebagai bentuk apresiasi atas pencapaian inovasi yang berhasil memberikan dampak positif terhadap peningkatan kinerja operasional perusahaan. Inovasi yang dikembangkan mampu meningkatkan efisiensi proses kerja, mempercepat pengambilan keputusan, serta mendukung transformasi digital di lingkungan PT. Jasa Marga secara berkelanjutan.',
                'image' => 'images/galleries/article-1.jpg',
            ],
            [
                'title' => 'Innovation Award "Good Performance" PT. Jasa Marga',
                'content' => 'Penghargaan ini diberikan atas konsistensi performa inovasi yang tinggi dalam mendukung operasional perusahaan. Inovasi yang diimplementasikan tidak hanya meningkatkan efektivitas kerja, tetapi juga membantu dalam optimalisasi sistem digital yang digunakan untuk mendukung layanan dan manajemen internal perusahaan secara lebih modern dan terintegrasi.',
                'image' => 'images/galleries/article-2.jpg',
            ],
            [
                'title' => 'Juara 2 PP Award - PT. PP Divisi EPC',
                'content' => 'Penghargaan ini diraih atas keberhasilan implementasi EPC Command Center berbasis SharePoint yang berfungsi sebagai pusat kendali kinerja proyek EPC. Sistem ini membantu meningkatkan transparansi, monitoring real-time, serta efisiensi dalam pengelolaan proyek sehingga mendukung pengambilan keputusan yang lebih cepat dan akurat.',
                'image' => 'images/galleries/article-3.jpg',
            ],
            [
                'title' => 'Juara 1 Kategori System - PT Waskita Karya Divisi 3',
                'content' => 'Penghargaan ini diberikan sebagai bentuk pengakuan atas pengembangan sistem terbaik yang berhasil meningkatkan efisiensi operasional dan digitalisasi proses bisnis. Sistem yang dibangun mampu menyederhanakan alur kerja, mengurangi proses manual, serta meningkatkan akurasi data dalam mendukung kegiatan proyek perusahaan.',
                'image' => 'images/galleries/article-4.jpg',
            ],
            [
                'title' => 'PP Award - Kantor Pusat',
                'content' => 'Penghargaan ini diberikan atas kontribusi signifikan dalam pengembangan sistem informasi dan peningkatan kinerja organisasi di tingkat kantor pusat. Inisiatif yang dilakukan berfokus pada integrasi data, optimalisasi proses bisnis, serta peningkatan kolaborasi antar divisi untuk mendukung transformasi digital perusahaan.',
                'image' => 'images/galleries/article-5.jpg',
            ],
            [
                'title' => 'Nintex Partner Award 2019 "Customer Success" APAC',
                'content' => 'Penghargaan tingkat Asia Pasifik ini diberikan sebagai pengakuan atas keberhasilan dalam implementasi solusi Nintex yang memberikan nilai tambah bagi pelanggan. Keberhasilan ini mencerminkan kemampuan dalam menghadirkan solusi otomatisasi proses bisnis yang efektif, meningkatkan produktivitas, serta kepuasan pelanggan di berbagai organisasi.',
                'image' => 'images/galleries/article-6.jpg',
            ],
        ]);
    }
}
