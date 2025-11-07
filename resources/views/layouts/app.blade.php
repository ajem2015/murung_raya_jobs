<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Portal Lowongan Kerja Murung Raya')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">

    @stack('styles')
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-white shadow-sm">
    <div class="container-fluid">
        <a class="navbar-brand d-flex align-items-center" href="{{ url('/') }}" style="margin-left: 5rem;"> 
            <div class="bg-primary rounded d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                <span class="text-white fw-bold">SIK</span>
            </div>
            <div class="ms-3">
                <span class="fw-bold fs-5 d-block text-dark">
                    Sistem Informasi Ketenagakerjaan Murung Raya
                </span>
                <small class="d-block text-muted">
                    Sistem Informasi dan Portal Kerja
                </small>
            </div>
        </a>
        <ul class="navbar-nav" style="margin-right: 5rem;">
            <li class="nav-item">
                <a class="btn btn-outline-secondary" href="#"> 
                    <i class="bi bi-person"></i> Login Admin
                </a>
            </li>
        </ul>
    </div>
</nav>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show m-3" role="alert">
            <i class="bi bi-check-circle-fill"></i> {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger alert-dismissible fade show m-3" role="alert">
            <i class="bi bi-exclamation-triangle-fill"></i> {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    <main>
        @yield('content')
    </main>

<footer class="bg-light text-dark py-4 mt-5">
    <div class="container pt-4">
        <div class="row">
            <!-- Kolom 1: Pemerintah Kabupaten -->
            <div class="col-lg-4 mb-4 mb-lg-0">
                <div class="d-flex align-items-center mb-3">
                    <!-- Logo -->
                    <div class="me-3">
                        <img src="{{ asset('images/lambang_mura.png') }}" alt="Logo Kabupaten Murung Raya" class="img-fluid" style="width: 60px; height: 60px;">
                    </div>
                    <!-- Teks -->
                    <div>
                        <h5 class="fw-bold text-primary mb-0">PEMERINTAH KABUPATEN</h5>
                        <h5 class="fw-bold text-primary mb-0">MURUNG RAYA</h5>
                    </div>
                </div>
                <div class="mt-3">
                    <p class="mb-2">
                        <i class="bi bi-geo-alt-fill text-primary"></i>
                        Jl. Jenderal Sudirman No. 88, Puruk Cahu, Kalimantan Tengah
                    </p>
                    <p class="mb-1">
                        <i class="bi bi-telephone-fill text-primary"></i>
                        (0538) 21001
                    </p>
                    <p class="mb-1">
                        <i class="bi bi-printer-fill text-primary"></i>
                        (0538) 21002
                    </p>
                    <p class="mb-1">
                        <i class="bi bi-globe text-primary"></i>
                        <a href="https://murungrayakab.go.id" class="text-decoration-none">https://murungrayakab.go.id</a>
                    </p>
                    <p class="mb-0">
                        <i class="bi bi-envelope-fill text-primary"></i>
                        <a href="mailto:info@murungrayakab.go.id" class="text-decoration-none">info@murungrayakab.go.id</a>
                    </p>
                </div>
            </div>
            
            <!-- Kolom 2: Kecamatan -->
            <div class="col-lg-4 mb-4 mb-lg-0">
                <h5 class="fw-bold">Kecamatan</h5>
                <div class="row">
                    <div class="col-md-6">
                        <ul class="list-unstyled">
                            <li><i class="bi bi-geo-alt text-success"></i> Murara Laung</li>
                            <li><i class="bi bi-geo-alt text-success"></i> Laung Tuhup</li>
                            <li><i class="bi bi-geo-alt text-success"></i> Permata Intan</li>
                            <li><i class="bi bi-geo-alt text-success"></i> Tanah Siang</li>
                            <li><i class="bi bi-geo-alt text-success"></i> Tanah Siang Selatan</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul class="list-unstyled">
                            <li><i class="bi bi-geo-alt text-success"></i> Barito Tuhup Raya</li>
                            <li><i class="bi bi-geo-alt text-success"></i> Sumber Barito</li>
                            <li><i class="bi bi-geo-alt text-success"></i> Sungai Babuat</li>
                            <li><i class="bi bi-geo-alt text-success"></i> Seribu Riam</li>
                            <li><i class="bi bi-geo-alt text-success"></i> Uut Murung</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <!-- Kolom 3: Portal Kerja -->
            <div class="col-lg-4 mb-4 mb-lg-0">
                <h5 class="fw-bold">Portal Kerja Murung Raya</h5>
                <p class="mb-3">
                    Platform lowongan kerja untuk masyarakat Kabupaten Murung Raya, Kalimantan Tengah. 
                    Bekerja dekat rumah, keluarga tetap terjaga.
                </p>
            </div>
        </div>
    </div>
    
    <!-- Copyright Section -->
    <div class="border-top mt-4 pt-3 text-white" style="background-color: #798591ff;">
        <div class="container">
            <div class="text-center">
                <p class="mb-0">&copy; {{ date('Y') }} Pemerintah Kabupaten Murung Raya. All rights reserved.</p>
                <p class="mb-0 text-muted small text-white">Sistem Informasi Ketenagakerjaan dan Portal Lowongan Kerja Berbasis Kecamatan</p>
            </div>
        </div>
    </div>
</footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    @stack('scripts')
</body>
</html>