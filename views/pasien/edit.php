<h3 class="fw-bold mb-4">
    <i class="bi bi-pencil-square text-warning me-2"></i>
    Edit Data Pasien
</h3>

<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card glass shadow">
            <div class="card-header bg-warning text-dark py-3">
                <h5 class="mb-0"><i class="bi bi-pencil me-2"></i>Update Informasi Pasien</h5>
            </div>
            <div class="card-body">
                <form method="post" id="editForm">
                    <div class="alert alert-info">
                        <i class="bi bi-info-circle me-2"></i>
                        <strong>ID Pasien:</strong> #<?= $data['id'] ?> | 
                        <strong>Tanggal Daftar:</strong> <?= date('d M Y', strtotime($data['created_at'])) ?>
                    </div>

                    <div class="row g-3">
                        <div class="col-md-12">
                            <label class="form-label">
                                <i class="bi bi-person me-2 text-primary"></i>Nama Lengkap
                            </label>
                            <input type="text" class="form-control form-control-lg" name="nama" 
                                   value="<?= htmlspecialchars($data['nama']) ?>" required>
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
                                       value="<?= $data['umur'] ?>" min="1" max="150" required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">
                                <i class="bi bi-gender-ambiguous me-2 text-primary"></i>Jenis Kelamin
                            </label>
                            <select class="form-select form-select-lg" name="jenis_kelamin" required>
                                <option value="Laki-laki" <?= $data['jenis_kelamin']=='Laki-laki'?'selected':'' ?>>
                                    Laki-laki
                                </option>
                                <option value="Perempuan" <?= $data['jenis_kelamin']=='Perempuan'?'selected':'' ?>>
                                    Perempuan
                                </option>
                            </select>
                        </div>

                        <div class="col-md-12">
                            <label class="form-label">
                                <i class="bi bi-geo-alt me-2 text-primary"></i>Alamat
                            </label>
                            <textarea class="form-control" name="alamat" rows="4"><?= htmlspecialchars($data['alamat']) ?></textarea>
                        </div>
                    </div>

                    <div class="d-flex justify-content-between align-items-center mt-4 pt-3 border-top">
                        <a href="index.php?page=pasien" class="btn btn-secondary">
                            <i class="bi bi-arrow-left me-2"></i>Batal
                        </a>
                        <button type="submit" class="btn btn-primary btn-lg" id="updateBtn">
                            <i class="bi bi-check-circle me-2"></i>Update Data
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
document.getElementById('editForm').addEventListener('submit', function() {
    const updateBtn = document.getElementById('updateBtn');
    updateBtn.innerHTML = '<i class="bi bi-hourglass-split me-2"></i>Memperbarui...';
    updateBtn.disabled = true;
});
</script>