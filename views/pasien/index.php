<div class="page-header">
    <div>
        <h1><i class="bi bi-people me-2 text-primary"></i>Data Pasien</h1>
        <p class="text-muted mb-0">Kelola data pasien rumah sakit secara efisien</p>
    </div>
    <a href="index.php?page=pasien&action=create" class="btn btn-primary">
        <i class="bi bi-plus-circle me-2"></i> Tambah Pasien Baru
    </a>
</div>

<div class="card-box">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h5 class="mb-0"><i class="bi bi-list-ul me-2"></i>Daftar Pasien</h5>
            <small class="text-muted">Total: <?= $totalPasien ?> pasien</small>
        </div>
        <div class="input-group" style="max-width: 300px;">
            <input type="text" class="form-control" placeholder="Cari pasien..." id="searchPatient">
            <button class="btn btn-outline-primary" type="button">
                <i class="bi bi-search"></i>
            </button>
        </div>
    </div>

    <div class="table-responsive">
        <table class="table table-hover align-middle">
            <thead class="table-primary">
                <tr>
                    <th style="width: 5%;"># ID</th>
                    <th style="width: 30%;">Nama Lengkap</th>
                    <th style="width: 10%;">Umur</th>
                    <th style="width: 10%;">Jenis Kelamin</th>
                    <th style="width: 15%;">Status</th>
                    <th style="width: 15%;">Tanggal Daftar</th>
                    <th style="width: 15%;" class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php if(empty($pasien)): ?>
                <tr>
                    <td colspan="7" class="text-center py-5">
                        <div class="text-muted">
                            <i class="bi bi-inbox fs-1 mb-3 d-block"></i>
                            <p class="mb-0">Belum ada data pasien</p>
                            <a href="index.php?page=pasien&action=create" class="btn btn-primary mt-3">
                                <i class="bi bi-plus-circle me-2"></i>Tambah Pasien Pertama
                            </a>
                        </div>
                    </td>
                </tr>
                <?php else: ?>
                <?php foreach($pasien as $p): ?>
                <tr>
                    <td class="fw-bold text-muted">#<?= $p['id'] ?></td>
                    <td class="fw-semibold"><?= htmlspecialchars($p['nama']) ?></td>
                    <td>
                        <span class="badge bg-light text-dark border">
                            <i class="bi bi-calendar3"></i> <?= $p['umur'] ?> th
                        </span>
                    </td>
                    <td>
                        <?php if($p['jenis_kelamin'] == 'Laki-laki'): ?>
                            <span class="badge bg-male">
                                <i class="bi bi-gender-male"></i> Laki-laki
                            </span>
                        <?php else: ?>
                            <span class="badge bg-female">
                                <i class="bi bi-gender-female"></i> Perempuan
                            </span>
                        <?php endif; ?>
                    </td>
                    <td>
                        <span class="badge bg-active">
                            <i class="bi bi-check-circle-fill me-1"></i>Aktif
                        </span>
                    </td>
                    <td>
                        <span class="badge bg-light text-dark border">
                            <i class="bi bi-calendar-event"></i> <?= date('d M Y', strtotime($p['created_at'])) ?>
                        </span>
                    </td>
                    <td class="text-center">
                        <div class="d-flex justify-content-center gap-2">
                            <!-- Tombol Edit -->
                            <a href="index.php?page=pasien&action=edit&id=<?= $p['id'] ?>" 
                               class="btn btn-action btn-edit rounded-2" 
                               title="Edit Data" 
                               data-bs-toggle="tooltip" 
                               data-bs-placement="top">
                                <i class="bi bi-pencil-square fs-5"></i>
                            </a>
                            
                            <!-- Tombol Delete -->
                            <button class="btn btn-action btn-delete rounded-2 delete-btn" 
                                    data-id="<?= $p['id'] ?>" 
                                    data-name="<?= htmlspecialchars($p['nama']) ?>" 
                                    title="Hapus Data" 
                                    data-bs-toggle="tooltip" 
                                    data-bs-placement="top">
                                <i class="bi bi-trash fs-5"></i>
                            </button>
                        </div>
                    </td>
                </tr>
                <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

<!-- Delete Confirmation Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-danger text-white">
                <h5 class="modal-title">
                    <i class="bi bi-exclamation-triangle me-2"></i>Konfirmasi Penghapusan
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="text-center mb-4">
                    <div style="font-size: 4rem; margin-bottom: 20px;">
                        <i class="bi bi-person-x text-danger"></i>
                    </div>
                    <h4 class="fw-bold">Hapus Data Pasien?</h4>
                </div>
                <p class="text-muted">
                    Anda akan menghapus data pasien berikut:
                </p>
                <div class="alert alert-warning">
                    <strong id="delete-patient-name" class="d-block"></strong>
                </div>
                <p class="text-muted small">
                    <i class="bi bi-info-circle me-2"></i>
                    Tindakan ini tidak dapat dibatalkan. Pastikan Anda sudah mempertimbangkan dengan matang.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                    <i class="bi bi-x-circle me-2"></i>Batal
                </button>
                <a id="delete-confirm-btn" class="btn btn-danger">
                    <i class="bi bi-trash me-2"></i>Hapus Permanen
                </a>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const deleteButtons = document.querySelectorAll('.delete-btn');
    const deleteModal = new bootstrap.Modal(document.getElementById('deleteModal'));
    const deleteConfirmBtn = document.getElementById('delete-confirm-btn');
    const deletePatientName = document.getElementById('delete-patient-name');

    deleteButtons.forEach(button => {
        button.addEventListener('click', function() {
            const patientName = this.getAttribute('data-name');
            const patientId = this.getAttribute('data-id');
            
            deletePatientName.textContent = patientName;
            deleteConfirmBtn.href = `index.php?page=pasien&action=delete&id=${patientId}`;
            
            deleteModal.show();
        });
    });

    // Search functionality
    const searchInput = document.getElementById('searchPatient');
    if (searchInput) {
        searchInput.addEventListener('keyup', function() {
            const searchTerm = this.value.toLowerCase();
            const rows = document.querySelectorAll('tbody tr');
            
            rows.forEach(row => {
                const nameCell = row.querySelector('td:nth-child(2)');
                if (nameCell) {
                    const name = nameCell.textContent.toLowerCase();
                    row.style.display = name.includes(searchTerm) ? '' : 'none';
                }
            });
        });
    }
});
</script>