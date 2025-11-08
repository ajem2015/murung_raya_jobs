@php use Illuminate\Support\Str; @endphp

@include('layouts.header')

<!-- Hero Section -->
<section class="text-white bg-dark" style="background-image: linear-gradient(rgba(148, 148, 247, 0.6), rgba(46, 51, 210, 0.6)), url('{{ asset('images/bg_murungraya.jpg') }}'); background-size: cover; background-position: center; background-repeat: no-repeat; padding-top: 6rem; padding-bottom: 6rem;">
    <div class="container text-center">
        <h1 class="display-4 fw-bold mb-3">
            Portal Kerja Murung Raya
        </h1>
        <p class="lead mb-4">
            Cari dan temukan lowongan pekerjaan di wilayah Kabupaten Murung Raya.
            <br>
            Bekerja tanpa harus jauh dari keluarga.
        </p>
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <form method="GET" action="{{ route('home') }}">
                    <div class="row g-3">
                        <div class="col-md-8">
                            <input type="text" name="search" class="form-control form-control-lg" placeholder="Cari pekerjaan, perusahaan..." value="{{ request('search') }}">
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

        <div class="d-flex justify-content-star gap-3 mt-4 col-lg-10 mx-auto">
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
                <ul class="nav nav-pills mb-0">
                    <li class="nav-item">
                        <a class="nav-link active d-flex align-items-center rounded-pill bg-white text-dark" aria-current="page" href="#">
                            <i class="bi bi-list-ul me-2"></i> Lowongan
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-flex align-items-center rounded-pill text-dark" href="#">
                            <i class="bi bi-map me-2"></i> Peta
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-flex align-items-center rounded-pill text-dark" href="#">
                            <i class="bi bi-bar-chart-line me-2"></i> Statistik
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-flex align-items-center rounded-pill text-dark" href="#">
                            <i class="bi bi-journal-bookmark me-2"></i> Panduan
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Job Listings Section -->
<div class="py-5">
    <div class="container">
        <h2 class="fw-bold mb-4">8 Lowongan Kerja</h2>
        <div class="row row-cols-1 row-cols-md-3 g-4" id="job-container">
            @php
                $jobs = [
                    ['title' => 'Warehouse Supervisor', 'company' => 'PT. KTH COAL MINING', 'location' => 'Sumber Barito', 'salary' => 'Rp. 7.500.000 - Rp. 9.000.000', 'days' => '2'],
                    ['title' => 'Admin Gudang', 'company' => 'PT. BERKAH MANDIRI', 'location' => 'Murara Laung', 'salary' => 'Rp. 4.500.000 - Rp. 6.000.000', 'days' => '1'],
                    ['title' => 'Driver', 'company' => 'CV. ANUGERAH JAYA', 'location' => 'Tanah Siang', 'salary' => 'Rp. 3.500.000 - Rp. 4.500.000', 'days' => '3'],
                    ['title' => 'Sales Marketing', 'company' => 'PT. MURUNG RAYA MANDIRI', 'location' => 'Permata Intan', 'salary' => 'Rp. 3.000.000 + Komisi', 'days' => '5'],
                    ['title' => 'Staff Administrasi', 'company' => 'PT. KAYU INDAH', 'location' => 'Barito Tuhup Raya', 'salary' => 'Rp. 4.000.000 - Rp. 5.000.000', 'days' => '7'],
                    ['title' => 'Teknisi Listrik', 'company' => 'PT. PLN PERSERO', 'location' => 'Laung Tuhup', 'salary' => 'Rp. 5.000.000 - Rp. 6.500.000', 'days' => '4']
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
                                Berlanggang jawab alas manajeman inventaris spore gatt dal khenak, pemelantaan sistem penguarasan, serta pengogrimalan penggunaan boku bara untuk menbukeng operacional lambang batu bara. Anda akan bekerja dengan tim yang solid.
                            </p>
                        </div>

                        <!-- Footer dengan tanggal dan tombol -->
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

        <div class="mt-4 text-center">
            <button id="load-more-btn" class="btn btn-primary btn-lg px-5">Lihat Lebih Banyak</button>
        </div>

        <script>
        let currentPage = 1;
        const jobsPerPage = 3;
        
        document.getElementById('load-more-btn').addEventListener('click', function() {
            const allMoreJobs = [
                { title: 'Operator Produksi', company: 'PT. SUMBER ALAM', location: 'Seribu Riam', salary: 'Rp. 3.800.000 - Rp. 4.800.000', days: '6' },
                { title: 'Security', company: 'PT. PAMASUKA', location: 'Uut Murung', salary: 'Rp. 3.200.000 - Rp. 4.000.000', days: '2' },
                { title: 'Customer Service', company: 'PT. BANK MURUNG', location: 'Tanah Siang Selatan', salary: 'Rp. 4.200.000 - Rp. 5.500.000', days: '3' },
                { title: 'Cleaning Service', company: 'CV. BERSIH INDAH', location: 'Laung Tuhup', salary: 'Rp. 2.800.000 - Rp. 3.500.000', days: '1' },
                { title: 'IT Support', company: 'PT. TEKNOLOGI MURUNG', location: 'Murara Laung', salary: 'Rp. 5.500.000 - Rp. 7.000.000', days: '4' },
                { title: 'Kasir', company: 'TOKO MAKMUR', location: 'Permata Intan', salary: 'Rp. 3.000.000 - Rp. 3.800.000', days: '2' }
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
                                <p class="card-text mb-1 small">
                                    <i class="bi bi-geo-alt-fill text-danger"></i> ${job.location}
                                </p>
                                <p class="card-text mb-2 small">
                                    <i class="bi bi-cash-stack text-success"></i> ${job.salary}
                                </p>
                            </div>

                            <div class="mb-3">
                                <p class="card-text small text-muted mb-0">
                                    Berlanggang jawab alas manajeman inventaris spore gatt dal khenak, pemelantaan sistem penguarasan, serta pengogrimalan penggunaan boku bara untuk menbukeng operacional lambang batu bara. Anda akan bekerja dengan tim yang solid.
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
</div>

@include('layouts.footer')