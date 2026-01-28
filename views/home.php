<div class="page-header">
    <div>
        <h1><i class="bi bi-speedometer2 me-2 text-primary"></i>Dashboard RS-VIP</h1>
        <p class="text-muted mb-0">Selamat datang di sistem manajemen rumah sakit</p>
    </div>
    <div class="text-end">
        <span class="badge bg-primary">
            <i class="bi bi-calendar-check me-1"></i>
            <?= date('d M Y') ?>
        </span>
    </div>
</div>

<!-- Quick Stats Cards -->
<div class="row g-4 mb-4">
    <div class="col-md-3">
        <div class="stat-card blue">
            <div>
                <h6><i class="bi bi-people me-1"></i>Total Pasien</h6>
                <h2 class="display-5"><?= number_format(128) ?></h2>
                <small class="text-muted">+12 dari bulan lalu</small>
            </div>
            <i class="bi bi-people-fill"></i>
        </div>
    </div>
    <div class="col-md-3">
        <div class="stat-card green">
            <div>
                <h6><i class="bi bi-hospital me-1"></i>Pasien Rawat Inap</h6>
                <h2 class="display-5"><?= number_format(42) ?></h2>
                <small class="text-muted">Aktif hari ini</small>
            </div>
            <i class="bi bi-building"></i>
        </div>
    </div>
    <div class="col-md-3">
        <div class="stat-card red">
            <div>
                <h6><i class="bi bi-heart-pulse me-1"></i>Dokter Aktif</h6>
                <h2 class="display-5"><?= number_format(16) ?></h2>
                <small class="text-muted">Siap melayani</small>
            </div>
            <i class="bi bi-person-heart"></i>
        </div>
    </div>
    <div class="col-md-3">
        <div class="stat-card orange">
            <div>
                <h6><i class="bi bi-door-open me-1"></i>Kamar Tersedia</h6>
                <h2 class="display-5"><?= number_format(9) ?></h2>
                <small class="text-muted">Dari total 50 kamar</small>
            </div>
            <i class="bi bi-door"></i>
        </div>
    </div>
</div>

<!-- Recent Activity -->
<div class="row">
    <div class="col-md-8">
        <div class="card-box">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h5 class="mb-0"><i class="bi bi-clock-history me-2"></i>Aktivitas Terbaru</h5>
                <span class="badge bg-light text-dark">5 aktivitas</span>
            </div>
            <div class="activity">
                <div class="d-flex mb-3 pb-3 border-bottom">
                    <div class="flex-shrink-0 me-3">
                        <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                            <i class="bi bi-person-plus"></i>
                        </div>
                    </div>
                    <div class="flex-grow-1">
                        <div class="fw-semibold">Pasien baru terdaftar</div>
                        <small class="text-muted">Budi Santoso (Laki-laki, 35 th)</small>
                        <div class="mt-1">
                            <span class="badge bg-light text-dark border">
                                <i class="bi bi-clock"></i> 2 jam yang lalu
                            </span>
                        </div>
                    </div>
                </div>

                <div class="d-flex mb-3 pb-3 border-bottom">
                    <div class="flex-shrink-0 me-3">
                        <div class="bg-warning text-dark rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                            <i class="bi bi-pencil-square"></i>
                        </div>
                    </div>
                    <div class="flex-grow-1">
                        <div class="fw-semibold">Update data pasien</div>
                        <small class="text-muted">Data Siti Aminah berhasil diperbarui</small>
                        <div class="mt-1">
                            <span class="badge bg-light text-dark border">
                                <i class="bi bi-clock"></i> 4 jam yang lalu
                            </span>
                        </div>
                    </div>
                </div>

                <div class="d-flex mb-3 pb-3 border-bottom">
                    <div class="flex-shrink-0 me-3">
                        <div class="bg-success text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                            <i class="bi bi-check-circle"></i>
                        </div>
                    </div>
                    <div class="flex-grow-1">
                        <div class="fw-semibold">Pemeriksaan selesai</div>
                        <small class="text-muted">Pasien Ahmad Rizki selesai diperiksa</small>
                        <div class="mt-1">
                            <span class="badge bg-light text-dark border">
                                <i class="bi bi-clock"></i> 6 jam yang lalu
                            </span>
                        </div>
                    </div>
                </div>

                <div class="d-flex mb-3 pb-3 border-bottom">
                    <div class="flex-shrink-0 me-3">
                        <div class="bg-info text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                            <i class="bi bi-calendar-check"></i>
                        </div>
                    </div>
                    <div class="flex-grow-1">
                        <div class="fw-semibold">Jadwal pemeriksaan dibuat</div>
                        <small class="text-muted">5 pasien dijadwalkan minggu depan</small>
                        <div class="mt-1">
                            <span class="badge bg-light text-dark border">
                                <i class="bi bi-clock"></i> Kemarin
                            </span>
                        </div>
                    </div>
                </div>

                <div class="d-flex">
                    <div class="flex-shrink-0 me-3">
                        <div class="bg-danger text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                            <i class="bi bi-trash"></i>
                        </div>
                    </div>
                    <div class="flex-grow-1">
                        <div class="fw-semibold">Data pasien dihapus</div>
                        <small class="text-muted">Data pasien tidak aktif telah dihapus</small>
                        <div class="mt-1">
                            <span class="badge bg-light text-dark border">
                                <i class="bi bi-clock"></i> 2 hari lalu
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <!-- Quick Actions -->
        <div class="card-box mb-4">
            <h5 class="mb-3"><i class="bi bi-lightning-charge me-2"></i>Aksi Cepat</h5>
            <div class="d-grid gap-2">
                <a href="index.php?page=pasien&action=create" class="btn btn-primary btn-lg">
                    <i class="bi bi-person-plus me-2"></i>Tambah Pasien
                </a>
                <a href="index.php?page=pasien" class="btn btn-outline-primary">
                    <i class="bi bi-list-ul me-2"></i>Lihat Daftar Pasien
                </a>
                <a href="#" class="btn btn-outline-success">
                    <i class="bi bi-calendar-check me-2"></i>Jadwal Pemeriksaan
                </a>
                <a href="#" class="btn btn-outline-info">
                    <i class="bi bi-file-earmark-text me-2"></i>Laporan Bulanan
                </a>
            </div>
        </div>

        <!-- System Status -->
        <div class="card-box">
            <h5 class="mb-3"><i class="bi bi-server me-2"></i>Status Sistem</h5>
            <div class="mb-3">
                <div class="d-flex justify-content-between mb-2">
                    <span>Database</span>
                    <span class="badge bg-success">Online</span>
                </div>
                <div class="progress" style="height: 8px;">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 100%"></div>
                </div>
            </div>
            <div class="mb-3">
                <div class="d-flex justify-content-between mb-2">
                    <span>Server</span>
                    <span class="badge bg-success">Stabil</span>
                </div>
                <div class="progress" style="height: 8px;">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 95%"></div>
                </div>
            </div>
            <div class="mb-3">
                <div class="d-flex justify-content-between mb-2">
                    <span>Storage</span>
                    <span class="badge bg-warning">75%</span>
                </div>
                <div class="progress" style="height: 8px;">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 75%"></div>
                </div>
            </div>
            <div class="text-center mt-3 pt-3 border-top">
                <small class="text-muted">
                    <i class="bi bi-shield-check me-1"></i>Sistem terlindungi & terenkripsi
                </small>
            </div>
        </div>
    </div>
</div>