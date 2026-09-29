# Wireframe SIMPUS-Mini

## Layout Umum

```
┌─────────────────────────────────┐
│         SIMPUS-Mini    [☰]      │  Header dengan navbar
│                                 │
├─────────────────────────────────┤
│                                 │
│          MAIN CONTENT           │
│                                 │
├─────────────────────────────────┤
│   © 2026 SIMPUS-Mini            │  Footer
└─────────────────────────────────┘
```

## Halaman: Beranda (index.php)

```
┌──────────────────────────────────┐
│      SIMPUS-Mini      [☰]        │
├──────────────────────────────────┤
│  Selamat Datang di SIMPUS-Mini   │
│                                  │
│  Sistem Perpustakaan Mini adalah │
│  aplikasi untuk mengelola data   │
│  buku dan anggota perpustakaan.  │
│                                  │
│  Navigasi menu di atas untuk     │
│  mulai menggunakan aplikasi.     │
└──────────────────────────────────┘
```

## Halaman: Daftar Buku (buku/list.php)

```
┌──────────────────────────────────┐
│      SIMPUS-Mini      [☰]        │
├──────────────────────────────────┤
│  Daftar Buku                     │
│                                  │
│  ✓ Buku berhasil ditambahkan.   │  (Flash message)
│                                  │
│  [Cari Judul Buku...]            │
│                                  │
│  ┌────────────────────────────┐  │
│  │ Judul | Pengarang | Tahun │  │
│  ├────────────────────────────┤  │
│  │ Buku1 │ Penulis1  │ 2020  │  │
│  │ Buku2 │ Penulis2  │ 2021  │  │
│  └────────────────────────────┘  │
└──────────────────────────────────┘
```

## Halaman: Tambah Buku (buku/tambah.php)

```
┌──────────────────────────────────┐
│      SIMPUS-Mini      [☰]        │
├──────────────────────────────────┤
│  Tambah Buku                     │
│                                  │
│  ✗ Judul wajib diisi.           │  (Error message)
│                                  │
│  [Form]                          │
│  Judul:      [_____________]     │
│  Pengarang:  [_____________]     │
│  Tahun:      [_____________]     │
│  ISBN:       [_____________]     │
│  Stok:       [_____________]     │
│  Kategori:   [_____________]     │
│                                  │
│              [Simpan] [Batal]    │
└──────────────────────────────────┘
```

Halaman untuk Anggota (anggota/list.php, anggota/tambah.php) memiliki struktur serupa.
