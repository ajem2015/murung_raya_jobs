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