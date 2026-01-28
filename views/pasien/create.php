<h3 class="fw-bold mb-4">
    <i class="bi bi-person-plus-fill text-success me-2"></i>
    Tambah Data Pasien Baru
</h3>

<?php if(!empty($errors)): ?>
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <div class="d-flex align-items-center">
        <i class="bi bi-exclamation-triangle-fill fs-4 me-3"></i>
        <div>
            <strong>Oops! Ada kesalahan:</strong>
            <ul class="mb-0 mt-2" style="padding-left: 20px;">
                <?php foreach($errors as $error): ?>
                <li><?= htmlspecialchars($error) ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php endif; ?>

<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card glass shadow">
            <div class="card-header bg-primary text-white py-3">
                <h5 class="mb-0"><i class="bi bi-file-earmark-plus me-2"></i>Formulir Pendaftaran</h5>
            </div>
            <div class="card-body">
                <form method="post" id="patientForm">
                    <input type="hidden" name="csrf_token" value="<?= $_SESSION['csrf_token'] ?? '' ?>">
                    
                    <div class="row g-3">
                        <div class="col-md-12">
                            <label class="form-label">
                                <i class="bi bi-person me-2 text-primary"></i>Nama Lengkap Pasien
                            </label>
                            <input type="text" class="form-control form-control-lg" name="nama" 
                                   placeholder="Masukkan nama lengkap pasien" 
                                   value="<?= $_POST['nama'] ?? '' ?>" required>
                            <small class="text-muted">Contoh: Budi Santoso</small>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">
                                <i class="bi bi-calendar3 me-2 text-primary"></i>Umur (Tahun)
                            </label>
                            <div class="input-group">
                                <span class="input-group-text">
                                    <i class="bi bi-123"></i>
                                </span>
                                <input type="number" class="form-control" name="umur" 
                                       placeholder="0" min="1" max="150"
                                       value="<?= $_POST['umur'] ?? '' ?>" required>
                            </div>
                            <small class="text-muted">Masukkan umur dalam tahun</small>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">
                                <i class="bi bi-gender-ambiguous me-2 text-primary"></i>Jenis Kelamin
                            </label>
                            <select class="form-select form-select-lg" name="jenis_kelamin" required>
                                <option value="">-- Pilih Jenis Kelamin --</option>
                                <option value="Laki-laki" <?= ($_POST['jenis_kelamin'] ?? '') == 'Laki-laki' ? 'selected' : '' ?>>
                                    <i class="bi bi-gender-male"></i> Laki-laki
                                </option>
                                <option value="Perempuan" <?= ($_POST['jenis_kelamin'] ?? '') == 'Perempuan' ? 'selected' : '' ?>>
                                    <i class="bi bi-gender-female"></i> Perempuan
                                </option>
                            </select>
                        </div>

                        <div class="col-md-12">
                            <label class="form-label">
                                <i class="bi bi-geo-alt me-2 text-primary"></i>Alamat Lengkap
                            </label>
                            <textarea class="form-control" name="alamat" rows="4" 
                                      placeholder="Masukkan alamat lengkap pasien"><?= $_POST['alamat'] ?? '' ?></textarea>
                            <small class="text-muted">Contoh: Jl. Sudirman No. 123, Jakarta Pusat</small>
                        </div>
                    </div>

                    <div class="d-flex justify-content-between align-items-center mt-4 pt-3 border-top">
                        <a href="index.php?page=pasien" class="btn btn-secondary">
                            <i class="bi bi-arrow-left me-2"></i>Kembali ke Daftar
                        </a>
                        <button type="submit" class="btn btn-success btn-lg" id="submitBtn">
                            <i class="bi bi-save me-2"></i>Simpan Data Pasien
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <div class="alert alert-info mt-4">
            <h6 class="fw-bold mb-2"><i class="bi bi-info-circle me-2"></i>Petunjuk Pengisian:</h6>
            <ul class="mb-0">
                <li>Semua field bertanda <span class="text-danger">*</span> wajib diisi</li>
                <li>Pastikan data yang dimasukkan sudah benar dan valid</li>
                <li>Data pasien akan tersimpan secara otomatis setelah dikirim</li>
            </ul>
        </div>
    </div>
</div>

<script>
document.getElementById('patientForm').addEventListener('submit', function() {
    const submitBtn = document.getElementById('submitBtn');
    submitBtn.innerHTML = '<i class="bi bi-hourglass-split me-2"></i>Menyimpan...';
    submitBtn.disabled = true;
});

// Auto-focus on first input
document.querySelector('input[name="nama"]').focus();
</script>