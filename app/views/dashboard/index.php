<!DOCTYPE html>
<!-- Mengaktifkan fitur Dark Mode bawaan Bootstrap 5.3 -->
<html lang="id" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIAKAD - Dark Mode Dashboard</title>
    
    <!-- Bootstrap 5.3 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Font 'Inter' -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Memanggil file CSS eksternal yang sudah dipisah -->
    <link rel="stylesheet" href="/siakad/public/assets/css/dashboard.css">
</head>
<body>

<div class="d-flex">
    
    <!-- SIDEBAR -->
    <div class="sidebar flex-shrink-0 p-4" style="width: 260px;">
        <a href="#" class="d-flex align-items-center mb-4 text-decoration-none">
            <i class="fas fa-layer-group fa-2x me-3" style="color: var(--accent-violet)"></i>
            <span class="fs-4 brand-text">SIAKAD</span>
        </a>
        <div class="text-uppercase text-muted fw-bold mb-2 mt-4" style="font-size: 0.75rem; letter-spacing: 1px;">Menu Utama</div>
        <ul class="nav flex-column mb-auto gap-1">
            <li class="nav-item">
                <a href="#" class="nav-link active"><i class="fas fa-border-all me-2"></i> Dashboard</a>
            </li>
            <li><a href="#" class="nav-link"><i class="fas fa-users me-2"></i> Data Siswa</a></li>
            <li><a href="#" class="nav-link"><i class="fas fa-chalkboard-teacher me-2"></i> Data Guru</a></li>
            <li><a href="#" class="nav-link"><i class="fas fa-door-open me-2"></i> Data Kelas</a></li>
            <li><a href="#" class="nav-link"><i class="fas fa-book-open me-2"></i> Mata Pelajaran</a></li>
            
            <div class="text-uppercase text-muted fw-bold mb-2 mt-4" style="font-size: 0.75rem; letter-spacing: 1px;">Akademik</div>
            <li><a href="#" class="nav-link"><i class="fas fa-calendar-alt me-2"></i> Jadwal Pelajaran</a></li>
            <li><a href="#" class="nav-link"><i class="fas fa-chart-line me-2"></i> Data Nilai</a></li>
            <li><a href="#" class="nav-link"><i class="fas fa-fingerprint me-2"></i> Absensi</a></li>
        </ul>
    </div>

    <!-- MAIN CONTENT -->
    <div class="main-content">
        
        <!-- NAVBAR -->
        <nav class="navbar-top d-flex justify-content-between align-items-center sticky-top">
            <button class="btn btn-dark d-md-none border-secondary" type="button">
                <i class="fas fa-bars"></i>
            </button>
            
            <!-- Pencarian -->
            <div class="d-none d-md-flex position-relative" style="width: 300px;">
                <i class="fas fa-search position-absolute top-50 translate-middle-y ms-3 text-muted"></i>
                <input type="text" class="form-control bg-dark border-secondary text-light ps-5 rounded-pill" placeholder="Cari siswa, guru, kelas...">
            </div>

            <div class="ms-auto d-flex align-items-center gap-4">
                <a href="#" class="text-muted position-relative">
                    <i class="fas fa-bell fs-5"></i>
                    <span class="position-absolute top-0 start-100 translate-middle p-1 bg-danger border border-dark rounded-circle"></span>
                </a>
                <div class="d-flex align-items-center border-start border-secondary ps-4">
                    <img src="https://ui-avatars.com/api/?name=Admin&background=8b5cf6&color=fff" alt="Admin" class="rounded-circle me-2" width="35">
                    <div>
                        <div class="fw-semibold text-sm lh-1">Administrator</div>
                        <small class="text-muted" style="font-size: 0.75rem;">admin@siakad.sch.id</small>
                    </div>
                </div>
            </div>
        </nav>

        <!-- KONTEN -->
        <div class="container-fluid p-4 p-md-5">
            
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center mb-4 gap-3">
                <div>
                    <h3 class="mb-1 fw-bold text-white">Overview Dashboard</h3>
                    <p class="text-muted mb-0">Pantau aktivitas dan statistik akademik hari ini.</p>
                </div>
                <div class="bg-dark px-3 py-2 rounded-3 border border-secondary d-flex align-items-center gap-2">
                    <i class="fas fa-calendar text-muted"></i>
                    <span class="text-sm fw-medium">T.A Ganjil 2026/2027</span>
                </div>
            </div>

            <!-- Welcome Alert -->
            <div class="alert alert-custom rounded-3 d-flex align-items-center mb-4 p-3 shadow-sm">
                <div class="bg-dark rounded-circle p-2 me-3 border border-secondary d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                    <i class="fas fa-bolt text-warning"></i>
                </div>
                <div>
                    <h6 class="mb-1 fw-bold">Sistem berjalan normal</h6>
                    <span class="text-sm opacity-75">Server merespon dengan baik. Tidak ada jadwal ujian hari ini.</span>
                </div>
                <button class="btn-close btn-close-white ms-auto" data-bs-dismiss="alert"></button>
            </div>

            <!-- STATISTIK CARDS -->
            <div class="row g-4 mb-4">
                <div class="col-sm-6 col-xl-3">
                    <div class="card stat-card p-3 h-100">
                        <div class="d-flex justify-content-between align-items-start">
                            <div>
                                <p class="text-muted text-sm fw-medium mb-1">Total Siswa Aktif</p>
                                <h2 class="fw-bold text-white mb-0">1,245</h2>
                            </div>
                            <div class="stat-icon" style="background: rgba(139, 92, 246, 0.15); color: var(--accent-violet);">
                                <i class="fas fa-user-graduate"></i>
                            </div>
                        </div>
                        <div class="mt-3 text-sm">
                            <span class="text-success"><i class="fas fa-arrow-up"></i> +12%</span> <span class="text-muted">dari tahun lalu</span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="card stat-card p-3 h-100">
                        <div class="d-flex justify-content-between align-items-start">
                            <div>
                                <p class="text-muted text-sm fw-medium mb-1">Tenaga Pengajar</p>
                                <h2 class="fw-bold text-white mb-0">84</h2>
                            </div>
                            <div class="stat-icon" style="background: rgba(16, 185, 129, 0.15); color: var(--accent-emerald);">
                                <i class="fas fa-chalkboard-teacher"></i>
                            </div>
                        </div>
                        <div class="mt-3 text-sm">
                            <span class="text-success"><i class="fas fa-arrow-up"></i> +2</span> <span class="text-muted">guru baru bulan ini</span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="card stat-card p-3 h-100">
                        <div class="d-flex justify-content-between align-items-start">
                            <div>
                                <p class="text-muted text-sm fw-medium mb-1">Rombongan Belajar</p>
                                <h2 class="fw-bold text-white mb-0">36</h2>
                            </div>
                            <div class="stat-icon" style="background: rgba(245, 158, 11, 0.15); color: var(--accent-amber);">
                                <i class="fas fa-door-open"></i>
                            </div>
                        </div>
                        <div class="mt-3 text-sm">
                            <span class="text-muted">Tersebar di 3 jurusan</span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="card stat-card p-3 h-100">
                        <div class="d-flex justify-content-between align-items-start">
                            <div>
                                <p class="text-muted text-sm fw-medium mb-1">Mata Pelajaran</p>
                                <h2 class="fw-bold text-white mb-0">24</h2>
                            </div>
                            <div class="stat-icon" style="background: rgba(244, 63, 94, 0.15); color: var(--accent-rose);">
                                <i class="fas fa-book"></i>
                            </div>
                        </div>
                        <div class="mt-3 text-sm">
                            <span class="text-danger"><i class="fas fa-circle" style="font-size:8px;"></i></span> <span class="text-muted">Kurikulum Merdeka</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row g-4">
                <!-- TABEL JADWAL -->
                <div class="col-lg-8">
                    <div class="card h-100">
                        <div class="card-header bg-transparent d-flex justify-content-between align-items-center py-3">
                            <h6 class="mb-0 fw-bold text-white">Jadwal Kelas Hari Ini</h6>
                            <button class="btn btn-sm btn-outline-secondary rounded-pill px-3">Lihat Semua</button>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-hover align-middle mb-0">
                                    <thead>
                                        <tr>
                                            <th class="ps-4">Waktu</th>
                                            <th>Mata Pelajaran</th>
                                            <th>Kelas</th>
                                            <th>Pengajar</th>
                                            <th class="pe-4 text-end">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="ps-4 text-muted text-sm">07:00 - 08:30</td>
                                            <td class="fw-semibold text-white">Matematika Lanjut</td>
                                            <td><span class="badge bg-dark border border-secondary text-light">XII IPA 1</span></td>
                                            <td>
                                                <div class="d-flex align-items-center gap-2">
                                                    <img src="https://ui-avatars.com/api/?name=Budi+S&background=random" class="rounded-circle" width="24">
                                                    <span class="text-sm">Budi Santoso, S.Pd</span>
                                                </div>
                                            </td>
                                            <td class="pe-4 text-end"><span class="badge bg-success-subtle text-success border border-success-subtle rounded-pill">Berlangsung</span></td>
                                        </tr>
                                        <tr>
                                            <td class="ps-4 text-muted text-sm">07:00 - 08:30</td>
                                            <td class="fw-semibold text-white">Bahasa Inggris</td>
                                            <td><span class="badge bg-dark border border-secondary text-light">XI IPS 2</span></td>
                                            <td>
                                                <div class="d-flex align-items-center gap-2">
                                                    <img src="https://ui-avatars.com/api/?name=Siti+A&background=random" class="rounded-circle" width="24">
                                                    <span class="text-sm">Siti Aminah, M.Pd</span>
                                                </div>
                                            </td>
                                            <td class="pe-4 text-end"><span class="badge bg-success-subtle text-success border border-success-subtle rounded-pill">Berlangsung</span></td>
                                        </tr>
                                        <tr>
                                            <td class="ps-4 text-muted text-sm">08:30 - 10:00</td>
                                            <td class="fw-semibold text-white">Fisika Dasar</td>
                                            <td><span class="badge bg-dark border border-secondary text-light">X IPA 3</span></td>
                                            <td>
                                                <div class="d-flex align-items-center gap-2">
                                                    <img src="https://ui-avatars.com/api/?name=Agus+S&background=random" class="rounded-circle" width="24">
                                                    <span class="text-sm">Agus Setiawan, S.Si</span>
                                                </div>
                                            </td>
                                            <td class="pe-4 text-end"><span class="badge bg-warning-subtle text-warning border border-warning-subtle rounded-pill">Menunggu</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ACTIVITY TIMELINE -->
                <div class="col-lg-4">
                    <div class="card h-100">
                        <div class="card-header bg-transparent py-3">
                            <h6 class="mb-0 fw-bold text-white">Log Aktivitas Terbaru</h6>
                        </div>
                        <div class="card-body">
                            <div class="position-relative ms-3 border-start border-secondary pb-1">
                                <!-- Item 1 -->
                                <div class="position-relative mb-4 ps-4">
                                    <span class="position-absolute top-0 start-0 translate-middle bg-dark border border-2 border-success rounded-circle" style="width: 14px; height: 14px;"></span>
                                    <div class="text-sm fw-semibold text-white">Nilai Matematika Diinput</div>
                                    <div class="text-muted" style="font-size: 0.8rem;">Oleh Budi Santoso untuk Kelas XII IPA 1</div>
                                    <div class="text-muted mt-1" style="font-size: 0.75rem;"><i class="far fa-clock"></i> 10 menit yang lalu</div>
                                </div>
                                <!-- Item 2 -->
                                <div class="position-relative mb-4 ps-4">
                                    <span class="position-absolute top-0 start-0 translate-middle bg-dark border border-2 border-info rounded-circle" style="width: 14px; height: 14px;"></span>
                                    <div class="text-sm fw-semibold text-white">Pendaftaran Siswa Baru</div>
                                    <div class="text-muted" style="font-size: 0.8rem;">3 Data siswa mutasi berhasil dimasukkan ke sistem</div>
                                    <div class="text-muted mt-1" style="font-size: 0.75rem;"><i class="far fa-clock"></i> 1 jam yang lalu</div>
                                </div>
                                <!-- Item 3 -->
                                <div class="position-relative ps-4">
                                    <span class="position-absolute top-0 start-0 translate-middle bg-dark border border-2 border-danger rounded-circle" style="width: 14px; height: 14px;"></span>
                                    <div class="text-sm fw-semibold text-white">Notifikasi Absensi Guru</div>
                                    <div class="text-muted" style="font-size: 0.8rem;">Rina Mulyati (Sakit) - Membutuhkan guru pengganti</div>
                                    <div class="text-muted mt-1" style="font-size: 0.75rem;"><i class="far fa-clock"></i> 3 jam yang lalu</div>
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