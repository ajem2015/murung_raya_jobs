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
                <span class="text-white fw-bold">PK</span>
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
        <ul class="navbar-nav" style="margin-right: 5rem;"> <!-- me-4 untuk geser kiri -->
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
            <div class="col-lg-4 mb-4 mb-lg-0">
                <h5 class="fw-bold">Portal Kerja Murung Raya</h5>
                <p>
                    Platform lowongan kerja untuk masyarakat Kabupaten Murung Raya, Kalimantan Tengah. 
                    Bekerja dekat rumah, keluarga tetap terjaga.
                </p>
            </div>
            <div class="col-lg-4 mb-4 mb-lg-0">
                <h5 class="fw-bold">Kecamatan</h5>
                <div class="row">
                    <div class="col-md-6">
                        <ul class="list-unstyled">
                            <li>Murara Laung</li>
                            <li>Laung Tuhup</li>
                            <li>Permata Intan</li>
                            <li>Tanah Siang</li>
                            <li>Tanah Siang Selatan</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul class="list-unstyled">
                            <li>Barito Tuhup Raya</li>
                            <li>Sumber Barito</li>
                            <li>Sungai Babuat</li>
                            <li>Seribu Riam</li>
                            <li>Uut Murung</li>
                        </ul>
                    </div>
                </div>
            </div>  
            <div class="col-lg-4 mb-4 mb-lg-0">
                <h5 class="fw-bold">Informasi</h5>
                <p>
                    Data sebeveganojarati niederla oleh Dinus Tengig Kerja Kecamatan Murung Raya.
                </p>
            </div>
        </div>
    </div>
    
    <div class="border-top mt-4 pt-3">
        <div class="container">
            <div class="text-center">
                <p class="mb-0">&copy; {{ date('Y') }} Kabupaten Murung Raya. All rights reserved.</p>
                <p class="mb-0 text-muted small">Portal Lowongan Kerja Berbasis Kecamatan</p>
            </div>
        </div>
    </div>
</footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    @stack('scripts')
</body>

</html>