<!DOCTYPE html>
<html lang="id" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIAKAD - Dashboard Guru</title>
    
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
    
    <!-- SIDEBAR GURU -->
    <div class="sidebar flex-shrink-0 p-4" style="width: 260px;">
        <a href="#" class="d-flex align-items-center mb-4 text-decoration-none">
            <!-- Ikon menggunakan aksen Emerald (Hijau) khas Guru -->
            <i class="fas fa-layer-group fa-2x me-3" style="color: var(--accent-emerald)"></i>
            <span class="fs-4 brand-text">SIAKAD</span>
        </a>
        
        <div class="text-uppercase text-muted fw-bold mb-2 mt-4" style="font-size: 0.75rem; letter-spacing: 1px;">Portal Guru</div>
        <ul class="nav flex-column mb-auto gap-1">
            <li class="nav-item">
                <a href="#" class="nav-link active" style="background-color: rgba(16, 185, 129, 0.15); color: var(--accent-emerald);">
                    <i class="fas fa-border-all me-2"></i> Beranda
                </a>
            </li>
            <li><a href="#" class="nav-link"><i class="fas fa-calendar-check me-2"></i> Jadwal Mengajar</a></li>
            <li><a href="#" class="nav-link"><i class="fas fa-users me-2"></i> Data Kelas</a></li>
            
            <div class="text-uppercase text-muted fw-bold mb-2 mt-4" style="font-size: 0.75rem; letter-spacing: 1px;">Manajemen KBM</div>
            <li><a href="#" class="nav-link"><i class="fas fa-edit me-2"></i> Input Nilai</a></li>
            <li><a href="#" class="nav-link"><i class="fas fa-clipboard-list me-2"></i> Jurnal & Absensi</a></li>
            <li><a href="#" class="nav-link"><i class="fas fa-file-alt me-2"></i> Bahan Ajar</a></li>
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
                <a href="#" class="btn btn-sm btn-outline-success rounded-pill px-3 d-none d-sm-block border-secondary text-light hover-success">
                    <i class="fas fa-download me-1"></i> Format Penilaian
                </a>
                <a href="#" class="text-muted position-relative">
                    <i class="fas fa-bell fs-5"></i>
                    <span class="position-absolute top-0 start-100 translate-middle p-1 bg-danger border border-dark rounded-circle"></span>
                </a>
                <div class="d-flex align-items-center border-start border-secondary ps-4">
                    <div class="text-end me-3 d-none d-sm-block">
                        <div class="fw-semibold text-sm lh-1">Siti Aminah, M.Pd</div>
                        <small class="text-muted" style="font-size: 0.75rem;">NIP: 198203092008</small>
                    </div>
                    <img src="https://ui-avatars.com/api/?name=Siti+Aminah&background=10b981&color=fff" alt="Siti Aminah" class="rounded-circle" width="38">
                </div>
            </div>
        </nav>

        <!-- KONTEN DASHBOARD GURU -->
        <div class="container-fluid p-4 p-md-5">
            
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center mb-4 gap-3">
                <div>
                    <h3 class="mb-1 fw-bold text-white">Portal Akademik Guru</h3>
                    <p class="text-muted mb-0">Kelola jadwal kelas, absensi, dan penilaian siswa dengan mudah.</p>
                </div>
                <div class="bg-dark px-3 py-2 rounded-3 border border-secondary d-flex align-items-center gap-2">
                    <i class="fas fa-calendar text-muted"></i>
                    <span class="text-sm fw-medium">T.A Ganjil 2026/2027</span>
                </div>
            </div>

            <!-- Welcome Alert (Guru Edition) -->
            <div class="alert alert-custom rounded-3 d-flex align-items-center mb-4 p-3 shadow-sm" style="border-left-color: var(--accent-emerald); background-color: rgba(16, 185, 129, 0.1); border-color: rgba(16, 185, 129, 0.2);">
                <div class="bg-dark rounded-circle p-2 me-3 border border-secondary d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                    <i class="fas fa-info-circle text-success"></i>
                </div>
                <div>
                    <h6 class="mb-1 fw-bold text-white">Pengingat Input Nilai UTS</h6>
                    <span class="text-sm opacity-75 text-light">Portal pengisian nilai UTS akan ditutup pada tanggal 30 September 2026.</span>
                </div>
                <button class="btn-close btn-close-white ms-auto" data-bs-dismiss="alert"></button>
            </div>

            <!-- STATISTIK CARDS (Guru Edition) -->
            <div class="row g-4 mb-4">
                <div class="col-sm-6 col-xl-3">
                    <div class="card stat-card p-3 h-100">
                        <div class="d-flex justify-content-between align-items-start">
                            <div>
                                <p class="text-muted text-sm fw-medium mb-1">Total Kelas Diampu</p>
                                <h2 class="fw-bold text-white mb-0">6</h2>
                            </div>
                            <div class="stat-icon" style="background: rgba(16, 185, 129, 0.15); color: var(--accent-emerald);">
                                <i class="fas fa-chalkboard-teacher"></i>
                            </div>
                        </div>
                        <div class="mt-3 text-sm">
                            <span class="text-muted">Lintas tingkat X, XI, XII</span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="card stat-card p-3 h-100">
                        <div class="d-flex justify-content-between align-items-start">
                            <div>
                                <p class="text-muted text-sm fw-medium mb-1">Jam Mingguan</p>
                                <h2 class="fw-bold text-white mb-0">24</h2>
                            </div>
                            <div class="stat-icon" style="background: rgba(59, 130, 246, 0.15); color: #3b82f6;">
                                <i class="fas fa-clock"></i>
                            </div>
                        </div>
                        <div class="mt-3 text-sm">
                            <span class="text-success"><i class="fas fa-check"></i> Sesuai beban kerja</span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="card stat-card p-3 h-100">
                        <div class="d-flex justify-content-between align-items-start">
                            <div>
                                <p class="text-muted text-sm fw-medium mb-1">Tugas Menunggu</p>
                                <h2 class="fw-bold text-white mb-0">2</h2>
                            </div>
                            <div class="stat-icon" style="background: rgba(245, 158, 11, 0.15); color: var(--accent-amber);">
                                <i class="fas fa-inbox"></i>
                            </div>
                        </div>
                        <div class="mt-3 text-sm">
                            <span class="text-warning"><i class="fas fa-exclamation-circle" style="font-size:10px;"></i></span> <span class="text-muted">Kelas XI IPS 1 & 2</span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <!-- Tombol Cepat / Action Card -->
                    <div class="card stat-card p-3 h-100 d-flex justify-content-center align-items-center" style="background: rgba(16, 185, 129, 0.1); border-color: rgba(16, 185, 129, 0.3); cursor: pointer; transition: all 0.2s;">
                        <div class="text-center" style="color: var(--accent-emerald);">
                            <i class="fas fa-qrcode fa-2x mb-2"></i>
                            <h6 class="mb-0 fw-bold">Generate QR Absen</h6>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row g-4">
                <!-- TABEL JADWAL MENGAJAR (Guru Edition) -->
                <div class="col-lg-8">
                    <div class="card h-100">
                        <div class="card-header bg-transparent d-flex justify-content-between align-items-center py-3">
                            <h6 class="mb-0 fw-bold text-white"><i class="fas fa-chalkboard text-muted me-2"></i> Agenda Mengajar Hari Ini</h6>
                            <a href="#" class="btn btn-sm btn-outline-secondary rounded-pill px-3">Semua Jadwal</a>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-hover align-middle mb-0">
                                    <thead>
                                        <tr>
                                            <th class="ps-4">Waktu</th>
                                            <th>Kelas</th>
                                            <th>Mata Pelajaran</th>
                                            <th>Status Absensi</th>
                                            <th class="pe-4 text-end">Aksi Cepat</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="ps-4 text-muted text-sm fw-medium">07:00 - 08:30</td>
                                            <td><span class="badge bg-dark border border-secondary text-light">XI IPS 1</span></td>
                                            <td class="fw-semibold text-white">Bahasa Inggris Wajib</td>
                                            <td>
                                                <div class="d-flex align-items-center gap-2">
                                                    <div class="progress flex-grow-1 bg-dark border border-secondary" style="height: 6px; max-width: 80px;">
                                                        <div class="progress-bar bg-success" style="width: 100%"></div>
                                                    </div>
                                                    <span class="text-sm text-muted">32/32</span>
                                                </div>
                                            </td>
                                            <td class="pe-4 text-end">
                                                <button class="btn btn-sm btn-success px-2 py-1 me-1"><i class="fas fa-check-square"></i></button>
                                                <button class="btn btn-sm btn-outline-secondary px-2 py-1"><i class="fas fa-pen"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ps-4 text-muted text-sm fw-medium">08:30 - 10:00</td>
                                            <td><span class="badge bg-dark border border-secondary text-light">XI IPS 2</span></td>
                                            <td class="fw-semibold text-white">Bahasa Inggris Wajib</td>
                                            <td>
                                                <span class="badge bg-danger-subtle text-danger border border-danger-subtle rounded-pill">Belum Diabsen</span>
                                            </td>
                                            <td class="pe-4 text-end">
                                                <button class="btn btn-sm btn-success px-2 py-1 me-1"><i class="fas fa-check-square"></i></button>
                                                <button class="btn btn-sm btn-outline-secondary px-2 py-1"><i class="fas fa-pen"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ps-4 text-muted text-sm fw-medium">10:30 - 12:00</td>
                                            <td><span class="badge bg-dark border border-secondary text-light">XII IPS 1</span></td>
                                            <td class="fw-semibold text-white">Bahasa Inggris Lintas Minat</td>
                                            <td>
                                                <span class="text-sm text-muted">-</span>
                                            </td>
                                            <td class="pe-4 text-end">
                                                <button class="btn btn-sm btn-success px-2 py-1 me-1 disabled"><i class="fas fa-check-square"></i></button>
                                                <button class="btn btn-sm btn-outline-secondary px-2 py-1 disabled"><i class="fas fa-pen"></i></button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- DAFTAR TUGAS & PENGINGAT (Guru Edition) -->
                <div class="col-lg-4">
                    <div class="card h-100">
                        <div class="card-header bg-transparent py-3">
                            <h6 class="mb-0 fw-bold text-white">Tugas & Remainder</h6>
                        </div>
                        <div class="card-body">
                            <div class="position-relative ms-3 border-start border-secondary pb-1">
                                <!-- Item 1: Un-graded Assignment -->
                                <div class="position-relative mb-4 ps-4">
                                    <span class="position-absolute top-0 start-0 translate-middle bg-dark border border-2 border-warning rounded-circle" style="width: 14px; height: 14px; border-color: var(--accent-amber) !important;"></span>
                                    <div class="d-flex justify-content-between align-items-start">
                                        <div class="text-sm fw-semibold text-white">Koreksi Makalah Text Narrative</div>
                                    </div>
                                    <div class="text-muted mt-1" style="font-size: 0.8rem;">Kelas XI IPS 1 • 32 Dokumen belum dinilai.</div>
                                    <a href="#" class="btn btn-link btn-sm p-0 mt-1 text-decoration-none" style="color: var(--accent-emerald);">Lihat Pengumpulan &rarr;</a>
                                </div>
                                
                                <!-- Item 2: Teacher Meeting -->
                                <div class="position-relative mb-4 ps-4">
                                    <span class="position-absolute top-0 start-0 translate-middle bg-dark border border-2 border-info rounded-circle" style="width: 14px; height: 14px;"></span>
                                    <div class="text-sm fw-semibold text-white">Rapat Pleno Dewan Guru</div>
                                    <div class="text-muted mt-1" style="font-size: 0.8rem;">Persiapan pelaksanaan Ujian Tengah Semester.</div>
                                    <div class="text-info mt-1" style="font-size: 0.75rem;"><i class="far fa-clock"></i> Jumat, 13:00 - Ruang Guru</div>
                                </div>
                                
                                <!-- Item 3: System Note -->
                                <div class="position-relative ps-4">
                                    <span class="position-absolute top-0 start-0 translate-middle bg-dark border border-2 border-secondary rounded-circle" style="width: 14px; height: 14px;"></span>
                                    <div class="text-sm fw-semibold text-white">Update Sistem SIAKAD</div>
                                    <div class="text-muted mt-1" style="font-size: 0.8rem;">Modul e-Rapor v2.0 akan diaktifkan minggu depan.</div>
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