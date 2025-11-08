    @include('layouts.header')

    <!-- Hero Section -->
    <section class="text-white bg-dark" style="background-image: linear-gradient(rgba(148, 148, 247, 0.6), rgba(46, 51, 210, 0.6)), url('{{ asset('images/bg_murungraya.jpg') }}'); background-size: cover; background-position: center; background-repeat: no-repeat; padding-top: 6rem; padding-bottom: 6rem;">
        <div class="container text-center">
            <h1 class="display-4 fw-bold mb-3">
                Peta Analitik Ketenagakerjaan Kabupaten Murung Raya
            </h1>
            <p class="lead mb-4">
                Peta Interaktif Data Ketenagakerjaan Kabupaten Murung Raya
                <br>
                Analisis Spasial untuk Perencanaan SDM yang Lebih Efektif
            </p>

            <div class="d-flex justify-content-center gap-3 mt-4 flex-wrap">
                <span class="badge bg-light bg-opacity-25 fs-6 fw-normal py-2 px-3" style="backdrop-filter: blur(10px); border: 1px solid rgba(255, 255, 255, 0.3);">
                    <i class="bi bi-geo-alt-fill"></i> 10 Kecamatan
                </span>
                <span class="badge bg-light bg-opacity-25 fs-6 fw-normal py-2 px-3" style="backdrop-filter: blur(10px); border: 1px solid rgba(255, 255, 255, 0.3);">
                    <i class="bi bi-people-fill"></i> 5,247 Tenaga Kerja
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
                            <a class="nav-link active d-flex align-items-center rounded-pill bg-white text-dark" 
                            aria-current="page" 
                            href="{{ route('peta') }}"
                            style="transition: all 0.3s ease;">
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
                            <a class="nav-link d-flex align-items-center rounded-pill text-dark" 
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

    <!-- Map Section -->
    <section class="py-5 bg-white">
        <div class="container">
            <div class="row">
                <!-- Left Column - Map & Data -->
                <div class="col-lg-8">
                    <!-- Peta dengan SHP File -->
                    <div class="card shadow-lg mb-4">
                        <div class="card-header bg-white py-3">
                            <div class="d-flex justify-content-between align-items-center">
                                <h5 class="fw-bold mb-0 text-dark">
                                    <i class="bi bi-geo-alt-fill me-2 text-primary"></i>
                                    Peta Digital Ketenagakerjaan Kabupaten Murung Raya
                                </h5>
                                <div class="btn-group" role="group">
                                    <button type="button" class="btn btn-outline-primary btn-sm active" onclick="loadKecamatanSHP()">
                                        <i class="bi bi-border-all me-1"></i> Kecamatan
                                    </button>
                                    <button type="button" class="btn btn-outline-success btn-sm" onclick="loadJalanSHP()">
                                        <i class="bi bi-signpost me-1"></i> Jalan
                                    </button>
                                    <button type="button" class="btn btn-outline-info btn-sm" onclick="loadSungaiSHP()">
                                        <i class="bi bi-water me-1"></i> Sungai
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0 position-relative">
                            <div id="map" style="height: 500px;"></div>
                            <div id="mapLoading" class="position-absolute top-50 start-50 translate-middle text-center" style="display: none;">
                                <div class="spinner-border text-primary mb-2" role="status">
                                    <span class="visually-hidden">Loading SHP file...</span>
                                </div>
                                <div class="text-dark bg-light px-3 py-2 rounded">
                                    <small>Memuat data SHP Murung Raya...</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Lowongan Berdasarkan Kecamatan -->
                    <div class="card shadow-lg">
                        <div class="card-header bg-white py-3">
                            <h5 class="fw-bold mb-0 text-dark" id="lowonganTitle">
                                <i class="bi bi-briefcase-fill me-2 text-warning"></i>
                                Lowongan di Kecamatan <span class="text-primary">Puruk Cahu</span>
                            </h5>
                        </div>
                        <div class="card-body">
                            <div id="lowonganContainer">
                                <!-- Lowongan 1 -->
                                <div class="card mb-3 border shadow-sm">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col-md-8">
                                                <h6 class="fw-bold text-primary mb-1">Staff Administrasi</h6>
                                                <p class="text-muted small mb-2">
                                                    <i class="bi bi-building me-1"></i>PT. Sawit Makmur Jaya
                                                    <span class="mx-2">•</span>
                                                    <i class="bi bi-geo-alt me-1"></i>Puruk Cahu
                                                </p>
                                                <div class="d-flex flex-wrap gap-2 mb-2">
                                                    <span class="badge bg-light text-dark border">Full Time</span>
                                                    <span class="badge bg-light text-dark border">SMA/Sederajat</span>
                                                    <span class="badge bg-light text-dark border">Pengalaman 1 Tahun</span>
                                                </div>
                                                <p class="text-muted small mb-0">Mengelola administrasi kantor, surat-menyurat, dan dokumentasi perusahaan</p>
                                            </div>
                                            <div class="col-md-4 text-end">
                                                <div class="mb-2">
                                                    <span class="fw-bold text-success">Rp 3.2 - 4.0 Juta</span>
                                                </div>
                                                <!-- LINK JOB DETAIL -->
                                                <a href="{{ route('jobs.detail', 1) }}" class="btn btn-primary btn-sm">
                                                    <i class="bi bi-eye me-1"></i>Lihat Detail
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Lowongan 2 -->
                                <div class="card mb-3 border shadow-sm">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col-md-8">
                                                <h6 class="fw-bold text-primary mb-1">Operator Produksi</h6>
                                                <p class="text-muted small mb-2">
                                                    <i class="bi bi-building me-1"></i>PT. Kayu Indah Lestari
                                                    <span class="mx-2">•</span>
                                                    <i class="bi bi-geo-alt me-1"></i>Puruk Cahu
                                                </p>
                                                <div class="d-flex flex-wrap gap-2 mb-2">
                                                    <span class="badge bg-light text-dark border">Shift</span>
                                                    <span class="badge bg-light text-dark border">SMP/Sederajat</span>
                                                    <span class="badge bg-light text-dark border">Fresh Graduate</span>
                                                </div>
                                                <p class="text-muted small mb-0">Mengoperasikan mesin produksi, menjaga kualitas produk, dan memastikan target produksi</p>
                                            </div>
                                            <div class="col-md-4 text-end">
                                                <div class="mb-2">
                                                    <span class="fw-bold text-success">Rp 2.8 - 3.5 Juta</span>
                                                </div>
                                                <!-- LINK JOB DETAIL -->
                                                <a href="{{ route('jobs.detail', 2) }}" class="btn btn-primary btn-sm">
                                                    <i class="bi bi-eye me-1"></i>Lihat Detail
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Lowongan 3 -->
                                <div class="card mb-3 border shadow-sm">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col-md-8">
                                                <h6 class="fw-bold text-primary mb-1">Sales Marketing</h6>
                                                <p class="text-muted small mb-2">
                                                    <i class="bi bi-building me-1"></i>UD. Berkah Jaya
                                                    <span class="mx-2">•</span>
                                                    <i class="bi bi-geo-alt me-1"></i>Puruk Cahu
                                                </p>
                                                <div class="d-flex flex-wrap gap-2 mb-2">
                                                    <span class="badge bg-light text-dark border">Kontrak</span>
                                                    <span class="badge bg-light text-dark border">D3/S1</span>
                                                    <span class="badge bg-light text-dark border">Komunikasi Baik</span>
                                                </div>
                                                <p class="text-muted small mb-0">Menjual produk perusahaan, membangun relasi dengan customer, dan mencapai target penjualan</p>
                                            </div>
                                            <div class="col-md-4 text-end">
                                                <div class="mb-2">
                                                    <span class="fw-bold text-success">Rp 2.5 Juta + Komisi</span>
                                                </div>
                                                <!-- LINK JOB DETAIL -->
                                                <a href="{{ route('jobs.detail', 3) }}" class="btn btn-primary btn-sm">
                                                    <i class="bi bi-eye me-1"></i>Lihat Detail
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <!-- Pagination -->
                            <nav class="mt-4">
                                <ul class="pagination pagination-sm justify-content-center mb-0">
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
                    </div>
                </div>

                <!-- Right Column - Daftar Lowongan & Keterangan -->
                <div class="col-lg-4">
                    <!-- Keterangan Peta -->
                    <div class="card shadow-lg mb-4">
                        <div class="card-body">
                            <h5 class="fw-bold mb-3 text-dark">
                                <i class="bi bi-info-circle-fill me-2 text-primary"></i>
                                Keterangan Peta
                            </h5>
                            
                            <!-- Instruksi Interaksi -->
                            <div class="d-flex align-items-center mb-3 p-2 bg-light rounded">
                                <i class="bi bi-mouse-fill me-3 text-warning fs-5"></i>
                                <div>
                                    <strong class="d-block">Klik Kecamatan</strong>
                                    <small class="text-muted">Untuk melihat lowongan pekerjaan</small>
                                </div>
                            </div>

                            <!-- Statistik -->
                            <div class="row text-center">
                                <div class="col-6 border-end">
                                    <div class="p-2">
                                        <i class="bi bi-briefcase-fill text-success fs-4 mb-2"></i>
                                        <div class="fw-bold text-dark">47</div>
                                        <small class="text-muted">Total Lowongan</small>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="p-2">
                                        <i class="bi bi-map-fill text-info fs-4 mb-2"></i>
                                        <div class="fw-bold text-dark">10</div>
                                        <small class="text-muted">Kecamatan</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- JavaScript untuk Sistem Terintegrasi -->
    <script src="https://unpkg.com/shpjs@4.0.4/dist/shp.js"></script>
    <script>
    // Inisialisasi peta
    const map = L.map('map').setView([-0.6333, 114.3333], 10);

    // Base layer
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; OpenStreetMap contributors'
    }).addTo(map);

    // Variables
    let currentLayer = null;
    let shpData = null;
    let selectedKecamatan = null;

    // Data sample lowongan per kecamatan
    const lowonganData = {
        "Sumber Barito": [
            { posisi: "Operator Excavator", perusahaan: "PT Tambang Berkah", gaji: "Rp 4.5 - 6 Juta", tipe: "Full Time" },
            { posisi: "Admin Gudang", perusahaan: "CV Sumber Jaya", gaji: "Rp 3 - 4 Juta", tipe: "Full Time" },
            { posisi: "Driver Truk", perusahaan: "PT Logistik Murung", gaji: "Rp 4 - 5 Juta", tipe: "Full Time" }
        ],
        "Murara Laung": [
            { posisi: "Teknisi Alat Berat", perusahaan: "PT Pertambangan Nusantara", gaji: "Rp 5 - 7 Juta", tipe: "Full Time" },
            { posisi: "Security", perusahaan: "PT Keamanan Mandiri", gaji: "Rp 2.5 - 3.5 Juta", tipe: "Shift" }
        ],
        "Sungai Babuat": [
            { posisi: "Nelayan", perusahaan: "Koperasi Perikanan", gaji: "Rp 3 - 4 Juta", tipe: "Full Time" },
            { posisi: "Pengolah Hasil Laut", perusahaan: "UD Laut Sejahtera", gaji: "Rp 2.5 - 3 Juta", tipe: "Full Time" }
        ],
        "Laung Tuhup": [
            { posisi: "Petani Kelapa Sawit", perusahaan: "PT Perkebunan Sawit", gaji: "Rp 3 - 4 Juta", tipe: "Full Time" }
        ],
        "Permata Intan": [
            { posisi: "Operator Crusher", perusahaan: "PT Batu Permata", gaji: "Rp 4 - 5 Juta", tipe: "Full Time" },
            { posisi: "Quality Control", perusahaan: "PT Batu Permata", gaji: "Rp 3.5 - 4.5 Juta", tipe: "Full Time" }
        ]
    };

    // Fungsi utama untuk load SHP file Kecamatan
    async function loadKecamatanSHP() {
        showLoading(true);
        
        try {
            // Fallback ke file SHP local
            const shpUrl = '/shapefiles/murung_raya_kecamatan.zip';
            const geojson = await shp(shpUrl);
            
            shpData = geojson;
            
            // Clear existing layer
            if (currentLayer) {
                map.removeLayer(currentLayer);
            }
            
            // Create choropleth map
            currentLayer = L.geoJSON(geojson, {
                style: function(feature) {
                    const kecamatan = feature.properties.NAME || feature.properties.KECAMATAN;
                    const hasLowongan = lowonganData[kecamatan] && lowonganData[kecamatan].length > 0;
                    
                    return {
                        fillColor: hasLowongan ? '#28a745' : '#6c757d',
                        weight: 2,
                        opacity: 1,
                        color: 'white',
                        fillOpacity: 0.7
                    };
                },
                onEachFeature: function(feature, layer) {
                    const kecamatan = feature.properties.NAME || feature.properties.KECAMATAN;
                    const lowongan = lowonganData[kecamatan] || [];
                    
                    layer.bindPopup(`
                        <div class="p-2">
                            <h6 class="fw-bold text-primary mb-2">${kecamatan}</h6>
                            <p class="small mb-1"><strong>Lowongan Tersedia:</strong> ${lowongan.length} posisi</p>
                            <p class="small mb-0">Klik untuk melihat detail lowongan</p>
                        </div>
                    `);
                    
                    layer.on({
                        mouseover: function(e) {
                            e.target.setStyle({
                                weight: 3,
                                color: '#666',
                                fillOpacity: 0.9
                            });
                        },
                        mouseout: function(e) {
                            e.target.setStyle({
                                weight: 2,
                                color: 'white',
                                fillOpacity: 0.7
                            });
                        },
                        click: function(e) {
                            selectedKecamatan = kecamatan;
                            showLowonganByKecamatan(kecamatan);
                            updateKeteranganPeta();
                        }
                    });
                }
            }).addTo(map);
            
            map.fitBounds(currentLayer.getBounds());
            updateDaftarKecamatan();
            updateKeteranganPeta();
            
            showLoading(false);
            
        } catch (error) {
            showLoading(false);
            console.error('Error loading SHP file:', error);
            alert('Error memuat data SHP. Pastikan file tersedia di server.');
        }
    }

    // Fungsi untuk menampilkan lowongan berdasarkan kecamatan
    function showLowonganByKecamatan(kecamatan) {
        const lowonganContainer = document.getElementById('lowonganContainer');
        const lowonganTitle = document.getElementById('lowonganTitle');
        const lowongan = lowonganData[kecamatan] || [];
        
        lowonganTitle.innerHTML = `<i class="bi bi-briefcase me-2 text-warning"></i>Lowongan di ${kecamatan}`;
        
        if (lowongan.length > 0) {
            let html = `
                <div class="mb-3">
                    <span class="badge bg-success">${lowongan.length} Lowongan Tersedia</span>
                </div>
                <div class="table-responsive">
                    <table class="table table-sm table-hover">
                        <thead class="table-light">
                            <tr>
                                <th>Posisi</th>
                                <th>Perusahaan</th>
                                <th>Gaji</th>
                                <th>Tipe</th>
                            </tr>
                        </thead>
                        <tbody>
            `;
            
            lowongan.forEach(item => {
                html += `
                    <tr>
                        <td><strong>${item.posisi}</strong></td>
                        <td>${item.perusahaan}</td>
                        <td>${item.gaji}</td>
                        <td><span class="badge bg-primary">${item.tipe}</span></td>
                    </tr>
                `;
            });
            
            html += `
                        </tbody>
                    </table>
                </div>
            `;
            
            lowonganContainer.innerHTML = html;
        } else {
            lowonganContainer.innerHTML = `
                <div class="text-center text-muted py-4">
                    <i class="bi bi-briefcase display-4 text-muted mb-3"></i>
                    <p class="mb-0">Belum ada lowongan tersedia di ${kecamatan}</p>
                </div>
            `;
        }
    }

    // Fungsi untuk update daftar kecamatan
    function updateDaftarKecamatan() {
        const daftarKecamatan = document.getElementById('daftarKecamatan');
        let html = '';
        
        Object.keys(lowonganData).forEach(kecamatan => {
            const lowongan = lowonganData[kecamatan];
            const jumlah = lowongan ? lowongan.length : 0;
            
            html += `
                <div class="d-flex justify-content-between align-items-center py-2 border-bottom">
                    <div>
                        <h6 class="mb-1 fw-bold">${kecamatan}</h6>
                        <small class="text-muted">${jumlah} lowongan tersedia</small>
                    </div>
                    <button class="btn btn-outline-primary btn-sm" onclick="showLowonganByKecamatan('${kecamatan}')">
                        Lihat
                    </button>
                </div>
            `;
        });
        
        daftarKecamatan.innerHTML = html;
    }

    // Fungsi untuk update keterangan peta
    function updateKeteranganPeta() {
        const totalLowongan = Object.values(lowonganData).reduce((total, lowongan) => total + lowongan.length, 0);
        const kecamatanAktif = Object.keys(lowonganData).length;
        
        document.getElementById('totalLowongan').textContent = totalLowongan;
        document.getElementById('kecamatanAktif').textContent = `${kecamatanAktif}/10`;
    }

    // UI Functions
    function showLoading(show) {
        document.getElementById('mapLoading').style.display = show ? 'block' : 'none';
    }

    // Load data saat halaman dibuka
    document.addEventListener('DOMContentLoaded', function() {
        loadKecamatanSHP();
    });
    </script>

    <!-- Leaflet CSS & JS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

    @include('layouts.footer')