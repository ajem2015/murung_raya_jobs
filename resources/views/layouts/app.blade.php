<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Portal Lowongan Kerja Murung Raya')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    @stack('styles')
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark shadow-sm" style="background-color: #ffffff;">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="{{ url('/') }}" style="text-decoration: none;">
                <img src="{{ asset('path/ke/logo.png') }}" width="40" height="40" class="flex-shrink-0" 
                    style="background-color: #fff; border-radius: 6px; padding: 4px;">
                <div class="ms-3">
                    <span class="fw-bold fs-5 d-block text-dark">
                        Portal Kerja Murung Raya
                    </span>
                    <small class="d-block text-muted">
                        Temukan pekerjaan dekat rumah Anda
                    </small>
                </div>
            </a>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    {{-- Ganti '#' dengan route login admin Anda, misal: route('admin.login') --}}
                    <a class="btn btn-light bg-white border-3 border-grey-200" href="#"> 
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

    <footer class="bg-white text-dark py-4 mt-5" style="border-top: 1px solid #7f7f7fff;">
        <div class="container text-center">
            <p class="mb-0">&copy; {{ date('Y') }} Kabupaten Murung Raya. All rights reserved.</p>
            <p class="mb-0 text-muted small">Portal Lowongan Kerja Berbasis Kecamatan</p>
        </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    @stack('scripts')
</body>

</html>
