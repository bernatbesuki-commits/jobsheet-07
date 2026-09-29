# SIMPUS-Mini Jobsheet 7: PHP Dasar & Form Handling

Aplikasi perpustakaan mini yang menggunakan PHP untuk pemrosesan server-side, session management, dan form handling.

## Struktur Folder

```
jobsheet-07/
├── index.php
├── includes/
│   ├── header.php
│   └── footer.php
├── assets/
│   ├── css/style.css
│   └── js/app.js
├── buku/
│   ├── list.php
│   ├── tambah.php
│   └── proses_tambah.php
├── anggota/
│   ├── list.php
│   ├── tambah.php
│   └── proses_tambah.php
├── docs/wireframe.md
└── README.md
```

## Cara Menjalankan

1. Buka terminal di folder `jobsheet-07`
2. Jalankan server PHP:
   ```bash
   php -S localhost:8000
   ```
3. Buka browser: `http://localhost:8000/index.php`

## Fitur Utama

- Form input dengan validasi server-side
- Session management untuk penyimpanan data sementara
- Flash message (pesan sukses/gagal)
- Dynamic table rendering dari session data
- Include system untuk menghindari duplikasi kode

## Catatan Penting

- Data disimpan di `$_SESSION` dan bersifat sementara (hilang saat browser ditutup)
- Validasi server-side tidak bisa dilewati oleh pengguna
- Ini adalah jembatan menuju database (Jobsheet 8)
