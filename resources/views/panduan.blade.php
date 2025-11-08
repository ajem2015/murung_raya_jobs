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
                        <ol class="text-muted">
                            <li class="mb-2">Masukkan kata kunci pekerjaan di kolom pencarian di halaman utama</li>
                            <li class="mb-2">Pilih kecamatan untuk memfilter lowongan berdasarkan lokasi</li>
                            <li class="mb-2">Gunakan menu navigasi untuk berpindah antara Lowongan, Peta DSS, Statistik, dan Panduan</li>
                            <li class="mb-2">Klik "Lihat Detail" pada lowongan untuk informasi lengkap</li>
                            <li class="mb-2">Manfaatkan fitur Decision Support System (DSS) untuk analisis data ketenagakerjaan</li>
                            <li class="mb-2">Gunakan dashboard interaktif untuk monitoring dan evaluasi pembangunan ketenagakerjaan</li>
                        </ol>
                    </div>
                </div>

                <!-- Panduan Pelamaran Kerja -->
                <div class="card mb-4 border-0 shadow-lg">
                    <div class="card-body p-4">
                        <h4 class="fw-bold mb-3 text-dark">
                            <i class="bi bi-send-check me-2 text-success"></i>Panduan Pelamaran Kerja
                        </h4>
                        <ol class="text-muted">
                            <li class="mb-2">Pilih lowongan yang sesuai dengan kualifikasi dan sertifikasi Anda</li>
                            <li class="mb-2">Klik "Lihat Detail" untuk membaca deskripsi pekerjaan secara lengkap</li>
                            <li class="mb-2">Pastikan Anda memenuhi semua persyaratan yang diminta termasuk sertifikasi kompetensi</li>
                            <li class="mb-2">Isi formulir lamaran dengan data yang valid dan benar sesuai KTP</li>
                            <li class="mb-2">Siapkan CV dan dokumen sertifikasi dalam format PDF sebelum mengupload</li>
                            <li class="mb-2">Pastikan NIK dan data pribadi sesuai dengan kartu identitas</li>
                            <li class="mb-2">Klik "Kirim Lamaran" dan tunggu konfirmasi dari perusahaan</li>
                        </ol>
                    </div>
                </div>

                <!-- Program Sertifikasi & Kartu HEBAT -->
                <div class="card mb-4 border-0 shadow-lg">
                    <div class="card-body p-4">
                        <h4 class="fw-bold mb-3 text-dark">
                            <i class="bi bi-award me-2 text-warning"></i>Program Sertifikasi & Kartu HEBAT
                        </h4>
                        <div class="alert alert-info mb-3">
                            <i class="bi bi-info-circle me-2"></i>
                            <strong>Mendukung Visi RPJMD Murung Raya 2025-2029</strong> dalam akselerasi tenaga kerja tersertifikasi
                        </div>
                        <ol class="text-muted">
                            <li class="mb-2"><strong>Daftar Program Pelatihan:</strong> Akses melalui Dinas Tenaga Kerja dan Transmigrasi</li>
                            <li class="mb-2"><strong>Kartu HEBAT:</strong> Manfaatkan untuk akses pelatihan sertifikasi gratis</li>
                            <li class="mb-2"><strong>Uji Kompetensi:</strong> Ikuti uji kompetensi untuk mendapatkan sertifikasi BNSP</li>
                            <li class="mb-2"><strong>Sertifikasi Kompetensi:</strong> Tingkatkan daya saing dengan sertifikasi resmi</li>
                            <li class="mb-2"><strong>Penempatan Kerja:</strong> Manfaatkan sertifikasi untuk akses lowongan prioritas</li>
                            <li class="mb-2"><strong>Monitoring & Evaluasi:</strong> Sistem mendukung pengendalian perencanaan pembangunan daerah sesuai PP No. 8/2008</li>
                        </ol>
                    </div>
                </div>

                <!-- Panduan Peta -->
                <div class="card mb-4 border-0 shadow-lg">
                    <div class="card-body p-4">
                        <h4 class="fw-bold mb-3 text-dark">
                            <i class="bi bi-map me-2 text-danger"></i>Panduan Peta Ketenagakerjaan
                        </h4>
                        <ol class="text-muted">
                            <li class="mb-2">Akses menu "Peta" untuk melihat sebaran spasial lowongan kerja</li>
                            <li class="mb-2">Gunakan fitur <strong>Hotspot Analysis</strong> untuk identifikasi wilayah pengangguran</li>
                            <li class="mb-2">Manfaatkan <strong>Buffer Analysis</strong> untuk analisis aksesibilitas lowongan</li>
                            <li class="mb-2">Gunakan <strong>Choropleth Mapping</strong> untuk visualisasi data ketenagakerjaan</li>
                            <li class="mb-2">Klik marker pada peta untuk melihat analisis DSS setiap kecamatan</li>
                            <li class="mb-2">Manfaatkan data spasial untuk perencanaan pembangunan daerah berbasis evidence</li>
                        </ol>
                    </div>
                </div>

                <!-- TAMBAHKAN: FAQ Decision Support System -->
                <div class="card mb-4 border-0 shadow-lg">
                    <div class="card-body p-4">
                        <h4 class="fw-bold mb-3 text-dark">
                            <i class="bi bi-question-circle me-2 text-info"></i>FAQ Decision Support System (DSS)
                        </h4>
                        <div class="accordion" id="faqAccordion">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                        Apa itu Decision Support System (DSS)?
                                    </button>
                                </h2>
                                <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        DSS adalah sistem terintegrasi yang membantu pengambilan keputusan berbasis data spasial dan analitik ketenagakerjaan untuk perencanaan pembangunan daerah.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                        Bagaimana cara menggunakan fitur Hotspot Analysis?
                                    </button>
                                </h2>
                                <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        Akses menu Peta → Pilih "Hotspot Analysis" → Sistem akan menampilkan wilayah dengan konsentrasi pengangguran tertinggi.
                                    </div>
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
                        <ol class="text-muted">
                            <li class="mb-2">Akses menu "Statistik" untuk melihat data tren ketenagakerjaan</li>
                            <li class="mb-2">Monitor <strong>Tingkat Pengangguran Terbuka (TPT)</strong> per kecamatan</li>
                            <li class="mb-2">Analisis <strong>rasio ketenagakerjaan tersertifikasi</strong> di setiap wilayah</li>
                            <li class="mb-2">Gunakan data statistik untuk <strong>pengambilan keputusan berbasis bukti</strong></li>
                            <li class="mb-2">Manfaatkan dashboard untuk <strong>monitoring dan evaluasi</strong> program ketenagakerjaan</li>
                            <li class="mb-2">Data mendukung implementasi <strong>Manajemen Risiko Pembangunan Nasional (MRPN)</strong></li>
                        </ol>
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
                                <i class="bi bi-map me-2 text-danger"></i>Peta Analitik DSS
                            </a>
                            <a href="#" class="list-group-item list-group-item-action border-0 px-0 py-2">
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