@extends('layouts.app')

@section('title', $pekerjaan->Judul_pekerjaan . ' - Portal Lowongan Kerja Murung Raya')

@section('content')
<section class="py-5">
    <div class="container">
        <div class="row">
            <!-- Main Content -->
            <div class="col-lg-8">
                <div class="card shadow mb-4">
                    <div class="card-body p-4">
                        <!-- Header -->
                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <div>
                                <h1 class="h2 fw-bold text-primary mb-2">
                                    {{ $pekerjaan->Judul_pekerjaan }}
                                </h1>
                                <p class="text-muted mb-0">
                                    <i class="bi bi-building"></i> {{ $pekerjaan->Posisi_pekerjaan }}
                                </p>
                            </div>
                            @if($pekerjaan->is_active)
                                <span class="badge bg-success fs-6">Aktif</span>
                            @else
                                <span class="badge bg-secondary fs-6">Tidak Aktif</span>
                            @endif
                        </div>

                        <hr>

                        <!-- Meta Info -->
                        <div class="row g-3 mb-4">
                            <div class="col-md-6">
                                <div class="d-flex align-items-center">
                                    <i class="bi bi-geo-alt-fill text-danger fs-4 me-2"></i>
                                    <div>
                                        <small class="text-muted d-block">Lokasi</small>
                                        <strong>{{ $pekerjaan->Lokasi_pekerjaan }}</strong>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="d-flex align-items-center">
                                    <i class="bi bi-pin-map-fill text-primary fs-4 me-2"></i>
                                    <div>
                                        <small class="text-muted d-block">Kecamatan</small>
                                        <strong>{{ $pekerjaan->kecamatan->Nama_kecamatan ?? 'N/A' }}</strong>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="d-flex align-items-center">
                                    <i class="bi bi-tag-fill text-info fs-4 me-2"></i>
                                    <div>
                                        <small class="text-muted d-block">Kategori</small>
                                        <strong>{{ $pekerjaan->kategori->Nama_kategori ?? 'N/A' }}</strong>
                                    </div>
                                </div>
                            </div>
                            
                            @if($pekerjaan->Gaji_pekerjaan)
                            <div class="col-md-6">
                                <div class="d-flex align-items-center">
                                    <i class="bi bi-cash text-success fs-4 me-2"></i>
                                    <div>
                                        <small class="text-muted d-block">Gaji</small>
                                        <strong class="text-success">{{ $pekerjaan->Gaji_pekerjaan }}</strong>
                                    </div>
                                </div>
                            </div>
                            @endif
                            
                            <div class="col-md-6">
                                <div class="d-flex align-items-center">
                                    <i class="bi bi-people-fill text-warning fs-4 me-2"></i>
                                    <div>
                                        <small class="text-muted d-block">Jumlah Lowongan</small>
                                        <strong>{{ $pekerjaan->Jumlah_lowongan }} posisi</strong>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="d-flex align-items-center">
                                    <i class="bi bi-clock-fill text-secondary fs-4 me-2"></i>
                                    <div>
                                        <small class="text-muted d-block">Diposting</small>
                                        <strong>{{ \Carbon\Carbon::parse($pekerjaan->Tanggal_posting)->diffForHumans() }}</strong>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <hr>

                        <!-- Deskripsi -->
                        <div class="mb-4">
                            <h4 class="fw-bold mb-3">
                                <i class="bi bi-file-text"></i> Deskripsi Pekerjaan
                            </h4>
                            <p class="text-justify lh-lg">
                                {{ $pekerjaan->Deskripsi_pekerjaan ?? 'Tidak ada deskripsi.' }}
                            </p>
                        </div>

                        <hr>

                        <!-- Persyaratan -->
                        <div class="mb-4">
                            <h4 class="fw-bold mb-3">
                                <i class="bi bi-clipboard-check"></i> Persyaratan
                            </h4>
                            <p class="text-justify lh-lg">
                                {!! nl2br(e($pekerjaan->Persyaratan_pekerjaan ?? 'Tidak ada persyaratan khusus.')) !!}
                            </p>
                        </div>

                        @auth
                            @if($pekerjaan->is_active)
                                @if($hasApplied)
                                    <div class="alert alert-success">
                                        <i class="bi bi-check-circle-fill"></i> 
                                        Anda sudah melamar pekerjaan ini.
                                    </div>
                                @else
                                    <form method="POST" action="{{ route('jobs.apply', $pekerjaan->id_pekerjaan) }}" 
                                          onsubmit="return confirm('Yakin ingin melamar pekerjaan ini?');">
                                        @csrf
                                        <button type="submit" class="btn btn-primary btn-lg w-100">
                                            <i class="bi bi-send-fill"></i> Lamar Pekerjaan Ini
                                        </button>
                                    </form>
                                @endif
                            @else
                                <div class="alert alert-warning">
                                    <i class="bi bi-exclamation-triangle-fill"></i> 
                                    Lowongan ini sudah tidak aktif.
                                </div>
                            @endif
                        @else
                            <div class="alert alert-info">
                                <i class="bi bi-info-circle-fill"></i> 
                                Anda harus <a href="{{ route('login') }}" class="fw-bold">login</a> 
                                atau <a href="{{ route('register') }}" class="fw-bold">daftar</a> 
                                untuk melamar pekerjaan ini.
                            </div>
                        @endauth
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4">
                <!-- Similar Jobs -->
                <div class="card shadow">
                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0">
                            <i class="bi bi-briefcase"></i> Lowongan Serupa
                        </h5>
                    </div>
                    <div class="card-body">
                        @if($similarJobs->count() > 0)
                            @foreach($similarJobs as $job)
                                <div class="mb-3 pb-3 border-bottom">
                                    <h6 class="fw-bold mb-1">
                                        <a href="{{ route('jobs.detail', $job->id_pekerjaan) }}" class="text-decoration-none">
                                            {{ $job->Judul_pekerjaan }}
                                        </a>
                                    </h6>
                                    <small class="text-muted d-block">
                                        <i class="bi bi-geo-alt"></i> {{ $job->kecamatan->Nama_kecamatan ?? 'N/A' }}
                                    </small>
                                    @if($job->Gaji_pekerjaan)
                                        <small class="text-success">
                                            <i class="bi bi-cash"></i> {{ $job->Gaji_pekerjaan }}
                                        </small>
                                    @endif
                                </div>
                            @endforeach
                        @else
                            <p class="text-muted mb-0">Tidak ada lowongan serupa.</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <!-- Back Button -->
        <div class="mt-4">
            <a href="{{ route('home') }}" class="btn btn-outline-secondary">
                <i class="bi bi-arrow-left"></i> Kembali ke Beranda
            </a>
        </div>
    </div>
</section>
@endsection
