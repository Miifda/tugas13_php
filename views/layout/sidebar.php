<aside class="sidebar">
    <div class="sidebar-brand">
        <h3>🏥 RS-VIP</h3>
        <small>Admin Panel</small>
    </div>

    <ul class="sidebar-menu">
        <li>
            <a href="index.php" class="<?= ($_GET['page'] ?? 'home') == 'home' ? 'active' : '' ?>">
                <i class="bi bi-speedometer2"></i> Dashboard
            </a>
        </li>
        <li>
            <a href="index.php?page=pasien" class="<?= ($_GET['page'] ?? '') == 'pasien' ? 'active' : '' ?>">
                <i class="bi bi-people"></i> Data Pasien
            </a>
        </li>
        <li>
            <a href="#">
                <i class="bi bi-calendar-check"></i> Jadwal Pemeriksaan
            </a>
        </li>
        <li>
            <a href="#">
                <i class="bi bi-file-earmark-text"></i> Laporan Medis
            </a>
        </li>
        <li>
            <a href="#">
                <i class="bi bi-hospital"></i> Manajemen Kamar
            </a>
        </li>
        <li>
            <a href="#">
                <i class="bi bi-person-heart"></i> Data Dokter
            </a>
        </li>
        <li>
            <a href="#">
                <i class="bi bi-gear"></i> Pengaturan Sistem
            </a>
        </li>
    </ul>

    <div class="sidebar-footer mt-auto p-4 border-top border-secondary">
        <div class="text-center">
            <div class="mb-2">
                <span class="badge bg-success">
                    <i class="bi bi-circle-fill me-1"></i>Online
                </span>
            </div>
            <small class="d-block text-muted">Version 2.0.0</small>
            <small class="d-block text-muted">© 2026 RS-VIP</small>
        </div>
    </div>
</aside>

<main>