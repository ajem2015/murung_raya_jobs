@include('layouts.header')

<!-- Hero Section -->
<section class="text-white bg-dark" style="background-image: linear-gradient(rgba(148, 148, 247, 0.6), rgba(46, 51, 210, 0.6)), url('{{ asset('images/bg_murungraya.jpg') }}'); background-size: cover; background-position: center; background-repeat: no-repeat; padding-top: 6rem; padding-bottom: 6rem;">
    <div class="container text-center">
        <h1 class="display-4 fw-bold mb-3">
            Panduan Sistem Informasi Ketenagakerjaan Kabupaten Murung Raya
        </h1>
        <p class="lead mb-4">
            Mendukung Akselerasi Tenaga Kerja Tersertifikasi dan Implementasi Kartu HEBAT
            <br>
            Berbasis Decision Support System untuk Perencanaan Pembangunan Daerah
        </p>
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="bg-light bg-opacity-25 rounded p-4" style="backdrop-filter: blur(10px); border: 1px solid rgba(255, 255, 255, 0.3);">
                    <h5 class="text-white mb-3">Cari Informasi yang Anda Butuhkan</h5>
                    <form method="GET" action="{{ route('home') }}">
                        <div class="row g-3">
                            <div class="col-md-8">
                                <input type="text" name="search" class="form-control form-control-lg" placeholder="Cari informasi panduan..." value="{{ request('search') }}">
                            </div>
                            <div class="col-md-4">
                                <select name="kategori_panduan" class="form-select form-select-lg">
                                    <option value="">Semua Kategori</option>
                                    <option value="penggunaan">Panduan Penggunaan Portal</option>
                                    <option value="pelamaran">Panduan Pelamaran Kerja</option>
                                    <option value="sertifikasi">Program Sertifikasi</option>
                                    <option value="peta">Panduan Peta DSS</option>
                                    <option value="statistik">Panduan Statistik</option>
                                    <option value="kontak">Kontak Bantuan</option>
                                </select>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-center gap-3 mt-4 col-lg-10 mx-auto">
            <span class="badge bg-light bg-opacity-25 fs-6 fw-normal py-2 px-3" style="backdrop-filter: blur(10px); border: 1px solid rgba(255, 255, 255, 0.3);">
                <i class="bi bi-award-fill"></i> Kartu HEBAT
            </span>
            <span class="badge bg-light bg-opacity-25 fs-6 fw-normal py-2 px-3" style="backdrop-filter: blur(10px); border: 1px solid rgba(255, 255, 255, 0.3);">
                <i class="bi bi-info-circle-fill"></i> Panduan Lengkap
            </span>
            <span class="badge bg-light bg-opacity-25 fs-6 fw-normal py-2 px-3" style="backdrop-filter: blur(10px); border: 1px solid rgba(255, 255, 255, 0.3);">
                <i class="bi bi-graph-up"></i> DSS Terintegrasi
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
                        <a class="nav-link d-flex align-items-center rounded-pill text-dark" 
                           href="{{ route('home') }}"
                           style="transition: all 0.3s ease;"
                           onmouseover="this.style.backgroundColor='#f8f9fa'; this.style.color='#0d6efd';"
                           onmouseout="this.style.backgroundColor='transparent'; this.style.color='#212529';">
                            <i class="bi bi-list-ul me-2"></i> Lowongan
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-flex align-items-center rounded-pill text-dark" 
                           href="{{ route('peta') }}"
                           style="transition: all 0.3s ease;"
                           onmouseover="this.style.backgroundColor='#f8f9fa'; this.style.color='#0d6efd';"
                           onmouseout="this.style.backgroundColor='transparent'; this.style.color='#212529';">
                            <i class="bi bi-map me-2"></i> Peta
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-flex align-items-center rounded-pill text-dark" 
                           href="{{ route('statistik') }}"
                           style="transition: all 0.3s ease;"
                           onmouseover="this.style.backgroundColor='#f8f9fa'; this.style.color='#0d6efd';"
                           onmouseout="this.style.backgroundColor='transparent'; this.style.color='#212529';">
                            <i class="bi bi-bar-chart-line me-2"></i> Statistik
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active d-flex align-items-center rounded-pill bg-white text-dark" 
                           aria-current="page" 
                           href="{{ route('panduan') }}"
                           style="transition: all 0.3s ease;">
                            <i class="bi bi-journal-bookmark me-2"></i> Panduan
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Regulatory Compliance Alert -->
<section class="py-3 bg-white">
    <div class="container">
        <div class="alert alert-primary mb-0">
            <div class="row align-items-center">
                <div class="col-auto">
                    <i class="bi bi-shield-check display-6 text-primary"></i>
                </div>
                <div class="col">
                    <h6 class="fw-bold mb-1">Dukungan Regulasi Sistem</h6>
                    <p class="mb-0 small">
                        Sistem ini mendukung implementasi <strong>PP No. 8 Tahun 2008</strong> tentang Pengendalian dan Evaluasi 
                        serta <strong>Perpres No. 39 Tahun 2023</strong> tentang Manajemen Risiko Pembangunan Nasional (MRPN)
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Content Section -->
<section class="py-5 bg-white">
    <div class="container">
        <div class="row">
            <!-- Left Column - Panduan -->
            <div class="col-lg-8">
                <!-- Panduan Penggunaan Portal -->
                <div class="card mb-4 border-0 shadow-lg">
                    <div class="card-body p-4">
                        <h4 class="fw-bold mb-3 text-dark">
                            <i class="bi bi-globe me-2 text-primary"></i>Panduan Penggunaan Portal
                        </h4>
                        
                        <!-- Langkah 1 -->
                        <div class="mb-3">
                            <div class="d-flex align-items-start">
                                <span class="badge bg-primary rounded-circle me-3 mt-1 d-flex align-items-center justify-content-center" style="width: 32px; height: 32px; flex-shrink: 0;">1</span>
                                <div>
                                    <h6 class="fw-bold text-dark mb-2">Masuk ke Portal</h6>
                                    <ul class="text-muted mb-0 ps-0" style="list-style: none;">
                                        <li class="mb-1">• Buka alamat <strong>website resmi Portal Kerja Murung Raya</strong></li>
                                        <li class="mb-0">• Kamu bisa <strong>menjelajahi lowongan kerja tanpa harus login</strong></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Langkah 2 -->
                        <div class="mb-3">
                            <div class="d-flex align-items-start">
                                <span class="badge bg-primary rounded-circle me-3 mt-1 d-flex align-items-center justify-content-center" style="width: 32px; height: 32px; flex-shrink: 0;">2</span>
                                <div>
                                    <h6 class="fw-bold text-dark mb-2">Menjelajahi Lowongan</h6>
                                    <ul class="text-muted mb-0 ps-0" style="list-style: none;">
                                        <li class="mb-1">• Di <strong>halaman utama</strong>, kamu bisa melihat daftar semua lowongan kerja yang tersedia</li>
                                        <li class="mb-1">• Gunakan <strong>kolom pencarian</strong> untuk menemukan pekerjaan tertentu</li>
                                        <li class="mb-1">• Gunakan <strong>filter Kecamatan</strong> untuk menampilkan lowongan berdasarkan lokasi</li>
                                        <li class="mb-1">• Gunakan <strong>filter Sektor</strong> untuk menampilkan lowongan berdasarkan Sektor Pekerjaan</li>
                                        <li class="mb-0">• Klik tombol <strong>"Lihat Detail"</strong> untuk membuka informasi lengkap tentang lowongan tersebut</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Langkah 3 -->
                        <div class="mb-3">
                            <div class="d-flex align-items-start">
                                <span class="badge bg-primary rounded-circle me-3 mt-1 d-flex align-items-center justify-content-center" style="width: 32px; height: 32px; flex-shrink: 0;">3</span>
                                <div>
                                    <h6 class="fw-bold text-dark mb-2">Menampilkan Lowongan dalam Mode Peta atau Daftar</h6>
                                    <ul class="text-muted mb-0 ps-0" style="list-style: none;">
                                        <li class="mb-1">• Klik tab <strong>"Peta"</strong> untuk melihat persebaran lowongan kerja secara geografis</li>
                                        <li class="mb-0">• Klik tab <strong>"Lowongan"</strong> untuk menampilkan lowongan dalam bentuk list (seperti tampilan kartu)</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Langkah 5: Peta Digital Ketenagakerjaan -->
                        <div class="mb-0">
                            <div class="d-flex align-items-start">
                                <span class="badge bg-primary rounded-circle me-3 mt-1 d-flex align-items-center justify-content-center" style="width: 32px; height: 32px; flex-shrink: 0;">4</span>
                                <div>
                                    <h6 class="fw-bold text-dark mb-2">Peta Digital Ketenagakerjaan</h6>
                                    <ul class="text-muted mb-0 ps-0" style="list-style: none;">
                                        <li class="mb-1">• <strong>Klik Kecamatan</strong> pada peta untuk melihat lowongan pekerjaan</li>
                                        <li class="mb-1">• Setiap kecamatan akan menampilkan <strong>daftar lowongan yang tersedia</strong></li>
                                        <li class="mb-1">• Gunakan <strong>zoom dan pan</strong> untuk menjelajahi wilayah tertentu</li>
                                        <li class="mb-0">• Peta menunjukkan <strong>persebaran geografis kesempatan kerja</strong> di Kabupaten Murung Raya</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Panduan Pelamaran Kerja -->
                <div class="card mb-4 border-0 shadow-lg">
                    <div class="card-body p-4">
                        <h4 class="fw-bold mb-3 text-dark">
                            <i class="bi bi-send-check me-2 text-success"></i>Panduan Pelamaran Kerja
                        </h4>
                        
                        <!-- Langkah 1 -->
                        <div class="mb-3">
                            <div class="d-flex align-items-start">
                                <span class="badge bg-success rounded-circle me-3 mt-1 d-flex align-items-center justify-content-center" style="width: 32px; height: 32px; flex-shrink: 0;">1</span>
                                <div>
                                    <h6 class="fw-bold text-dark mb-2">Pilih Lowongan yang Sesuai</h6>
                                    <ul class="text-muted mb-0 ps-0" style="list-style: none;">
                                        <li class="mb-1">• Pilih lowongan yang sesuai dengan <strong>kualifikasi dan sertifikasi</strong> Anda</li>
                                        <li class="mb-0">• Klik <strong>"Lihat Detail"</strong> untuk membaca deskripsi pekerjaan secara lengkap</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Langkah 2 -->
                        <div class="mb-3">
                            <div class="d-flex align-items-start">
                                <span class="badge bg-success rounded-circle me-3 mt-1 d-flex align-items-center justify-content-center" style="width: 32px; height: 32px; flex-shrink: 0;">2</span>
                                <div>
                                    <h6 class="fw-bold text-dark mb-2">Verifikasi Persyaratan</h6>
                                    <ul class="text-muted mb-0 ps-0" style="list-style: none;">
                                        <li class="mb-1">• Pastikan Anda memenuhi <strong>semua persyaratan</strong> yang diminta</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Langkah 3 -->
                        <div class="mb-3">
                            <div class="d-flex align-items-start">
                                <span class="badge bg-success rounded-circle me-3 mt-1 d-flex align-items-center justify-content-center" style="width: 32px; height: 32px; flex-shrink: 0;">3</span>
                                <div>
                                    <h6 class="fw-bold text-dark mb-2">Isi Formulir Lamaran</h6>
                                    <ul class="text-muted mb-0 ps-0" style="list-style: none;">
                                        <li class="mb-1">• Isi formulir lamaran dengan <strong>data yang valid dan benar</strong> sesuai KTP</li>
                                        <li class="mb-0">• Pastikan <strong>NIK dan data pribadi</strong> sesuai dengan kartu identitas</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Langkah 4 -->
                        <div class="mb-3">
                            <div class="d-flex align-items-start">
                                <span class="badge bg-success rounded-circle me-3 mt-1 d-flex align-items-center justify-content-center" style="width: 32px; height: 32px; flex-shrink: 0;">4</span>
                                <div>
                                    <h6 class="fw-bold text-dark mb-2">Siapkan Dokumen</h6>
                                    <ul class="text-muted mb-0 ps-0" style="list-style: none;">
                                        <li class="mb-1">• Siapkan <strong>CV dan dokumen sertifikasi</strong> dalam format PDF</li>
                                        <li class="mb-0">• Pastikan dokumen <strong>sudah siap sebelum mengupload</strong></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Langkah 5 -->
                        <div class="mb-0">
                            <div class="d-flex align-items-start">
                                <span class="badge bg-success rounded-circle me-3 mt-1 d-flex align-items-center justify-content-center" style="width: 32px; height: 32px; flex-shrink: 0;">5</span>
                                <div>
                                    <h6 class="fw-bold text-dark mb-2">Kirim Lamaran</h6>
                                    <ul class="text-muted mb-0 ps-0" style="list-style: none;">
                                        <li class="mb-1">• Klik <strong>"Kirim Lamaran"</strong> setelah semua data terisi</li>
                                        <li class="mb-0">• <strong>Tunggu konfirmasi</strong> dari perusahaan</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Panduan Statistik & Monitoring -->
                <div class="card mb-4 border-0 shadow-lg">
                    <div class="card-body p-4">
                        <h4 class="fw-bold mb-3 text-dark">
                            <i class="bi bi-bar-chart-line me-2 text-info"></i>Panduan Statistik & Monitoring
                        </h4>
                        
                        <!-- Filter Data Statistik -->
                        <div class="mb-4">
                            <div class="d-flex align-items-start">
                                <span class="badge bg-info rounded-circle me-3 mt-1 d-flex align-items-center justify-content-center" style="width: 32px; height: 32px; flex-shrink: 0;">1</span>
                                <div>
                                    <h6 class="fw-bold text-dark mb-2">Filter Data Statistik</h6>
                                    <p class="text-muted mb-2">Sesuaikan parameter untuk melihat data yang spesifik</p>
                                    <ul class="text-muted mb-0 ps-0" style="list-style: none;">
                                        <li class="mb-1">• <strong>Pilih Kecamatan</strong> - Filter berdasarkan wilayah administrasi</li>
                                        <li class="mb-1">• <strong>Pilih Pendidikan</strong> - Filter berdasarkan tingkat pendidikan</li>
                                        <li class="mb-1">• <strong>Pilih Sektor Pekerjaan</strong> - Filter berdasarkan bidang usaha</li>
                                        <li class="mb-1">• <strong>Pilih Kelompok Usia</strong> - Filter berdasarkan rentang usia</li>
                                        <li class="mb-0">• <strong>Semua</strong> - Tampilkan data tanpa filter</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Tren Ketenagakerjaan -->
                        <div class="mb-4">
                            <div class="d-flex align-items-start">
                                <span class="badge bg-info rounded-circle me-3 mt-1 d-flex align-items-center justify-content-center" style="width: 32px; height: 32px; flex-shrink: 0;">2</span>
                                <div>
                                    <h6 class="fw-bold text-dark mb-2">Analisis Tren Ketenagakerjaan</h6>
                                    <p class="text-muted mb-2">Perbandingan jumlah pekerja dan pengangguran per bulan</p>
                                    
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="card border-light mb-2">
                                                <div class="card-body py-2">
                                                    <h6 class="fw-bold text-dark mb-1">Tren Semester 2024</h6>
                                                    <p class="text-muted small mb-0">Monitoring: Pengangguran</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <ul class="text-muted mt-2 mb-0 ps-0" style="list-style: none;">
                                        <li class="mb-1">• <strong>Distribusi Angkatan Kerja</strong> berdasarkan usia dan gender</li>
                                        <li class="mb-1">• <strong>Distribusi Tenaga Kerja</strong> per sektor pekerjaan</li>
                                        <li class="mb-1">• <strong>Distribusi per Sektor</strong> - Jumlah berdasarkan</li>
                                        <li class="mb-0">• <strong>Distribusi Usia & Gender</strong> - Laki-laki & Perempuan</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Data Lengkap Angkatan Kerja -->
                        <div class="mb-0">
                            <div class="d-flex align-items-start">
                                <span class="badge bg-info rounded-circle me-3 mt-1 d-flex align-items-center justify-content-center" style="width: 32px; height: 32px; flex-shrink: 0;">3</span>
                                <div class="w-100">
                                    <h6 class="fw-bold text-dark mb-2">Data Lengkap Angkatan Kerja</h6>
                                    <p class="text-muted mb-3">Detail data ekonomi tenaga kerja dan pencari kerja</p>
                                    
                                    <!-- Search Box -->
                                    <div class="card bg-light border-0 mb-3">
                                        <div class="card-body py-2">
                                            <div class="input-group input-group-sm">
                                                <span class="input-group-text bg-white border-0">
                                                    <i class="bi bi-search text-muted"></i>
                                                </span>
                                                <input type="text" class="form-control border-0 bg-white" placeholder="Cari berdasarkan nama, pendidikan, atau sektor...">
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Table Example -->
                                    <div class="table-responsive">
                                        <table class="table table-sm table-bordered">
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
                                                    <td><strong>Anmal Fariri</strong></td>
                                                    <td>25</td>
                                                    <td>SMA</td>
                                                    <td>Perkebunan</td>
                                                    <td><span class="badge bg-success">Bekerja</span></td>
                                                    <td>Sumber Barito</td>
                                                    <td>15 Mar 2024</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Bri Nenhilifulu</strong></td>
                                                    <td>24</td>
                                                    <td>Diploma</td>
                                                    <td>Jasa</td>
                                                    <td><span class="badge bg-success">Bekerja</span></td>
                                                    <td>Muara Laung</td>
                                                    <td>14 Mar 2024</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Bud Santona</strong></td>
                                                    <td>32</td>
                                                    <td>Sarjana</td>
                                                    <td>Kesehatan</td>
                                                    <td><span class="badge bg-success">Bekerja</span></td>
                                                    <td>Permata Intan</td>
                                                    <td>13 Mar 2024</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <!-- Pagination -->
                                    <div class="d-flex justify-content-between align-items-center mt-3">
                                        <small class="text-muted">Menampilkan 8 dari 250 data</small>
                                        <nav>
                                            <ul class="pagination pagination-sm mb-0">
                                                <li class="page-item disabled">
                                                    <span class="page-link">Previous</span>
                                                </li>
                                                <li class="page-item active"><span class="page-link">1</span></li>
                                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                <li class="page-item">
                                                    <a class="page-link" href="#">Next</a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>

                                    <ul class="text-muted mt-3 mb-0 ps-0" style="list-style: none;">
                                        <li class="mb-1">• Gunakan <strong>fitur pencarian</strong> untuk menemukan data spesifik</li>
                                        <li class="mb-1">• <strong>Export data</strong> untuk analisis lebih lanjut</li>
                                        <li class="mb-0">• Manfaatkan <strong>filter multiple</strong> untuk kombinasi parameter</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Program Sertifikasi & Kartu HEBAT -->
                <div class="card mb-4 border-0 shadow-lg">
                    <div class="card-body p-4">
                        <h4 class="fw-bold mb-3 text-dark">
                            <i class="bi bi-award me-2 text-warning"></i>Program Sertifikasi & Kartu HEBAT
                        </h4>
                        
                        <div class="alert alert-info mb-4">
                            <i class="bi bi-info-circle me-2"></i>
                            <strong>Mendukung Visi RPJMD Murung Raya 2025-2029</strong> dalam akselerasi tenaga kerja tersertifikasi
                        </div>
                        
                        <!-- Langkah 1 -->
                        <div class="mb-3">
                            <div class="d-flex align-items-start">
                                <span class="badge bg-warning rounded-circle me-3 mt-1 d-flex align-items-center justify-content-center" style="width: 32px; height: 32px; flex-shrink: 0;">1</span>
                                <div>
                                    <h6 class="fw-bold text-dark mb-2">Daftar Program Pelatihan</h6>
                                    <ul class="text-muted mb-0 ps-0" style="list-style: none;">
                                        <li class="mb-0">• Akses melalui <strong>Dinas Tenaga Kerja dan Transmigrasi</strong></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Langkah 2 -->
                        <div class="mb-3">
                            <div class="d-flex align-items-start">
                                <span class="badge bg-warning rounded-circle me-3 mt-1 d-flex align-items-center justify-content-center" style="width: 32px; height: 32px; flex-shrink: 0;">2</span>
                                <div>
                                    <h6 class="fw-bold text-dark mb-2">Manfaatkan Kartu HEBAT</h6>
                                    <ul class="text-muted mb-0 ps-0" style="list-style: none;">
                                        <li class="mb-0">• Manfaatkan untuk <strong>akses pelatihan sertifikasi gratis</strong></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Langkah 3 -->
                        <div class="mb-3">
                            <div class="d-flex align-items-start">
                                <span class="badge bg-warning rounded-circle me-3 mt-1 d-flex align-items-center justify-content-center" style="width: 32px; height: 32px; flex-shrink: 0;">3</span>
                                <div>
                                    <h6 class="fw-bold text-dark mb-2">Ikuti Uji Kompetensi</h6>
                                    <ul class="text-muted mb-0 ps-0" style="list-style: none;">
                                        <li class="mb-0">• Ikuti uji kompetensi untuk mendapatkan <strong>sertifikasi BNSP</strong></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Langkah 4 -->
                        <div class="mb-3">
                            <div class="d-flex align-items-start">
                                <span class="badge bg-warning rounded-circle me-3 mt-1 d-flex align-items-center justify-content-center" style="width: 32px; height: 32px; flex-shrink: 0;">4</span>
                                <div>
                                    <h6 class="fw-bold text-dark mb-2">Dapatkan Sertifikasi Kompetensi</h6>
                                    <ul class="text-muted mb-0 ps-0" style="list-style: none;">
                                        <li class="mb-0">• Tingkatkan <strong>daya saing dengan sertifikasi resmi</strong></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Langkah 5 -->
                        <div class="mb-3">
                            <div class="d-flex align-items-start">
                                <span class="badge bg-warning rounded-circle me-3 mt-1 d-flex align-items-center justify-content-center" style="width: 32px; height: 32px; flex-shrink: 0;">5</span>
                                <div>
                                    <h6 class="fw-bold text-dark mb-2">Akses Penempatan Kerja</h6>
                                    <ul class="text-muted mb-0 ps-0" style="list-style: none;">
                                        <li class="mb-0">• Manfaatkan sertifikasi untuk <strong>akses lowongan prioritas</strong></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Langkah 6 -->
                        <div class="mb-0">
                            <div class="d-flex align-items-start">
                                <span class="badge bg-warning rounded-circle me-3 mt-1 d-flex align-items-center justify-content-center" style="width: 32px; height: 32px; flex-shrink: 0;">6</span>
                                <div>
                                    <h6 class="fw-bold text-dark mb-2">Monitoring & Evaluasi</h6>
                                    <ul class="text-muted mb-0 ps-0" style="list-style: none;">
                                        <li class="mb-0">• Sistem mendukung <strong>pengendalian perencanaan pembangunan daerah</strong> sesuai PP No. 8/2008</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Kontak Bantuan -->
                <div class="card border-0 shadow-lg">
                    <div class="card-body p-4">
                        <h4 class="fw-bold mb-3 text-dark">
                            <i class="bi bi-telephone me-2 text-primary"></i>Kontak Bantuan & Layanan
                        </h4>
                        <div class="text-muted">
                            <div class="mb-3">
                                <i class="bi bi-envelope me-2 text-primary"></i>
                                <strong>Email Resmi:</strong> info@murungrayakab.go.id
                            </div>
                            <div class="mb-3">
                                <i class="bi bi-phone me-2 text-success"></i>
                                <strong>Telepon Pusat:</strong> (0538) 21001
                            </div>
                            <div class="mb-3">
                                <i class="bi bi-printer me-2 text-secondary"></i>
                                <strong>Faximile:</strong> (0538) 21002
                            </div>
                            <div class="mb-3">
                                <i class="bi bi-geo-alt me-2 text-danger"></i>
                                <strong>Alamat Kantor:</strong> Jl. Jenderal Sudirman No. 88, Puruk Cahu, Kalimantan Tengah
                            </div>
                            <div class="mb-3">
                                <i class="bi bi-clock me-2 text-warning"></i>
                                <strong>Jam Operasional:</strong> Senin - Jumat, 08:00 - 16:00 WIB
                            </div>
                            <div class="mb-0">
                                <i class="bi bi-person me-2 text-info"></i>
                                <strong>Layanan Kartu HEBAT:</strong> Dinas Tenaga Kerja dan Transmigrasi Kabupaten Murung Raya
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column - Berita & Quick Links -->
            <div class="col-lg-4">
                <!-- Berita & Informasi -->
                <div class="card border-0 shadow-lg mb-4">
                    <div class="card-body p-4">
                        <h4 class="fw-bold mb-4 text-dark">
                            <i class="bi bi-newspaper me-2 text-info"></i>Berita & Informasi
                        </h4>
                        
                        <!-- Berita 1 -->
                        <div class="mb-4 pb-3 border-bottom">
                            <h6 class="fw-bold text-primary">Portal Ketenagakerjaan Resmi Diluncurkan</h6>
                            <p class="small text-muted mb-2">Pemerintah Kabupaten Murung Raya meluncurkan sistem informasi ketenagakerjaan terintegrasi...</p>
                            <small class="text-muted"><i class="bi bi-clock me-1"></i>2 hari yang lalu</small>
                        </div>

                        <!-- Berita 2 -->
                        <div class="mb-4 pb-3 border-bottom">
                            <h6 class="fw-bold text-primary">Program Kartu HEBAT 2024</h6>
                            <p class="small text-muted mb-2">Pendaftaran program pelatihan dan sertifikasi melalui Kartu HEBAT dibuka untuk 1.000 peserta...</p>
                            <small class="text-muted"><i class="bi bi-clock me-1"></i>5 hari yang lalu</small>
                        </div>

                        <!-- Berita 3 -->
                        <div class="mb-4 pb-3 border-bottom">
                            <h6 class="fw-bold text-primary">Rekrutmen Bersama Perusahaan Lokal</h6>
                            <p class="small text-muted mb-2">15 perusahaan membuka 250 lowongan kerja untuk warga Murung Raya...</p>
                            <small class="text-muted"><i class="bi bi-clock me-1"></i>1 minggu yang lalu</small>
                        </div>

                        <!-- Berita 4 -->
                        <div class="mb-4">
                            <h6 class="fw-bold text-primary">Sertifikasi BNSP Gratis</h6>
                            <p class="small text-muted mb-2">Dinas Tenaga Kerja membuka program sertifikasi kompetensi gratis untuk 5 bidang prioritas...</p>
                            <small class="text-muted"><i class="bi bi-clock me-1"></i>2 minggu yang lalu</small>
                        </div>

                        <!-- Tombol Lihat Semua Berita -->
                        <button class="btn btn-outline-primary w-100 mt-3">
                            <i class="bi bi-arrow-right me-2"></i>Lihat Semua Berita
                        </button>
                    </div>
                </div>

                <!-- Quick Links -->
                <div class="card border-0 shadow-lg">
                    <div class="card-body p-4">
                        <h5 class="fw-bold mb-3 text-dark">
                            <i class="bi bi-link-45deg me-2 text-success"></i>Tautan Cepat
                        </h5>
                        <div class="list-group list-group-flush">
                            <a href="{{ route('home') }}" class="list-group-item list-group-item-action border-0 px-0 py-2">
                                <i class="bi bi-search me-2 text-primary"></i>Cari Lowongan Kerja
                            </a>
                            <a href="{{ route('peta') }}" class="list-group-item list-group-item-action border-0 px-0 py-2">
                                <i class="bi bi-map me-2 text-danger"></i>Peta Analitik
                            </a>
                            <a href="{{ route('statistik') }}" class="list-group-item list-group-item-action border-0 px-0 py-2">
                                <i class="bi bi-bar-chart-line me-2 text-success"></i>Statistik
                            </a>
                            <a href="{{ route('panduan') }}" class="list-group-item list-group-item-action border-0 px-0 py-2">
                                <i class="bi bi-question-circle me-2 text-warning"></i>FAQ & Bantuan
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('layouts.footer')