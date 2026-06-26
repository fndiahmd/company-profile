# Deployment Guide

Panduan ini untuk deploy Laravel 12 ke Vercel dengan Railway MySQL sebagai
database. Project ini memakai Vite minimal untuk build frontend.

## 1. Generate App Key

Jalankan di lokal:

```bash
php artisan key:generate --show
```

Copy hasilnya ke environment variable Vercel sebagai `APP_KEY`.

## 2. Railway MySQL

1. Buat service MySQL di Railway.
2. Copy `MYSQL_PUBLIC_URL` dari Railway.
3. Masukkan ke Vercel sebagai variable berikut:

```env
MYSQL_PUBLIC_URL=mysql://root:password@proxy-domain:proxy-port/railway
```

Gunakan `MYSQL_PUBLIC_URL` untuk Vercel. `MYSQL_URL` Railway memakai private
domain dan biasanya hanya bisa diakses dari service di Railway.

Jika Railway tidak menyediakan public URL, isi manual:

```env
DB_HOST=your-railway-host
DB_PORT=3306
DB_DATABASE=railway
DB_USERNAME=root
DB_PASSWORD=your-password
```

## 3. Vercel Environment Variables

Set variable ini di Vercel:

```env
APP_NAME="Nigmagrid Indonesia"
APP_ENV=production
APP_KEY=base64:your-generated-key
APP_DEBUG=false
APP_URL=https://nigmagrid-company-profile.vercel.app

LOG_CHANNEL=stderr
LOG_LEVEL=error

DB_CONNECTION=mysql
DB_URL=
MYSQL_PUBLIC_URL=mysql://root:password@proxy-domain:proxy-port/railway
MYSQL_URL=
DATABASE_URL=
DB_HOST=
DB_PORT=3306
DB_DATABASE=railway
DB_USERNAME=root
DB_PASSWORD=

SESSION_DRIVER=cookie
CACHE_STORE=array
QUEUE_CONNECTION=sync

BROADCAST_CONNECTION=log
FILESYSTEM_DISK=local
MAIL_MAILER=log
```

Catatan: kalau `MYSQL_PUBLIC_URL` sudah diisi, `DB_HOST`, `DB_DATABASE`,
`DB_USERNAME`, dan `DB_PASSWORD` boleh dikosongkan.

## 4. Vercel Build Settings

Pastikan Vercel menjalankan:

```bash
npm run build
```

Vercel akan menjalankan `npm install` otomatis lalu `vite build`.

## 5. Database Migration

Setelah env Railway MySQL sudah benar, jalankan migrasi dan seeder ke database
Railway:

```bash
php artisan migrate --seed
```

Jika menjalankan dari lokal, pastikan `.env` lokal memakai credential Railway.

## 6. Upload Image Paths

Admin upload tetap memakai folder public:

- Artikel: `public/images/artikel`
- Layanan: `public/images/layanan`
- Galeri: `public/images/galeri`
- Profil: `public/images/profil`

Folder kosong disimpan dengan `.gitkeep`.

## 7. Troubleshooting

Jika halaman putih atau 500:

1. Cek Vercel logs.
2. Pastikan `APP_KEY` sudah diisi.
3. Pastikan `MYSQL_URL` atau credential `DB_*` benar.
4. Pastikan `php artisan migrate --seed` sudah dijalankan.
5. Untuk melihat error asli sementara, set `APP_DEBUG=true`, redeploy, baca error,
   lalu balikan ke `APP_DEBUG=false`.

Jika browser mendownload file PHP:

1. Pastikan `vercel.json` terbaru sudah ter-push.
2. Redeploy project.
3. Pastikan route `/` diarahkan ke `api/index.php`, bukan static `public/index.php`.
