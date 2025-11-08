@php use Illuminate\Support\Str; @endphp

@include('layouts.header')

<!-- Hero Section -->
<section class="text-white bg-dark" style="background-image: linear-gradient(rgba(148, 148, 247, 0.6), rgba(46, 51, 210, 0.6)), url('{{ asset('images/bg_murungraya.jpg') }}'); background-size: cover; background-position: center; background-repeat: no-repeat; padding-top: 6rem; padding-bottom: 6rem;">
    <div class="container text-center">
        <h1 class="display-4 fw-bold mb-3">
            Sistem Informasi Lowongan Pekerjaan Kabupaten Murung Raya
        </h1>
        <p class="lead mb-4">
            Cari dan temukan lowongan pekerjaan di wilayah Kabupaten Murung Raya.
            <br>
            Bekerja tanpa harus jauh dari keluarga.
        </p>
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="bg-light bg-opacity-25 rounded p-3" style="backdrop-filter: blur(10px); border: 1px solid rgba(255, 255, 255, 0.3);">
                    <form method="GET" action="{{ route('home') }}">
                        <div class="row g-2 align-items-center">
                            <!-- Search Input - Diperpanjang -->
                            <div class="col-md-6">
                                <input type="text" name="search" class="form-control form-control-lg border-0" placeholder="Cari pekerjaan, perusahaan..." value="{{ request('search') }}" style="background: rgba(255, 255, 255, 0.9);">
                            </div>
                            
                            <!-- Kecamatan -->
                            <div class="col-md-3">
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
                            
                            <!-- Sektor -->
                            <div class="col-md-2">
                                <select name="sektor" class="form-select form-select-lg">
                                    <option value="">Semua Sektor</option>
                                    <option value="pertambangan">Pertambangan</option>
                                    <option value="perkebunan">Perkebunan</option>
                                    <option value="perdagangan">Perdagangan</option>
                                    <option value="jasa">Jasa</option>
                                    <option value="pariwisata">Pariwisata</option>
                                </select>
                            </div>
                            
                            <!-- Button -->
                            <div class="col-md-1">
                                <button type="submit" class="btn btn-primary btn-lg w-100 border-0" style="background: rgba(13, 110, 253, 0.95);">
                                    <i class="bi bi-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-center gap-3 mt-4 flex-wrap">
            <span class="badge bg-light bg-opacity-25 fs-6 fw-normal py-2 px-3" style="backdrop-filter: blur(10px); border: 1px solid rgba(255, 255, 255, 0.3);">
                <i class="bi bi-briefcase-fill"></i> 18 Lowongan Tersedia
            </span>
            <span class="badge bg-light bg-opacity-25 fs-6 fw-normal py-2 px-3" style="backdrop-filter: blur(10px); border: 1px solid rgba(255, 255, 255, 0.3);">
                <i class="bi bi-geo-alt-fill"></i> 10 Kecamatan
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
                        <a class="nav-link active d-flex align-items-center rounded-pill bg-white text-dark" 
                           aria-current="page" 
                           href="{{ route('home') }}"
                           style="transition: all 0.3s ease;">
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

<!-- Career Opportunities Section -->
<section class="py-5 bg-white">
    <div class="container">
        <div class="card mb-4 border-0 shadow-lg">
            <div class="card-body p-4">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h3 class="fw-bold text-primary mb-3">
                            Temukan Peluang Karir Lainnya
                        </h3>
                        <p class="lead mb-4">
                            Jelajahi ribuan lowongan kerja dari berbagai perusahaan di Indonesia
                        </p>
                        <a href="https://www.jobstreet.co.id/" target="_blank" class="btn btn-primary btn-lg">
                            <i class="bi bi-search me-2"></i>Cari Lowongan di JobStreet
                        </a>
                    </div>
                    <div class="col-md-4 text-center">
                        <div class="bg-primary text-white rounded-circle p-4 d-inline-block">
                            <i class="bi bi-briefcase display-4""></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
</section>

<!-- Job Listings Section -->
<section class="py-5 bg-white">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="fw-bold text-primary mb-0">Lowongan Kerja Tersedia</h2>
            <div class="text-muted">
                <span class="badge bg-primary fs-6">18 Lowongan</span>
            </div>
        </div>
        
        <div class="row row-cols-1 row-cols-md-3 g-4" id="job-container">
            @php
                $jobs = [
                    [
                        'title' => 'Warehouse Supervisor', 
                        'company' => 'PT. KTH COAL MINING', 
                        'location' => 'Sumber Barito', 
                        'salary' => 'Rp. 7.500.000 - Rp. 9.000.000', 
                        'days' => '2',
                        'sektor' => 'pertambangan'
                    ],
                    [
                        'title' => 'Admin Gudang', 
                        'company' => 'PT. BERKAH MANDIRI', 
                        'location' => 'Murara Laung', 
                        'salary' => 'Rp. 4.500.000 - Rp. 6.000.000', 
                        'days' => '1',
                        'sektor' => 'perdagangan'
                    ],
                    [
                        'title' => 'Driver', 
                        'company' => 'CV. ANUGERAH JAYA', 
                        'location' => 'Tanah Siang', 
                        'salary' => 'Rp. 3.500.000 - Rp. 4.500.000', 
                        'days' => '3',
                        'sektor' => 'jasa'
                    ],
                    [
                        'title' => 'Sales Marketing', 
                        'company' => 'PT. MURUNG RAYA MANDIRI', 
                        'location' => 'Permata Intan', 
                        'salary' => 'Rp. 3.000.000 + Komisi', 
                        'days' => '5',
                        'sektor' => 'perdagangan'
                        // Tanpa sertifikasi khusus
                    ],
                    [
                        'title' => 'Staff Administrasi', 
                        'company' => 'PT. KAYU INDAH', 
                        'location' => 'Barito Tuhup Raya', 
                        'salary' => 'Rp. 4.000.000 - Rp. 5.000.000', 
                        'days' => '7',
                        'sektor' => 'perkebunan'
                    ],
                    [
                        'title' => 'Teknisi Listrik', 
                        'company' => 'PT. PLN PERSERO', 
                        'location' => 'Laung Tuhup', 
                        'salary' => 'Rp. 5.000.000 - Rp. 6.500.000', 
                        'days' => '4',
                        'sektor' => 'jasa'
                    ]
                ];
            @endphp

            @foreach($jobs as $job)
            <div class="col">
                <div class="card border-0 shadow-lg h-100">
                    <div class="card-body">
                        <!-- Bagian atas: nama pekerjaan, PT, dan logo dalam satu baris -->
                        <div class="d-flex justify-content-between align-items-start mb-2">
                            <div>
                                <h5 class="card-title fw-bold mb-0">{{ $job['title'] }}</h5>
                                <p class="card-text text-muted mb-0">{{ $job['company'] }}</p>
                            </div>
                            <!-- Logo di kanan -->
                            <div class="flex-shrink-0">
                                <img src="{{ asset('images/logo-perusahaan2.jpg') }}" alt="Logo Perusahaan" class="rounded-circle" width="60" height="60">
                            </div>
                        </div>

                        <!-- Sektor -->
                        <div class="mb-2">
                            <span class="badge bg-secondary mb-2">
                                <i class="bi bi-briefcase me-1"></i>{{ ucfirst($job['sektor']) }}
                            </span>
                        </div>

                        <!-- Lokasi dan gaji -->
                        <div class="mb-2">
                            <p class="card-text mb-1 small">
                                <i class="bi bi-geo-alt-fill text-danger"></i> {{ $job['location'] }}
                            </p>
                            <p class="card-text mb-2 small">
                                <i class="bi bi-cash-stack text-success"></i> {{ $job['salary'] }}
                            </p>
                        </div>

                        <!-- Deskripsi pekerjaan -->
                        <div class="mb-3">
                            <p class="card-text small text-muted mb-0">
                                Bertanggung jawab dalam manajemen inventaris, pemeliharaan sistem pengawasan, serta pengoptimalan penggunaan sumber daya untuk mendukung operasional perusahaan. Anda akan bekerja dengan tim yang solid dan profesional.
                            </p>
                        </div>

                        <!-- Footer -->
                        <div class="d-flex justify-content-between align-items-center">
                            <small class="text-muted">
                                <i class="bi bi-clock text-warning"></i> {{ $job['days'] }} hari yang lalu
                            </small>
                            <a href="{{ route('jobs.detail', ['id' => $loop->iteration]) }}" class="btn btn-primary btn-sm rounded-pill">Lihat Detail</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="mt-5 text-center">
            <button id="load-more-btn" class="btn btn-primary btn-lg px-5">
                <i class="bi bi-arrow-down-circle me-2"></i>Muat Lebih Banyak Lowongan
            </button>
        </div>

        <script>
        let currentPage = 1;
        const jobsPerPage = 3;
        
        document.getElementById('load-more-btn').addEventListener('click', function() {
            const allMoreJobs = [
                { 
                    title: 'Operator Produksi', 
                    company: 'PT. SUMBER ALAM', 
                    location: 'Seribu Riam', 
                    salary: 'Rp. 3.800.000 - Rp. 4.800.000', 
                    days: '6',
                    sektor: 'pertambangan'
                },
                { 
                    title: 'Security', 
                    company: 'PT. PAMASUKA', 
                    location: 'Uut Murung', 
                    salary: 'Rp. 3.200.000 - Rp. 4.000.000', 
                    days: '2',
                    sektor: 'jasa'
                },
                { 
                    title: 'Customer Service', 
                    company: 'PT. BANK MURUNG', 
                    location: 'Tanah Siang Selatan', 
                    salary: 'Rp. 4.200.000 - Rp. 5.500.000', 
                    days: '3',
                    sektor: 'jasa'
                },
                { 
                    title: 'Cleaning Service', 
                    company: 'CV. BERSIH INDAH', 
                    location: 'Laung Tuhup', 
                    salary: 'Rp. 2.800.000 - Rp. 3.500.000', 
                    days: '1',
                    sektor: 'jasa'
                },
                { 
                    title: 'IT Support', 
                    company: 'PT. TEKNOLOGI MURUNG', 
                    location: 'Murara Laung', 
                    salary: 'Rp. 5.500.000 - Rp. 7.000.000', 
                    days: '4',
                    sektor: 'jasa'
                },
                { 
                    title: 'Kasir', 
                    company: 'TOKO MAKMUR', 
                    location: 'Permata Intan', 
                    salary: 'Rp. 3.000.000 - Rp. 3.800.000', 
                    days: '2',
                    sektor: 'perdagangan'
                }
            ];

            const container = document.getElementById('job-container');
            
            const startIndex = (currentPage - 1) * jobsPerPage;
            const endIndex = startIndex + jobsPerPage;
            const jobsToShow = allMoreJobs.slice(startIndex, endIndex);
            
            jobsToShow.forEach((job, index) => {
                const col = document.createElement('div');
                col.className = 'col';
                
                // Hitung ID untuk job load more (mulai dari 7 karena 6 job pertama)
                const jobId = 6 + (currentPage - 1) * jobsPerPage + index + 1;
                
                // Buat badge sertifikasi jika ada
                const sertifikasiBadge = job.sertifikasi ? 
                    `<span class="badge bg-warning text-dark mb-2">
                        <i class="bi bi-award me-1"></i>${job.sertifikasi}
                    </span>` : '';
                
                col.innerHTML = `
                    <div class="card border-0 shadow-lg h-100">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-start mb-2">
                                <div>
                                    <h5 class="card-title fw-bold mb-0">${job.title}</h5>
                                    <p class="card-text text-muted mb-0">${job.company}</p>
                                </div>
                                <div class="flex-shrink-0">
                                    <img src="{{ asset('images/logo-perusahaan2.jpg') }}" alt="Logo Perusahaan" class="rounded-circle" width="60" height="60">
                                </div>
                            </div>

                            <div class="mb-2">
                                ${sertifikasiBadge}
                                <span class="badge bg-secondary mb-2">
                                    <i class="bi bi-briefcase me-1"></i>${job.sektor.charAt(0).toUpperCase() + job.sektor.slice(1)}
                                </span>
                            </div>

                            <div class="mb-2">
                                <p class="card-text mb-1 small">
                                    <i class="bi bi-geo-alt-fill text-danger"></i> ${job.location}
                                </p>
                                <p class="card-text mb-2 small">
                                    <i class="bi bi-cash-stack text-success"></i> ${job.salary}
                                </p>
                            </div>

                            <div class="mb-3">
                                <p class="card-text small text-muted mb-0">
                                    Bertanggung jawab dalam manajemen inventaris, pemeliharaan sistem pengawasan, serta pengoptimalan penggunaan sumber daya untuk mendukung operasional perusahaan. Anda akan bekerja dengan tim yang solid dan profesional.
                                </p>
                            </div>

                            <div class="d-flex justify-content-between align-items-center">
                                <small class="text-muted">
                                    <i class="bi bi-clock text-warning"></i> ${job.days} hari yang lalu
                                </small>
                                <a href="/jobs/${jobId}" class="btn btn-primary btn-sm rounded-pill">Lihat Detail</a>
                            </div>
                        </div>
                    </div>
                `;
                container.appendChild(col);
            });

            currentPage++;
            
            const totalPages = Math.ceil(allMoreJobs.length / jobsPerPage);
            if (currentPage > totalPages) {
                this.style.display = 'none';
            }
        });
        </script>
    </div>
</section>

<!-- Program Kartu HEBAT -->
<section class="py-5 bg-white">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 text-center">
                <h3 class="fw-bold text-primary mb-3">
                    <i class="bi bi-award-fill me-2"></i>Program Kartu HEBAT
                </h3>
                <p class="lead mb-4">
                    Akselerasi Tenaga Kerja Tersertifikasi dalam Mendukung Visi RPJMD Murung Raya 2025-2029
                </p>
            </div>
        </div>

        <div class="row">
            <!-- Card 1: Informasi Program -->
            <div class="col-md-4 mb-4">
                <div class="card h-100 border-0 shadow-lg">
                    <div class="card-body text-center p-4">
                        <div class="bg-primary text-white rounded-circle p-4 d-inline-block mb-3">
                            <i class="bi bi-award display-4"></i>
                        </div>
                        <h5 class="card-title fw-bold text-primary">Sertifikasi Kompetensi</h5>
                        <p class="card-text text-muted">
                            Dapatkan sertifikasi resmi BNSP yang diakui secara nasional untuk meningkatkan daya saing di dunia kerja.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Card 2: Benefit Program -->
            <div class="col-md-4 mb-4">
                <div class="card h-100 border-0 shadow-lg">
                    <div class="card-body text-center p-4">
                        <div class="bg-success text-white rounded-circle p-4 d-inline-block mb-3">
                            <i class="bi bi-check-circle display-4"></i>
                        </div>
                        <h5 class="card-title fw-bold text-success">Fasilitas Gratis</h5>
                        <p class="card-text text-muted">
                            Pelatihan dan sertifikasi kompetensi tanpa biaya, didukung penuh oleh Pemerintah Kabupaten Murung Raya.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Card 3: Dukungan -->
            <div class="col-md-4 mb-4">
                <div class="card h-100 border-0 shadow-lg">
                    <div class="card-body text-center p-4">
                        <div class="bg-warning text-white rounded-circle p-4 d-inline-block mb-3">
                            <i class="bi bi-people display-4"></i>
                        </div>
                        <h5 class="card-title fw-bold text-warning">Dukungan OPD</h5>
                        <p class="card-text text-muted">
                            Pendampingan lengkap dari Dinas Tenaga Kerja dan akses prioritas ke lowongan pekerjaan tersertifikasi.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Detail Fitur -->
        <div class="row mt-4">
            <div class="col-12">
                <div class="card border-0 shadow-lg">
                    <div class="card-body p-4">
                        <h3 class="fw-bold text-primary mb-4">Keunggulan Program Kartu HEBAT</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="d-flex align-items-center mb-3">
                                    <i class="bi bi-check-circle-fill text-success me-3 fs-5"></i>
                                    <div>
                                        <h5 class="fw-bold mb-1">Pelatihan Gratis</h5>
                                        <p class="text-muted mb-0 small">Sertifikasi kompetensi tanpa biaya</p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center mb-3">
                                    <i class="bi bi-check-circle-fill text-success me-3 fs-5"></i>
                                    <div>
                                        <h5 class="fw-bold mb-1">BNSP Terakreditasi</h5>
                                        <p class="text-muted mb-0 small">Sertifikasi nasional yang diakui</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-flex align-items-center mb-3">
                                    <i class="bi bi-check-circle-fill text-success me-3 fs-5"></i>
                                    <div>
                                        <h5 class="fw-bold mb-1">Prioritas Lowongan</h5>
                                        <p class="text-muted mb-0 small">Akses ke lowongan tersertifikasi</p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center mb-3">
                                    <i class="bi bi-check-circle-fill text-success me-3 fs-5"></i>
                                    <div>
                                        <h5 class="fw-bold mb-1">Dukungan OPD</h5>
                                        <p class="text-muted mb-0 small">Pendampingan dari Dinas Tenaga Kerja</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center mt-4">
                            <a href="{{ route('panduan') }}#kartu-hebat" class="btn btn-primary btn-lg">
                                <i class="bi bi-info-circle me-2"></i>Pelajari Selengkapnya
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('layouts.footer')