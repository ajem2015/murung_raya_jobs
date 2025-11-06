@extends('layouts.app')

@section('title', 'Beranda - Portal Lowongan Kerja Murung Raya')

@section('content')
    <!-- Hero Section -->
    <section class="hero-section text-white" style="background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('https://images.unsplash.com/photo-1519010419232-98665f5662c1?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NTYyMDF8MHwxfHNlYXJjaHwxfHxsYWtlJTIwbXVydW5nJTIwcmF5YXxlbnwwfHx8fDE3MzEwMDk0OTd8MA&ixlib=rb-4.0.3&q=80&w=1920'); background-size: cover; background-position: center; padding-top: 6rem; padding-bottom: 6rem;">
        <div class="container text-center">
            <h1 class="display-4 fw-bold mb-3">
                Kerja Dekat, Hidup Sejahtera
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
                                    @foreach($kecamatans as $kecamatan)
                                        <option value="{{ $kecamatan->id_kecamatan }}" {{ request('id_kecamatan') == $kecamatan->id_kecamatan ? 'selected' : '' }}>
                                            {{ $kecamatan->Nama_kecamatan }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="d-flex justify-content-center gap-3 mt-4">
                <span class="badge bg-light text-dark fs-6 fw-normal py-2 px-3">
                    <i class="bi bi-briefcase-fill"></i> 64 Lowongan Tersedia
                </span>
                <span class="badge bg-light text-dark fs-6 fw-normal py-2 px-3">
                    <i class="bi bi-geo-alt-fill"></i> 10 Kecamatan
                </span>
            </div>
        </div>
    </section>

    <!-- Navigation Bar -->
    <section class="py-3" style="background-color: #f4f6f9;">
        <div class="container">
            <ul class="nav nav-pills justify-content-center mb-3">
                <li class="nav-item">
                    <a class="nav-link active rounded-pill" aria-current="page" href="#">
                        <i class="bi bi-list-ul"></i> Lowongan
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link rounded-pill" href="#">
                        <i class="bi bi-map"></i> Peta
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link rounded-pill" href="#">
                        <i class="bi bi-bar-chart-line"></i> Statistik
                    </a>
                </li>
            </ul>
        </div>
    </section>

    <!-- Job Listings -->
    <section class="py-5" style="background-color: #f4f6f9;">
        <div class="container">
            <h2 class="fw-bold mb-4">
                {{ $pekerjaans->total() }} Lowongan Kerja
            </h2>

            @if($pekerjaans->count() > 0)
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    @foreach($pekerjaans as $pekerjaan)
                        <div class="col">
                            <div class="card border-0 shadow-sm h-100">
                                <!-- Card Image -->
                                <div class="card-img-top text-center py-4">
                                    <img src="https://via.placeholder.com/60?text=KTH" alt="Logo Perusahaan" class="rounded-circle" width="60" height="60">
                                </div>
                                <!-- Card Body -->
                                <div class="card-body text-center">
                                    <h5 class="card-title fw-bold mb-2">{{ $pekerjaan->Judul_pekerjaan }}</h5>
                                    <p class="card-text text-muted mb-2">{{ $pekerjaan->Posisi_pekerjaan }}</p>
                                    <p class="card-text mb-2">
                                        <i class="bi bi-geo-alt-fill text-danger"></i> {{ $pekerjaan->kecamatan->Nama_kecamatan ?? 'N/A' }}
                                    </p>
                                    @if($pekerjaan->Gaji_pekerjaan)
                                        <p class="card-text mb-3">
                                            <i class="bi bi-cash-stack"></i> {{ $pekerjaan->Gaji_pekerjaan }}
                                        </p>
                                    @endif
                                    <p class="card-text mb-4">{{ \Str::limit($pekerjaan->Deskripsi_pekerjaan, 120) }}</p>
                                    <a href="{{ route('jobs.detail', $pekerjaan->id_pekerjaan) }}" class="btn btn-primary btn-sm rounded-pill">
                                        Lihat Detail
                                    </a>
                                </div>
                                <!-- Card Footer -->
                                <div class="card-footer text-muted text-center py-2">
                                    <i class="bi bi-clock"></i> {{ \Carbon\Carbon::parse($pekerjaan->Tanggal_posting)->diffForHumans() }}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                @if ($pekerjaans->hasMorePages())
                    <div class="mt-4 text-center">
                        <a href="{{ $pekerjaans->nextPageUrl() }}" class="btn btn-primary btn-lg px-5">
                            Lihat Lebih Banyak
                        </a>
                    </div>
                @endif
            @else
                <div class="alert alert-info text-center">
                    <i class="bi bi-info-circle fs-1"></i>
                    <h4 class="mt-3">Tidak ada lowongan ditemukan</h4>
                    <p>Coba ubah filter pencarian Anda atau cek lagi nanti.</p>
                </div>
            @endif
        </div>
    </section>

<!-- Footer Section -->
<footer class="py-4">
    <div class="container">
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
                        <ul class="footer-links list-unstyled">
                            <li>Murara Laung</li>
                            <li>Laung Tuhup</li>
                            <li>Permata Intan</li>
                            <li>Tanah Siang</li>
                            <li>Tanah Siang Selatan</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul class="footer-links list-unstyled">
                            <li>Barito Tuhup Raya</li>
                            <li>Sumber Barito</li>
                            <li>Sungai Babuat</li>
                            <li>Seribu Riam</li>
                            <li>Uut Murung</li>
                        </ul>
                    </div>
                </div>
            </div>  
            <div class="col-lg-4 mb-4 mb-lg-0 ms-auto">
                <h5 class="fw-bold">Informasi</h5>
                <p>
                    Platform lowongan kerja untuk masyarakat Kabupaten Murung Raya, Kalimantan Tengah. 
                    Bekerja dekat rumah, keluarga tetap terjaga.
                </p>
            </div>
        </div>
    </div>
</footer>

@endsection
