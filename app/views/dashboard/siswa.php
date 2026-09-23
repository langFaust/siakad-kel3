<!DOCTYPE html>
<html lang="id" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIAKAD - Dashboard Siswa</title>
    
    <!-- Bootstrap 5.3 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Font 'Inter' -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Memanggil file CSS eksternal -->
    <link rel="stylesheet" href="/siakad/public/assets/css/dashboard.css">
</head>
<body>

<div class="d-flex">
    
    <!-- SIDEBAR SISWA -->
    <div class="sidebar flex-shrink-0 p-4" style="width: 260px;">
        <a href="#" class="d-flex align-items-center mb-4 text-decoration-none">
            <i class="fas fa-layer-group fa-2x me-3" style="color: var(--accent-violet)"></i>
            <span class="fs-4 brand-text">SIAKAD</span>
        </a>
        
        <div class="text-uppercase text-muted fw-bold mb-2 mt-4" style="font-size: 0.75rem; letter-spacing: 1px;">Menu Utama</div>
        <ul class="nav flex-column mb-auto gap-1">
            <li class="nav-item">
                <a href="#" class="nav-link active"><i class="fas fa-border-all me-2"></i> Beranda</a>
            </li>
            <li><a href="#" class="nav-link"><i class="fas fa-calendar-alt me-2"></i> Jadwal Pelajaran</a></li>
            <li><a href="#" class="nav-link"><i class="fas fa-tasks me-2"></i> Tugas & Ujian</a></li>
            
            <div class="text-uppercase text-muted fw-bold mb-2 mt-4" style="font-size: 0.75rem; letter-spacing: 1px;">Akademik</div>
            <li><a href="#" class="nav-link"><i class="fas fa-star me-2"></i> KHS & Transkrip</a></li>
            <li><a href="#" class="nav-link"><i class="fas fa-user-check me-2"></i> Rekap Absensi</a></li>
            <li><a href="#" class="nav-link"><i class="fas fa-user-cog me-2"></i> Profil Saya</a></li>
        </ul>
    </div>

    <!-- MAIN CONTENT -->
    <div class="main-content">
        
        <!-- NAVBAR -->
        <nav class="navbar-top d-flex justify-content-between align-items-center sticky-top">
            <button class="btn btn-dark d-md-none border-secondary" type="button">
                <i class="fas fa-bars"></i>
            </button>
            
            <div class="d-none d-md-block text-muted text-sm fw-medium">
                <i class="fas fa-clock me-1"></i> Rabu, 23 September 2026
            </div>

            <div class="ms-auto d-flex align-items-center gap-4">
                <a href="#" class="text-muted position-relative">
                    <i class="fas fa-bell fs-5"></i>
                    <span class="position-absolute top-0 start-100 translate-middle p-1 bg-danger border border-dark rounded-circle"></span>
                </a>
                <div class="d-flex align-items-center border-start border-secondary ps-4">
                    <div class="text-end me-3 d-none d-sm-block">
                        <div class="fw-semibold text-sm lh-1">Budi Santoso</div>
                        <small class="text-muted" style="font-size: 0.75rem;">NIS: 1029384 • XII IPA 1</small>
                    </div>
                    <img src="https://ui-avatars.com/api/?name=Budi+Santoso&background=8b5cf6&color=fff" alt="Budi Santoso" class="rounded-circle" width="38">
                </div>
            </div>
        </nav>

        <!-- KONTEN DASHBOARD SISWA -->
        <div class="container-fluid p-4 p-md-5">
            
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center mb-4 gap-3">
                <div>
                    <h3 class="mb-1 fw-bold text-white">Selamat Pagi, Budi! 👋</h3>
                    <p class="text-muted mb-0">Ini adalah ringkasan akademik dan jadwalmu hari ini.</p>
                </div>
                <div class="bg-dark px-3 py-2 rounded-3 border border-secondary d-flex align-items-center gap-2">
                    <i class="fas fa-calendar text-muted"></i>
                    <span class="text-sm fw-medium">T.A Ganjil 2026/2027</span>
                </div>
            </div>

            <!-- Welcome Alert (Siswa Edition) -->
            <div class="alert alert-custom rounded-3 d-flex align-items-center mb-4 p-3 shadow-sm" style="border-left-color: var(--accent-amber); background-color: rgba(245, 158, 11, 0.1); border-color: rgba(245, 158, 11, 0.2);">
                <div class="bg-dark rounded-circle p-2 me-3 border border-secondary d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                    <i class="fas fa-exclamation-triangle text-warning"></i>
                </div>
                <div>
                    <h6 class="mb-1 fw-bold text-white">Ujian Tengah Semester (UTS) Mendekat!</h6>
                    <span class="text-sm opacity-75 text-light">UTS akan dimulai dalam 12 hari. Pastikan semua tugas sudah terkumpul.</span>
                </div>
                <button class="btn-close btn-close-white ms-auto" data-bs-dismiss="alert"></button>
            </div>

            <!-- STATISTIK CARDS (Siswa Edition) -->
            <div class="row g-4 mb-4">
                <div class="col-sm-6 col-xl-3">
                    <div class="card stat-card p-3 h-100">
                        <div class="d-flex justify-content-between align-items-start">
                            <div>
                                <p class="text-muted text-sm fw-medium mb-1">Kehadiran</p>
                                <h2 class="fw-bold text-white mb-0">98%</h2>
                            </div>
                            <div class="stat-icon" style="background: rgba(16, 185, 129, 0.15); color: var(--accent-emerald);">
                                <i class="fas fa-user-check"></i>
                            </div>
                        </div>
                        <div class="mt-3 text-sm">
                            <span class="text-success">Baik sekali</span> <span class="text-muted">semester ini</span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="card stat-card p-3 h-100">
                        <div class="d-flex justify-content-between align-items-start">
                            <div>
                                <p class="text-muted text-sm fw-medium mb-1">Rata-rata Nilai</p>
                                <h2 class="fw-bold text-white mb-0">88.5</h2>
                            </div>
                            <div class="stat-icon" style="background: rgba(139, 92, 246, 0.15); color: var(--accent-violet);">
                                <i class="fas fa-chart-line"></i>
                            </div>
                        </div>
                        <div class="mt-3 text-sm">
                            <span class="text-success"><i class="fas fa-arrow-up"></i> +2.4</span> <span class="text-muted">dari UTS lalu</span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="card stat-card p-3 h-100">
                        <div class="d-flex justify-content-between align-items-start">
                            <div>
                                <p class="text-muted text-sm fw-medium mb-1">Jadwal Hari Ini</p>
                                <h2 class="fw-bold text-white mb-0">3</h2>
                            </div>
                            <div class="stat-icon" style="background: rgba(245, 158, 11, 0.15); color: var(--accent-amber);">
                                <i class="fas fa-book-open"></i>
                            </div>
                        </div>
                        <div class="mt-3 text-sm">
                            <span class="text-muted">Mata pelajaran tersisa</span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="card stat-card p-3 h-100">
                        <div class="d-flex justify-content-between align-items-start">
                            <div>
                                <p class="text-muted text-sm fw-medium mb-1">Tugas Pending</p>
                                <h2 class="fw-bold text-white mb-0">1</h2>
                            </div>
                            <div class="stat-icon" style="background: rgba(244, 63, 94, 0.15); color: var(--accent-rose);">
                                <i class="fas fa-clipboard-list"></i>
                            </div>
                        </div>
                        <div class="mt-3 text-sm">
                            <span class="text-danger"><i class="fas fa-circle" style="font-size:8px;"></i></span> <span class="text-muted">Batas waktu besok</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row g-4">
                <!-- TABEL JADWAL (Siswa Edition) -->
                <div class="col-lg-8">
                    <div class="card h-100">
                        <div class="card-header bg-transparent d-flex justify-content-between align-items-center py-3">
                            <h6 class="mb-0 fw-bold text-white"><i class="fas fa-calendar-day me-2 text-muted"></i> Jadwal Pelajaran (Rabu)</h6>
                            <a href="#" class="btn btn-sm btn-outline-secondary rounded-pill px-3">Jadwal Lengkap</a>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-hover align-middle mb-0">
                                    <thead>
                                        <tr>
                                            <th class="ps-4">Waktu</th>
                                            <th>Mata Pelajaran</th>
                                            <th>Guru Pengajar</th>
                                            <th>Ruangan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="ps-4 text-muted text-sm fw-medium">07:00 - 08:30</td>
                                            <td class="fw-semibold text-white">Matematika Lanjut</td>
                                            <td>
                                                <div class="d-flex align-items-center gap-2">
                                                    <img src="https://ui-avatars.com/api/?name=Budi+S&background=random" class="rounded-circle" width="24">
                                                    <span class="text-sm text-light">Budi Santoso, S.Pd</span>
                                                </div>
                                            </td>
                                            <td><span class="badge bg-dark border border-secondary text-light"><i class="fas fa-door-open me-1"></i> Lab IPA 1</span></td>
                                        </tr>
                                        <tr>
                                            <td class="ps-4 text-muted text-sm fw-medium">08:30 - 10:00</td>
                                            <td class="fw-semibold text-white">Fisika Dasar</td>
                                            <td>
                                                <div class="d-flex align-items-center gap-2">
                                                    <img src="https://ui-avatars.com/api/?name=Agus+S&background=random" class="rounded-circle" width="24">
                                                    <span class="text-sm text-light">Agus Setiawan, S.Si</span>
                                                </div>
                                            </td>
                                            <td><span class="badge bg-dark border border-secondary text-light"><i class="fas fa-door-open me-1"></i> Ruang A2</span></td>
                                        </tr>
                                        <tr>
                                            <td class="ps-4 text-muted text-sm fw-medium">10:30 - 12:00</td>
                                            <td class="fw-semibold text-white">Bahasa Inggris Wajib</td>
                                            <td>
                                                <div class="d-flex align-items-center gap-2">
                                                    <img src="https://ui-avatars.com/api/?name=Siti+A&background=random" class="rounded-circle" width="24">
                                                    <span class="text-sm text-light">Siti Aminah, M.Pd</span>
                                                </div>
                                            </td>
                                            <td><span class="badge bg-dark border border-secondary text-light"><i class="fas fa-headphones me-1"></i> Lab Bahasa</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- PENGUMUMAN & NILAI BARU (Siswa Edition) -->
                <div class="col-lg-4">
                    <div class="card h-100">
                        <div class="card-header bg-transparent py-3">
                            <h6 class="mb-0 fw-bold text-white">Notifikasi & Nilai Baru</h6>
                        </div>
                        <div class="card-body">
                            <div class="position-relative ms-3 border-start border-secondary pb-1">
                                <!-- Item 1: Grade -->
                                <div class="position-relative mb-4 ps-4">
                                    <span class="position-absolute top-0 start-0 translate-middle bg-dark border border-2 border-emerald rounded-circle" style="width: 14px; height: 14px; border-color: var(--accent-emerald) !important;"></span>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="text-sm fw-semibold text-white">Nilai Tugas Fisika Keluar</div>
                                        <span class="badge bg-success-subtle text-success border border-success-subtle px-2">92/100</span>
                                    </div>
                                    <div class="text-muted mt-1" style="font-size: 0.8rem;">Bab: Dinamika Partikel</div>
                                </div>
                                
                                <!-- Item 2: Assignment Alert -->
                                <div class="position-relative mb-4 ps-4">
                                    <span class="position-absolute top-0 start-0 translate-middle bg-dark border border-2 border-rose rounded-circle" style="width: 14px; height: 14px; border-color: var(--accent-rose) !important;"></span>
                                    <div class="text-sm fw-semibold text-white">Tugas Baru: Sejarah</div>
                                    <div class="text-muted mt-1" style="font-size: 0.8rem;">Makalah Kerajaan Majapahit. Harap kumpulkan via sistem.</div>
                                    <div class="text-rose mt-1" style="font-size: 0.75rem; color: var(--accent-rose);"><i class="far fa-clock"></i> Tenggat: Besok, 23:59</div>
                                </div>
                                
                                <!-- Item 3: Info -->
                                <div class="position-relative ps-4">
                                    <span class="position-absolute top-0 start-0 translate-middle bg-dark border border-2 border-violet rounded-circle" style="width: 14px; height: 14px; border-color: var(--accent-violet) !important;"></span>
                                    <div class="text-sm fw-semibold text-white">Pengumuman Sekolah</div>
                                    <div class="text-muted mt-1" style="font-size: 0.8rem;">Jumat ini ekstrakurikuler ditiadakan karena rapat guru.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>