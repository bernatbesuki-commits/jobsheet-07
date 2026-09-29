<?php
$page_title = "Tambah Anggota";
include __DIR__ . '/../includes/header.php';
?>
<section>
    <h2>Tambah Anggota Baru</h2>

    <form id="form-tambah" method="post" action="proses_tambah.php">
        <div class="form-group">
            <label for="nama">Nama Lengkap *</label>
            <input type="text" id="nama" name="nama" required>
        </div>

        <div class="form-group">
            <label for="email">Email *</label>
            <input type="text" id="email" name="email" placeholder="contoh@email.com" required>
        </div>

        <div class="form-group">
            <label for="no_hp">Nomor HP *</label>
            <input type="text" id="no_hp" name="no_hp" placeholder="08xxxxxxxxxx" required>
        </div>

        <div class="form-group">
            <label for="alamat">Alamat *</label>
            <textarea id="alamat" name="alamat" rows="4" required></textarea>
        </div>

        <div class="form-actions">
            <input type="submit" value="Simpan">
            <button type="button" onclick="window.location.href='list.php'">Batal</button>
        </div>
    </form>
</section>
<?php include __DIR__ . '/../includes/footer.php'; ?>
