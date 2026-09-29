<?php
$page_title = "Tambah Buku";
include __DIR__ . '/../includes/header.php';
?>
<section>
    <h2>Tambah Buku Baru</h2>

    <form id="form-tambah" method="post" action="proses_tambah.php">
        <div class="form-group">
            <label for="judul">Judul Buku *</label>
            <input type="text" id="judul" name="judul" required>
        </div>

        <div class="form-group">
            <label for="pengarang">Pengarang *</label>
            <input type="text" id="pengarang" name="pengarang" required>
        </div>

        <div class="form-group">
            <label for="tahun">Tahun Terbit *</label>
            <input type="number" id="tahun" name="tahun" min="1900" max="2026" required>
        </div>

        <div class="form-group">
            <label for="isbn">ISBN</label>
            <input type="text" id="isbn" name="isbn" placeholder="Contoh: 978-3-16-148410-0">
        </div>

        <div class="form-group">
            <label for="stok">Stok *</label>
            <input type="number" id="stok" name="stok" min="0" required>
        </div>

        <div class="form-group">
            <label for="kategori">Kategori *</label>
            <select id="kategori" name="kategori" required>
                <option value="">-- Pilih Kategori --</option>
                <option value="Fiksi">Fiksi</option>
                <option value="Non-Fiksi">Non-Fiksi</option>
                <option value="Referensi">Referensi</option>
                <option value="Teknologi">Teknologi</option>
                <option value="Sastra">Sastra</option>
                <option value="Sejarah">Sejarah</option>
                <option value="Biografi">Biografi</option>
                <option value="Lainnya">Lainnya</option>
            </select>
        </div>

        <div class="form-actions">
            <input type="submit" value="Simpan">
            <button type="button" onclick="window.location.href='list.php'">Batal</button>
        </div>
    </form>
</section>
<?php include __DIR__ . '/../includes/footer.php'; ?>
