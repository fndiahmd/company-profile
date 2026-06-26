<!DOCTYPE html>
<html>
<head><meta charset="UTF-8"><title>Laporan Artikel</title><style>body{font-family:sans-serif;font-size:12px}table{width:100%;border-collapse:collapse}th,td{border:1px solid #333;padding:6px}th{background:#eee}</style></head>
<body>
<h1>Laporan Artikel</h1>
<table>
    <thead><tr><th>No</th><th>Judul</th><th>Kategori</th><th>Urutan</th><th>Tanggal</th></tr></thead>
    <tbody>
        @foreach($articles as $article)
            <tr><td>{{ $loop->iteration }}</td><td>{{ $article->title }}</td><td>{{ $article->category }}</td><td>{{ $article->order }}</td><td>{{ $article->created_at }}</td></tr>
        @endforeach
    </tbody>
</table>
</body>
</html>
