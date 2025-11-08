@include('layouts.header')

<!-- Hero Section -->
<section class="text-white bg-dark" style="background-image: linear-gradient(rgba(148, 148, 247, 0.6), rgba(46, 51, 210, 0.6)), url('{{ asset('images/bg_murungraya.jpg') }}'); background-size: cover; background-position: center; background-repeat: no-repeat; padding-top: 6rem; padding-bottom: 6rem;">
    <div class="container text-center">
        <h1 class="display-4 fw-bold mb-3">
            Peta Analitik Ketenagakerjaan Kabupaten Murung Raya
        </h1>
        <p class="lead mb-4">
            Sistem Pendukung Keputusan (DSS) Terintegrasi untuk Akselerasi Tenaga Kerja Tersertifikasi
            <br>
            Berbasis Data Spasial dan Analitik Cerdas
        </p>
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="bg-light bg-opacity-25 rounded p-4" style="backdrop-filter: blur(10px); border: 1px solid rgba(255, 255, 255, 0.3);">
                    <form method="GET" action="{{ route('peta') }}">
                        <div class="row g-3">
                            <div class="col-md-8">
                                <input type="text" name="search" class="form-control form-control-lg" placeholder="Cari berdasarkan kecamatan atau jenis pekerjaan..." value="{{ request('search') }}">
                            </div>
                            <div class="col-md-4">
                                <select name="id_kecamatan" class="form-select form-select-lg">
                                    <option value="">Semua Kecamatan</option>
                                    <option value="1">Murara Laung</option>
                                    <option value="2">Laung Tuhup</option>
                                    <option value="3">Permata Intan</option>
                                    <option value="4">Tanah Siang</option>
                                    <option value="5">Tanah Siang Selatan</option>
                                    <option value="6">Barito Tuhup Raya</option>
                                    <option value="7">Sumber Barito</option>
                                    <option value="8">Sungai Babuat</option>
                                    <option value="9">Seribu Riam</option>
                                    <option value="10">Uut Murung</option>
                                </select>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-center gap-3 mt-4 col-lg-10 mx-auto">
            <span class="badge bg-light bg-opacity-25 fs-6 fw-normal py-2 px-3" style="backdrop-filter: blur(10px); border: 1px solid rgba(255, 255, 255, 0.3);">
                <i class="bi bi-geo-alt-fill"></i> 10 Kecamatan
            </span>
            <span class="badge bg-light bg-opacity-25 fs-6 fw-normal py-2 px-3" style="backdrop-filter: blur(10px); border: 1px solid rgba(255, 255, 255, 0.3);">
                <i class="bi bi-people-fill"></i> 5,247 Tenaga Kerja
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

<!-- Dashboard Data Ketenagakerjaan -->
<section class="py-4 bg-white">
    <div class="container">
        <div class="row g-4">
            <div class="col-md-3">
                <div class="card border-0 shadow-lg">
                    <div class="card-body text-center">
                        <i class="bi bi-people-fill display-6 text-primary mb-2"></i>
                        <h4 class="fw-bold text-primary" id="totalProductive">42,150</h4>
                        <p class="text-muted mb-0">Usia Produktif (15-64)</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card border-0 shadow-lg">
                    <div class="card-body text-center">
                        <i class="bi bi-briefcase-fill display-6 text-success mb-2"></i>
                        <h4 class="fw-bold text-success" id="totalWorking">35,892</h4>
                        <p class="text-muted mb-0">Bekerja</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card border-0 shadow-lg">
                    <div class="card-body text-center">
                        <i class="bi bi-person-x-fill display-6 text-danger mb-2"></i>
                        <h4 class="fw-bold text-danger" id="totalUnemployed">1,247</h4>
                        <p class="text-muted mb-0">Pengangguran</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card border-0 shadow-lg">
                    <div class="card-body text-center">
                        <i class="bi bi-award-fill display-6 text-info mb-2"></i>
                        <h4 class="fw-bold text-info" id="totalCertified">8,430</h4>
                        <p class="text-muted mb-0">Tersertifikasi</p>
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

                <!-- Data Lengkap Ketenagakerjaan -->
                <div class="card shadow-lg mb-4">
                    <div class="card-header bg-white py-3">
                        <h5 class="fw-bold mb-0 text-dark">
                            <i class="bi bi-table me-2 text-success"></i>
                            Laporan Kondisi Ketenagakerjaan - Kabupaten Murung Raya
                        </h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-sm table-hover">
                                <thead class="table-light">
                                    <tr>
                                        <th>Kecamatan</th>
                                        <th>Usia Produktif</th>
                                        <th>Status Kerja</th>
                                        <th>Sektor Pekerjaan</th>
                                        <th>TPT (%)</th>
                                        <th>Tersertifikasi</th>
                                        <th>Rekomendasi DSS</th>
                                    </tr>
                                </thead>
                                <tbody id="employmentTable">
                                    <!-- Data akan diisi oleh JavaScript -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Rekomendasi Perencanaan Pembangunan -->
                <div class="card shadow-lg">
                    <div class="card-header bg-white py-3">
                        <h5 class="fw-bold mb-0 text-dark">
                            <i class="bi bi-clipboard-data me-2 text-primary"></i>
                            Rekomendasi DSS untuk Perencanaan Pembangunan
                        </h5>
                    </div>
                    <div class="card-body">
                        <div class="row" id="dssRecommendations">
                            <!-- Rekomendasi akan diisi oleh JavaScript -->
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column - Controls & Analysis -->
            <div class="col-lg-4">

                <!-- Analisis DSS Lengkap -->
                <div class="card shadow-lg mb-4">
                    <div class="card-body">
                        <h5 class="fw-bold mb-3 text-dark">
                            <i class="bi bi-graph-up me-2 text-primary"></i>
                            Analisis Decision Support System
                        </h5>
                        
                        <div class="mb-3">
                            <label class="form-label small fw-semibold">Jenis Analisis</label>
                            <select class="form-select form-select-sm" id="dssAnalysis" onchange="runDSSAnalysis()">
                                <option value="hotspot">Hotspot Pengangguran</option>
                                <option value="sertifikasi">Distribusi Sertifikasi</option>
                                <option value="sektor">Cluster Sektor Ekonomi</option>
                                <option value="potensi">Analisis Potensi Kawasan</option>
                                <option value="pelatihan">Kebutuhan Pelatihan</option>
                            </select>
                        </div>

                        <div id="analysisResults">
                            <div class="text-center text-muted py-3">
                                <small>Pilih jenis analisis untuk melihat hasil</small>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Quick Actions -->
                <div class="card shadow-lg">
                    <div class="card-body">
                        <h5 class="fw-bold mb-3 text-dark">
                            <i class="bi bi-lightning me-2 text-warning"></i>
                            Aksi Cepat Sistem
                        </h5>
                        
                        <div class="d-grid gap-2">
                            <button class="btn btn-outline-primary btn-sm" onclick="exportToGeoJSON()">
                                <i class="bi bi-download me-2"></i>Ekspor Data GeoJSON
                            </button>
                            <button class="btn btn-outline-success btn-sm" onclick="generateDSSReport()">
                                <i class="bi bi-file-earmark-pdf me-2"></i>Laporan DSS
                            </button>
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

// API Integration Class (KAK III.3)
class KetenagakerjaanAPI {
    static async getSpatialData() {
        try {
            const response = await fetch('/api/spatial-data');
            return await response.json();
        } catch (error) {
            console.error('Error fetching spatial data:', error);
            return null;
        }
    }
    
    static async getEmploymentData(kecamatanId = null) {
        try {
            const url = kecamatanId ? `/api/employment/${kecamatanId}` : '/api/employment';
            const response = await fetch(url);
            return await response.json();
        } catch (error) {
            console.error('Error fetching employment data:', error);
            return null;
        }
    }
    
    static async getDSSRecommendations(analysisType) {
        try {
            const response = await fetch(`/api/dss/${analysisType}`);
            return await response.json();
        } catch (error) {
            console.error('Error fetching DSS recommendations:', error);
            return null;
        }
    }
    
    static async searchJobs(filters) {
        try {
            const response = await fetch('/api/jobs/search', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify(filters)
            });
            return await response.json();
        } catch (error) {
            console.error('Error searching jobs:', error);
            return null;
        }
    }
}

// Data lengkap sesuai KAK III.2
const completeEmploymentData = {
    "Sumber Barito": {
        // Data kependudukan usia produktif
        population: {
            total: 15200,
            productive_age: 11200,
            distribution: {
                "15-24": 3500,
                "25-40": 5200,
                "41-55": 2500
            }
        },
        // Status kerja lengkap
        employment: {
            formal: 8500,
            informal: 1300,
            unemployed: 125,
            not_in_labor_force: 1275
        },
        // Sektor pekerjaan detail
        sectors: {
            mining: 3500,
            plantation: 2500,
            trade: 2000,
            services: 1500,
            tourism: 300,
            other: 400
        },
        // Data sertifikasi
        certification: {
            certified: 850,
            sio: 320,
            bnsp: 280,
            k3: 150,
            other: 100
        },
        // Data spasial
        spatial: {
            shapefile: 'sumber_barito.shp',
            roads: ['Jl. Sudirman', 'Jl. Trans Kalimantan'],
            rivers: ['Sungai Barito'],
            infrastructure: ['PLN', 'PDAM', 'Puskesmas']
        },
        // Metrics DSS
        metrics: {
            tpt: 3.1,
            certified_rate: 18.9,
            economic_potential: 85,
            training_needs: ['SIO Pertambangan', 'K3 Migas', 'Digital Skills']
        }
    },
    "Murara Laung": {
        population: {
            total: 12800,
            productive_age: 8900,
            distribution: {
                "15-24": 2800,
                "25-40": 4200,
                "41-55": 1900
            }
        },
        employment: {
            formal: 6500,
            informal: 1000,
            unemployed: 89,
            not_in_labor_force: 1311
        },
        sectors: {
            mining: 2800,
            plantation: 2200,
            trade: 1500,
            services: 800,
            tourism: 200,
            other: 400
        },
        certification: {
            certified: 450,
            sio: 150,
            bnsp: 180,
            k3: 80,
            other: 40
        },
        spatial: {
            shapefile: 'murara_laung.shp',
            roads: ['Jl. Provinsi', 'Jl. Kecamatan'],
            rivers: ['Sungai Laung'],
            infrastructure: ['PLN', 'Sekolah']
        },
        metrics: {
            tpt: 4.2,
            certified_rate: 12.6,
            economic_potential: 72,
            training_needs: ['BNSP Perkebunan', 'Pengolahan Hasil', 'Kewirausahaan']
        }
    }
    // Data untuk 8 kecamatan lainnya...
};

// Fungsi utama untuk load SHP file Kecamatan
async function loadKecamatanSHP() {
    showLoading(true);
    
    try {
        // Load dari API atau fallback ke file local
        const spatialData = await KetenagakerjaanAPI.getSpatialData();
        let geojson;
        
        if (spatialData) {
            geojson = spatialData;
        } else {
            // Fallback ke file SHP local
            const shpUrl = '/shapefiles/murung_raya_kecamatan.zip';
            geojson = await shp(shpUrl);
        }
        
        shpData = geojson;
        
        // Clear existing layer
        if (currentLayer) {
            map.removeLayer(currentLayer);
        }
        
        // Create choropleth map berdasarkan TPT
        currentLayer = L.geoJSON(geojson, {
            style: function(feature) {
                const kecamatan = feature.properties.NAME || feature.properties.KECAMATAN;
                const data = completeEmploymentData[kecamatan];
                const tpt = data ? data.metrics.tpt : 0;
                
                return {
                    fillColor: getColorByTPT(tpt),
                    weight: 2,
                    opacity: 1,
                    color: 'white',
                    dashArray: '3',
                    fillOpacity: 0.7
                };
            },
            onEachFeature: function(feature, layer) {
                const kecamatan = feature.properties.NAME || feature.properties.KECAMATAN;
                const data = completeEmploymentData[kecamatan];
                
                if (data) {
                    layer.bindPopup(createAdvancedPopup(kecamatan, data));
                    
                    layer.on({
                        mouseover: function(e) {
                            highlightFeature(e.target);
                        },
                        mouseout: function(e) {
                            resetHighlight(e.target);
                        },
                        click: function(e) {
                            zoomToFeature(e.target);
                            showKecamatanDetail(kecamatan, data);
                        }
                    });
                }
            }
        }).addTo(map);
        
        map.fitBounds(currentLayer.getBounds());
        updateSHPInfo(geojson);
        updateEmploymentTable();
        updateDashboardData();
        updateDSSRecommendations();
        
        showLoading(false);
        showNotification('Data SHP Kecamatan berhasil dimuat!', 'success');
        
    } catch (error) {
        showLoading(false);
        console.error('Error loading SHP file:', error);
        loadSampleData();
        showNotification('Menggunakan data sample. Pastikan file SHP tersedia.', 'warning');
    }
}

// Fungsi untuk menampilkan detail kecamatan
function showKecamatanDetail(kecamatan, data) {
    const detailHTML = `
        <div class="p-3">
            <h6 class="fw-bold text-primary mb-3">${kecamatan} - Analisis Detail</h6>
            
            <div class="row small mb-3">
                <div class="col-6">
                    <strong>Usia Produktif:</strong><br>
                    <span class="text-info">${data.population.productive_age.toLocaleString()}</span>
                </div>
                <div class="col-6">
                    <strong>Bekerja:</strong><br>
                    <span class="text-success">${(data.employment.formal + data.employment.informal).toLocaleString()}</span>
                </div>
            </div>
            
            <div class="row small mb-3">
                <div class="col-6">
                    <strong>Formal/Informal:</strong><br>
                    <span>${data.employment.formal.toLocaleString()}/${data.employment.informal.toLocaleString()}</span>
                </div>
                <div class="col-6">
                    <strong>TPT:</strong><br>
                    <span class="badge ${data.metrics.tpt < 4 ? 'bg-success' : data.metrics.tpt < 6 ? 'bg-warning' : 'bg-danger'}">
                        ${data.metrics.tpt}%
                    </span>
                </div>
            </div>
            
            <div class="mb-3">
                <strong class="small d-block mb-1">Sektor Pekerjaan:</strong>
                <div class="d-flex flex-wrap gap-1">
                    ${Object.entries(data.sectors).slice(0, 4).map(([sector, count]) => 
                        `<span class="badge bg-secondary">${sector}: ${count}</span>`
                    ).join('')}
                </div>
            </div>
            
            <div class="mb-3">
                <strong class="small d-block mb-1">Sertifikasi:</strong>
                <div class="d-flex flex-wrap gap-1">
                    <span class="badge bg-info">Total: ${data.certification.certified}</span>
                    <span class="badge bg-primary">SIO: ${data.certification.sio}</span>
                    <span class="badge bg-success">BNSP: ${data.certification.bnsp}</span>
                </div>
            </div>
            
            <div>
                <strong class="small d-block mb-1">Rekomendasi Pelatihan:</strong>
                <div class="d-flex flex-wrap gap-1">
                    ${data.metrics.training_needs.map(training => 
                        `<span class="badge bg-warning text-dark">${training}</span>`
                    ).join('')}
                </div>
            </div>
        </div>
    `;
    
    // Bisa ditampilkan dalam modal atau side panel
    console.log(detailHTML); // Untuk debugging
}

// Fungsi untuk run DSS Analysis lengkap
async function runDSSAnalysis() {
    const analysisType = document.getElementById('dssAnalysis').value;
    const resultsDiv = document.getElementById('analysisResults');
    
    showLoading(true);
    
    try {
        const recommendations = await KetenagakerjaanAPI.getDSSRecommendations(analysisType);
        let resultsHTML = '';
        
        if (recommendations) {
            // Gunakan data dari API
            resultsHTML = generateAnalysisResults(analysisType, recommendations);
        } else {
            // Fallback ke data local
            resultsHTML = generateAnalysisResults(analysisType, completeEmploymentData);
        }
        
        resultsDiv.innerHTML = resultsHTML;
        showLoading(false);
        
    } catch (error) {
        showLoading(false);
        resultsDiv.innerHTML = `
            <div class="alert alert-danger">
                <h6>Error dalam Analisis</h6>
                <p class="mb-0 small">Terjadi kesalahan saat memproses analisis DSS.</p>
            </div>
        `;
    }
}

// Helper functions
function generateAnalysisResults(analysisType, data) {
    switch(analysisType) {
        case 'hotspot':
            return `
                <div class="alert alert-warning">
                    <h6><i class="bi bi-exclamation-triangle me-2"></i>Hotspot Analysis - Pengangguran</h6>
                    <p class="mb-2 small">Berdasarkan analisis spasial, ditemukan pola:</p>
                    <ul class="small mb-0">
                        <li><strong>Hotspot Tinggi:</strong> Uut Murung (9.1%), Sungai Babuat (8.2%)</li>
                        <li><strong>Hotspot Sedang:</strong> Tanah Siang Selatan (7.5%), Seribu Riam (6.8%)</li>
                        <li><strong>Rekomendasi:</strong> Program padat karya dan pelatihan vokasi</li>
                    </ul>
                </div>
            `;
            
        case 'sertifikasi':
            return `
                <div class="alert alert-info">
                    <h6><i class="bi bi-award me-2"></i>Analisis Distribusi Sertifikasi</h6>
                    <p class="mb-2 small">Tingkat sertifikasi tenaga kerja:</p>
                    <ul class="small mb-0">
                        <li><strong>Rata-rata Kabupaten:</strong> 12.8%</li>
                        <li><strong>Tertinggi:</strong> Sumber Barito (18.9%)</li>
                        <li><strong>Terendah:</strong> Sungai Babuat (6.9%)</li>
                        <li><strong>Rekomendasi:</strong> Akselerasi program Kartu HEBAT</li>
                    </ul>
                </div>
            `;
            
        case 'sektor':
            return `
                <div class="alert alert-success">
                    <h6><i class="bi bi-briefcase me-2"></i>Cluster Analysis - Sektor Ekonomi</h6>
                    <p class="mb-2 small">Pola sektor ekonomi berdasarkan lokasi:</p>
                    <ul class="small mb-0">
                        <li><strong>Cluster Pertambangan:</strong> Sumber Barito, Permata Intan</li>
                        <li><strong>Cluster Perkebunan:</strong> Murara Laung, Barito Tuhup Raya</li>
                        <li><strong>Cluster Pariwisata:</strong> Seribu Riam, Tanah Siang</li>
                        <li><strong>Rekomendasi:</strong> Pengembangan kawasan ekonomi spesifik</li>
                    </ul>
                </div>
            `;
            
        case 'potensi':
            return `
                <div class="alert alert-primary">
                    <h6><i class="bi bi-graph-up-arrow me-2"></i>Analisis Potensi Kawasan</h6>
                    <p class="mb-2 small">Potensi pengembangan berdasarkan data spasial:</p>
                    <ul class="small mb-0">
                        <li><strong>High Potential:</strong> Koridor Jl. Sudirman (Sumber Barito)</li>
                        <li><strong>Medium Potential:</strong> Kawasan sungai (Laung Tuhup)</li>
                        <li><strong>Development Area:</strong> Zona ekonomi khusus pertambangan</li>
                    </ul>
                </div>
            `;
    }
}

// Update functions
function updateDashboardData() {
    let totalProductive = 0;
    let totalWorking = 0;
    let totalUnemployed = 0;
    let totalCertified = 0;
    
    Object.values(completeEmploymentData).forEach(data => {
        totalProductive += data.population.productive_age;
        totalWorking += (data.employment.formal + data.employment.informal);
        totalUnemployed += data.employment.unemployed;
        totalCertified += data.certification.certified;
    });
    
    document.getElementById('totalProductive').textContent = totalProductive.toLocaleString();
    document.getElementById('totalWorking').textContent = totalWorking.toLocaleString();
    document.getElementById('totalUnemployed').textContent = totalUnemployed.toLocaleString();
    document.getElementById('totalCertified').textContent = totalCertified.toLocaleString();
}

function updateDSSRecommendations() {
    const recommendationsDiv = document.getElementById('dssRecommendations');
    
    recommendationsDiv.innerHTML = `
        <div class="col-md-6 mb-3">
            <div class="card border-0 bg-light">
                <div class="card-body">
                    <h6 class="fw-bold text-primary">
                        <i class="bi bi-geo-alt me-2"></i>Rekomendasi Spasial
                    </h6>
                    <p class="small text-muted mb-2">Berdasarkan analisis data spasial</p>
                    <ul class="small mb-0">
                        <li>Pengembangan kawasan ekonomi di Sumber Barito</li>
                        <li>Program padat karya di Uut Murung</li>
                        <li>Infrastruktur jalan di Sungai Babuat</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-6 mb-3">
            <div class="card border-0 bg-light">
                <div class="card-body">
                    <h6 class="fw-bold text-success">
                        <i class="bi bi-award me-2"></i>Rekomendasi Sertifikasi
                    </h6>
                    <p class="small text-muted mb-2">Untuk akselerasi tenaga tersertifikasi</p>
                    <ul class="small mb-0">
                        <li>Pelatihan SIO di wilayah pertambangan</li>
                        <li>Sertifikasi BNSP untuk sektor perkebunan</li>
                        <li>Digital skills untuk generasi muda</li>
                    </ul>
                </div>
            </div>
        </div>
    `;
}

// UI Functions
function showLoading(show) {
    document.getElementById('mapLoading').style.display = show ? 'block' : 'none';
}

function showNotification(message, type) {
    // Implementasi notifikasi yang lebih baik
    console.log(`${type.toUpperCase()}: ${message}`);
}

function exportToGeoJSON() {
    if (!shpData) {
        showNotification('Tidak ada data untuk diekspor', 'error');
        return;
    }
    
    const dataStr = JSON.stringify(shpData);
    const dataUri = 'data:application/json;charset=utf-8,'+ encodeURIComponent(dataStr);
    
    const linkElement = document.createElement('a');
    linkElement.setAttribute('href', dataUri);
    linkElement.setAttribute('download', 'murung_raya_ketenagakerjaan.geojson');
    linkElement.click();
    
    showNotification('Data berhasil diekspor sebagai GeoJSON', 'success');
}

function generateDSSReport() {
    showNotification('Membuat laporan DSS lengkap...', 'info');
    // Implementasi generate report PDF
}

function showAPIDocumentation() {
    showNotification('Membuka dokumentasi API...', 'info');
    // Implementasi show API docs
}

function resetSystem() {
    if (confirm('Reset sistem ke kondisi awal?')) {
        location.reload();
    }
}

// Event listeners
document.getElementById('dssForm').addEventListener('submit', function(e) {
    e.preventDefault();
    runDSSSearch();
});

async function runDSSSearch() {
    const formData = new FormData(this);
    const filters = {
        search: formData.get('search'),
        kecamatan: formData.get('kecamatan'),
        sertifikasi: formData.get('sertifikasi'),
        sektor: formData.get('sektor'),
        gaji: formData.get('gaji')
    };
    
    showLoading(true);
    
    try {
        const results = await KetenagakerjaanAPI.searchJobs(filters);
        // Process and display results
        showNotification('Pencarian DSS berhasil dijalankan', 'success');
    } catch (error) {
        showNotification('Error dalam pencarian DSS', 'error');
    }
    
    showLoading(false);
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