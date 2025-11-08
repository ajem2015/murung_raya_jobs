@include('layouts.header')

<!-- Hero Section -->
<section class="text-white bg-dark" style="background-image: linear-gradient(rgba(148, 148, 247, 0.6), rgba(46, 51, 210, 0.6)), url('{{ asset('images/bg_murungraya.jpg') }}'); background-size: cover; background-position: center; background-repeat: no-repeat; padding-top: 6rem; padding-bottom: 6rem;">
    <div class="container text-center">
        <h1 class="display-4 fw-bold mb-3">
            Dashboard Statistik Ketenagakerjaan Kabupaten Murung Raya
        </h1>
        <p class="lead mb-4">
            Analisis Data Real-Time untuk Perencanaan Pembangunan Daerah
            <br>
            Monitoring Tren dan Evaluasi Kinerja Berbasis Metrik
        </p>

        <div class="d-flex justify-content-center gap-3 mt-4 col-lg-10 mx-auto">
            <span class="badge bg-light bg-opacity-25 fs-6 fw-normal py-2 px-3" style="backdrop-filter: blur(10px); border: 1px solid rgba(255, 255, 255, 0.3);">
                <i class="bi bi-graph-up"></i> DSS Analytics
            </span>
            <span class="badge bg-light bg-opacity-25 fs-6 fw-normal py-2 px-3" style="backdrop-filter: blur(10px); border: 1px solid rgba(255, 255, 255, 0.3);">
                <i class="bi bi-clock-history"></i> Real-time Data
            </span>
            <span class="badge bg-light bg-opacity-25 fs-6 fw-normal py-2 px-3" style="backdrop-filter: blur(10px); border: 1px solid rgba(255, 255, 255, 0.3);">
                <i class="bi bi-geo-alt"></i> 10 Kecamatan
            </span>
        </div>
    </div>
</section>

<!-- Navigation Bar -->
<section class="py-3 bg-white">
    <div class="container">
        <div class="d-flex justify-content-center">
            <div class="bg-body-secondary rounded-pill p-2">
                <ul class="nav nav-pills mb-0" style="gap: 8px;">
                    <li class="nav-item">
                        <a class="nav-link d-flex align-items-center rounded-pill text-dark mx-1" 
                           href="{{ route('home') }}"
                           style="transition: all 0.3s ease;"
                           onmouseover="this.style.backgroundColor='#f8f9fa'; this.style.color='#0d6efd';"
                           onmouseout="this.style.backgroundColor='transparent'; this.style.color='#212529';">
                            <i class="bi bi-list-ul me-2"></i> Lowongan
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-flex align-items-center rounded-pill text-dark mx-1" 
                           href="{{ route('peta') }}"
                           style="transition: all 0.3s ease;"
                           onmouseover="this.style.backgroundColor='#f8f9fa'; this.style.color='#0d6efd';"
                           onmouseout="this.style.backgroundColor='transparent'; this.style.color='#212529';">
                            <i class="bi bi-map me-2"></i> Peta
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active d-flex align-items-center rounded-pill bg-white text-dark mx-1" 
                           aria-current="page" 
                           href="{{ route('statistik') }}"
                           style="transition: all 0.3s ease;">
                            <i class="bi bi-bar-chart-line me-2"></i> Statistik
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-flex align-items-center rounded-pill text-dark mx-1" 
                           href="{{ route('panduan') }}"
                           style="transition: all 0.3s ease;"
                           onmouseover="this.style.backgroundColor='#f8f9fa'; this.style.color='#0d6efd';"
                           onmouseout="this.style.backgroundColor='transparent'; this.style.color='#212529';">
                            <i class="bi bi-journal-bookmark me-2"></i> Panduan
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Key Metrics Dashboard -->
<section class="py-5 bg-white">
    <div class="container">
        <div class="row g-4">
            <div class="col-md-3">
                <div class="card border-0 shadow-lg">
                    <div class="card-body text-center">
                        <i class="bi bi-people-fill display-6 text-primary mb-3"></i>
                        <h3 class="fw-bold text-primary">42,150</h3>
                        <p class="fw-bold mb-1">Usia Produktif</p>
                        <small class="text-success">
                            <i class="bi bi-arrow-up"></i> 2.3% dari 2023
                        </small>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card border-0 shadow-lg">
                    <div class="card-body text-center">
                        <i class="bi bi-briefcase-fill display-6 text-success mb-3"></i>
                        <h3 class="fw-bold text-success">35,892</h3>
                        <p class="fw-bold mb-1">Bekerja</p>
                        <small class="text-success">
                            <i class="bi bi-arrow-up"></i> 4.1% pertumbuhan
                        </small>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card border-0 shadow-lg">
                    <div class="card-body text-center">
                        <i class="bi bi-person-x-fill display-6 text-danger mb-3"></i>
                        <h3 class="fw-bold text-danger">1,247</h3>
                        <p class="fw-bold mb-1">Pengangguran</p>
                        <small class="text-danger">
                            <i class="bi bi-arrow-down"></i> 8.5% TPT
                        </small>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card border-0 shadow-lg">
                    <div class="card-body text-center">
                        <i class="bi bi-briefcase display-6 text-warning mb-3"></i>
                        <h3 class="fw-bold text-warning">248</h3>
                        <p class="fw-bold mb-1"><strong>Lowongan</strong></p>
                        <small class="text-success">
                            <i class="bi bi-arrow-up"></i> 12 baru bulan ini
                        </small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Filter Data Section -->
<section class="py-4 bg-white">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="bg-white rounded p-4 shadow-lg">
                    <h5 class="fw-bold mb-3 text-dark">
                        <i class="bi bi-funnel me-2 text-primary"></i>
                        Filter Data Statistik
                    </h5>
                    <p class="text-muted mb-4">Sesuaikan parameter untuk melihat data yang spesifik</p>
                    <div class="row g-3">
                        <div class="col-md-3">
                            <label class="form-label small fw-semibold">Pilih Kecamatan</label>
                            <select class="form-select" id="kecamatanFilter">
                                <option value="">Semua Kecamatan</option>
                                <option value="sumber_barito">Sumber Barito</option>
                                <option value="murara_laung">Murara Laung</option>
                                <option value="uut_murung">Uut Murung</option>
                                <option value="laung_tuhup">Laung Tuhup</option>
                                <option value="permata_intan">Permata Intan</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label small fw-semibold">Pilih Pendidikan</label>
                            <select class="form-select" id="pendidikanFilter">
                                <option value="">Semua Pendidikan</option>
                                <option value="sma">SMA/Sederajat</option>
                                <option value="diploma">Diploma</option>
                                <option value="sarjana">Sarjana</option>
                                <option value="smp">SMP</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label small fw-semibold">Pilih Sektor Pekerjaan</label>
                            <select class="form-select" id="sektorFilter">
                                <option value="">Semua Sektor</option>
                                <option value="pertambangan">Pertambangan</option>
                                <option value="perkebunan">Perkebunan</option>
                                <option value="perdagangan">Perdagangan</option>
                                <option value="jasa">Jasa</option>
                                <option value="konstruksi">Konstruksi</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label small fw-semibold">Pilih Kelompok Usia</label>
                            <select class="form-select" id="periodeFilter">
                                <option value="">Semua Usia</option>
                                <option value="15-24">15-24 Tahun</option>
                                <option value="25-34">25-34 Tahun</option>
                                <option value="35-44">35-44 Tahun</option>
                                <option value="45+">45+</option>
                            </select>
                        </div>
                    </div>
                    <div class="mt-3 text-end">
                        <button class="btn btn-primary">
                            <i class="bi bi-arrow-clockwise me-2"></i>Terapkan Filter
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Main Statistics Content -->
<section class="py-5 bg-white">
    <div class="container">
        <div class="row">
            <!-- Left Column - Big Charts -->
            <div class="col-lg-6">
                <!-- Tren Bulanan -->
                <div class="card shadow-lg mb-4 h-100">
                    <div class="card-header bg-white">
                        <h5 class="fw-bold mb-0">
                            <i class="bi bi-graph-up me-2 text-primary"></i>
                            Tren Ketenagakerjaan Bulanan
                        </h5>
                        <p class="text-muted mb-0 small">Perbandingan jumlah pekerja dan pengangguran per bulan</p>
                    </div>
                    <div class="card-body d-flex flex-column">
                        <canvas id="monthlyTrendChart" height="300"></canvas>
                    </div>
                </div>
            </div>

            <!-- Right Column - Big Charts -->
            <div class="col-lg-6">
                <!-- Distribusi Sektor -->
                <div class="card shadow-lg mb-4 h-100">
                    <div class="card-header bg-white">
                        <h5 class="fw-bold mb-0">
                            <i class="bi bi-pie-chart me-2 text-success"></i>
                            Distribusi Tenaga Kerja per Sektor
                        </h5>
                        <p class="text-muted mb-0 small">Jumlah pekerja berdasarkan sektor pekerjaan</p>
                    </div>
                    <div class="card-body d-flex flex-column">
                        <canvas id="sectorDistributionChart" height="300"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <!-- Full Width Section - Distribusi & Data Table -->
        <div class="row mt-4">
            <div class="col-12">
                <div class="card shadow-lg mb-4">
                    <div class="card-header bg-white">
                        <h5 class="fw-bold mb-0">
                            <i class="bi bi-people-fill me-2 text-info"></i>
                            Distribusi Angkatan Kerja Berdasarkan Usia dan Gender
                        </h5>
                        <p class="text-muted mb-0 small">Perbandingan jumlah pekerja laki-laki dan perempuan per kelompok usia</p>
                    </div>
                    <div class="card-body">
                        <canvas id="ageGenderChart" height="100"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <!-- Data Table -->
                <div class="card shadow-lg">
                    <div class="card-header bg-white">
                        <h5 class="fw-bold mb-0">
                            <i class="bi bi-table me-2 text-warning"></i>
                            Data Lengkap Angkatan Kerja
                        </h5>
                        <p class="text-muted mb-0 small">Detail data ekonomi tenaga kerja dan personal kerja</p>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Cari berdasarkan nama, pendidikan, atau sektor...">
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead class="table-light">
                                    <tr>
                                        <th>Nama</th>
                                        <th>Usia</th>
                                        <th>Pendidikan</th>
                                        <th>Sektor</th>
                                        <th>Status</th>
                                        <th>Kecamatan</th>
                                        <th>Tanggal Update</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><strong>Anmal Faziri</strong></td>
                                        <td>25</td>
                                        <td><span>SMA</span></td>
                                        <td><span>Pertambangan</span></td>
                                        <td><span class="badge bg-success text-dark">Bekerja</span></td>
                                        <td>Sumber Barito</td>
                                        <td>15 Mar 2024</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Bri Nurhilizlu</strong></td>
                                        <td>24</td>
                                        <td><span>Diploma</span></td>
                                        <td><span>Jasa</span></td>
                                        <td><span class="badge bg-success text-dark">Bekerja</span></td>
                                        <td>Murara Laung</td>
                                        <td>14 Mar 2024</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Bud Santona</strong></td>
                                        <td>32</td>
                                        <td><span>Sarjana</span></td>
                                        <td><span>Konstruksi</span></td>
                                        <td><span class="badge bg-warning text-dark">Mencari Kerja</span></td>
                                        <td>Permata Intan</td>
                                        <td>13 Mar 2024</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Dowl Lastari</strong></td>
                                        <td>26</td>
                                        <td><span>SMA</span></td>
                                        <td><span>Perdagangan</span></td>
                                        <td><span class="badge bg-success text-dark">Bekerja</span></td>
                                        <td>Tanah Siang</td>
                                        <td>12 Mar 2024</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Bio Prusetyo</strong></td>
                                        <td>35</td>
                                        <td><span>SMA</span></td>
                                        <td><span>Pertanian</span></td>
                                        <td><span class="badge bg-success text-dark">Bekerja</span></td>
                                        <td>Barito Tuhup Raya</td>
                                        <td>11 Mar 2024</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Firli Hurdayan</strong></td>
                                        <td>29</td>
                                        <td><span>Sarjana</span></td>
                                        <td><span>Jasa</span></td>
                                        <td><span class="badge bg-success text-dark">Bekerja</span></td>
                                        <td>Laung Tuhup</td>
                                        <td>10 Mar 2024</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Ganesan Wilaya</strong></td>
                                        <td>41</td>
                                        <td><span>SMP</span></td>
                                        <td><span>Pertambangan</span></td>
                                        <td><span class="badge bg-warning text-dark">Mencari Kerja</span></td>
                                        <td>Sumber Barito</td>
                                        <td>09 Mar 2024</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Next Puntanasari</strong></td>
                                        <td>23</td>
                                        <td><span>Diploma</span></td>
                                        <td><span>Perdagangan</span></td>
                                        <td><span class="badge bg-success text-dark">Bekerja</span></td>
                                        <td>Tanah Siang Selatan</td>
                                        <td>08 Mar 2024</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <nav aria-label="Page navigation" class="mt-3">
                            <ul class="pagination justify-content-center mb-0">
                                <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bottom Section - 2 Columns in 1 Row -->
        <div class="row mt-4">
            <div class="col-lg-6">
                <!-- DSS Insights -->
                <div class="card shadow-lg h-100">
                    <div class="card-header bg-white">
                        <h5 class="fw-bold mb-0">
                            <i class="bi bi-lightbulb me-2 text-warning"></i>
                            Insight Decision Support System
                        </h5>
                    </div>
                    <div class="card-body">
                        <div class="alert alert-info mb-3">
                            <h6><i class="bi bi-exclamation-triangle me-2"></i>Hotspot Analysis</h6>
                            <p class="small mb-0">3 kecamatan memiliki TPT di atas rata-rata nasional: Uut Murung (9.1%), Sungai Babuat (8.2%), Tanah Siang Selatan (7.5%)</p>
                        </div>
                        <div class="alert alert-success mb-3">
                            <h6><i class="bi bi-graph-up-arrow me-2"></i>Positive Trend</h6>
                            <p class="small mb-0">Tenaga tersertifikasi meningkat 15.2% YoY, menunjukkan efektivitas program Kartu HEBAT</p>
                        </div>
                        <div class="alert alert-warning mb-0">
                            <h6><i class="bi bi-geo-alt me-2"></i>Spatial Pattern</h6>
                            <p class="small mb-0">Cluster pertambangan di Sumber Barito menunjukkan penyerapan tenaga kerja tertinggi (85%)</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6">
                <!-- Quick Export -->
                <div class="card shadow-lg h-100">
                    <div class="card-header bg-white">
                        <h5 class="fw-bold mb-0">
                            <i class="bi bi-download me-2 text-primary"></i>
                            Ekspor Data & Laporan
                        </h5>
                    </div>
                    <div class="card-body d-flex flex-column justify-content-center">
                        <div class="d-grid gap-3">
                            <button class="btn btn-outline-primary btn-lg py-3">
                                <i class="bi bi-file-earmark-pdf me-2 fs-5"></i>Laporan Bulanan
                            </button>
                            <button class="btn btn-outline-success btn-lg py-3">
                                <i class="bi bi-file-earmark-excel me-2 fs-5"></i>Data Excel
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- JavaScript untuk Charts -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
// Monthly Trend Chart
const monthlyCtx = document.getElementById('monthlyTrendChart').getContext('2d');
new Chart(monthlyCtx, {
    type: 'line',
    data: {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun'],
        datasets: [{
            label: 'Bekerja',
            data: [22000, 23500, 24800, 26200, 27800, 29200],
            borderColor: '#28a745',
            backgroundColor: 'rgba(40, 167, 69, 0.1)',
            tension: 0.4,
            fill: true
        }, {
            label: 'Pengangguran',
            data: [1800, 1650, 1520, 1380, 1240, 1100],
            borderColor: '#dc3545',
            backgroundColor: 'rgba(220, 53, 69, 0.1)',
            tension: 0.4,
            fill: true
        }]
    },
    options: {
        responsive: true,
        plugins: {
            title: {
                display: true,
                text: 'Tren Bulanan 2024'
            }
        }
    }
});

// Sector Distribution Chart
const sectorCtx = document.getElementById('sectorDistributionChart').getContext('2d');
new Chart(sectorCtx, {
    type: 'bar',
    data: {
        labels: ['Pertambangan', 'Perkebunan', 'Perdagangan', 'Jasa', 'Konstruksi', 'Lainnya'],
        datasets: [{
            label: 'Jumlah Pekerja',
            data: [12600, 9450, 6300, 4725, 3150, 1890],
            backgroundColor: [
                '#007bff', '#28a745', '#ffc107', '#dc3545', '#6f42c1', '#fd7e14'
            ]
        }]
    },
    options: {
        responsive: true,
        plugins: {
            title: {
                display: true,
                text: 'Distribusi per Sektor'
            }
        }
    }
});

// Age & Gender Chart
const ageGenderCtx = document.getElementById('ageGenderChart').getContext('2d');
new Chart(ageGenderCtx, {
    type: 'bar',
    data: {
        labels: ['15-24', '25-34', '35-44', '45-54', '55+'],
        datasets: [{
            label: 'Laki-laki',
            data: [3200, 4800, 4200, 2800, 1200],
            backgroundColor: '#007bff'
        }, {
            label: 'Perempuan',
            data: [2800, 4200, 3800, 2400, 900],
            backgroundColor: '#e83e8c'
        }]
    },
    options: {
        responsive: true,
        plugins: {
            title: {
                display: true,
                text: 'Distribusi Usia & Gender'
            }
        }
    }
});
</script>

@include('layouts.footer')