@extends('layouts.app')

@section('title', 'Beranda - Portal Lowongan Kerja Murung Raya')

@section('content')
<!-- Hero Section -->
<section class="bg-primary text-white py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <h1 class="display-4 fw-bold mb-3">
                    Temukan Pekerjaan Impian Anda di Murung Raya
                </h1>
                <p class="lead mb-4">
                    Platform lowongan kerja resmi Kabupaten Murung Raya, Kalimantan Tengah. 
                    Ratusan lowongan dari berbagai kecamatan dan kategori.
                </p>
                @guest
                    <a href="{{ route('register') }}" class="btn btn-light btn-lg me-2">
                        <i class="bi bi-person-plus"></i> Daftar Sekarang
                    </a>
                @endguest
            </div>
        </div>
    </div>
</section>

<!-- Filter Section -->
<section class="py-4 bg-light">
    <div class="container">
        <form method="GET" action="{{ route('home') }}" class="row g-3">
            <div class="col-md-4">
                <label class="form-label fw-bold">
                    <i class="bi bi-search"></i> Cari Pekerjaan
                </label>
                <input type="text" name="search" class="form-control" 
                       placeholder="Judul, posisi, atau deskripsi..." 
                       value="{{ request('search') }}">
            </div>
            
            <div class="col-md-3">
                <label class="form-label fw-bold">
                    <i class="bi bi-geo-alt"></i> Kecamatan
                </label>
                <select name="id_kecamatan" class="form-select">
                    <option value="">Semua Kecamatan</option>
                    @foreach($kecamatans as $kecamatan)
                        <option value="{{ $kecamatan->id_kecamatan }}" 
                                {{ request('id_kecamatan') == $kecamatan->id_kecamatan ? 'selected' : '' }}>
                            {{ $kecamatan->Nama_kecamatan }}
                        </option>
                    @endforeach
                </select>
            </div>
            
            <div class="col-md-3">
                <label class="form-label fw-bold">
                    <i class="bi bi-tag"></i> Kategori
                </label>
                <select name="id_kategori" class="form-select">
                    <option value="">Semua Kategori</option>
                    @foreach($kategoris as $kategori)
                        <option value="{{ $kategori->id_kategori }}" 
                                {{ request('id_kategori') == $kategori->id_kategori ? 'selected' : '' }}>
                            {{ $kategori->Nama_kategori }}
                        </option>
                    @endforeach
                </select>
            </div>
            
            <div class="col-md-2 d-flex align-items-end">
                <button type="submit" class="btn btn-primary w-100">
                    <i class="bi bi-search"></i> Cari
                </button>
            </div>
        </form>
    </div>
</section>

<!-- Jobs Listing -->
<section class="py-5">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="fw-bold">
                <i class="bi bi-briefcase"></i> Lowongan Tersedia 
                <span class="badge bg-primary">{{ $pekerjaans->total() }}</span>
            </h2>
        </div>

        @if($pekerjaans->count() > 0)
            <div class="row g-4">
                @foreach($pekerjaans as $pekerjaan)
                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 shadow-sm hover-card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-start mb-2">
                                    <h5 class="card-title fw-bold text-primary mb-0">
                                        {{ $pekerjaan->Judul_pekerjaan }}
                                    </h5>
                                    @if($pekerjaan->is_active)
                                        <span class="badge bg-success">Aktif</span>
                                    @endif
                                </div>
                                
                                <p class="text-muted mb-2">
                                    <i class="bi bi-building"></i> {{ $pekerjaan->Posisi_pekerjaan }}
                                </p>
                                
                                <p class="card-text text-truncate-2">
                                    {{ Str::limit($pekerjaan->Deskripsi_pekerjaan, 100) }}
                                </p>
                                
                                <hr>
                                
                                <div class="mb-2">
                                    <small class="text-muted">
                                        <i class="bi bi-geo-alt-fill text-danger"></i> 
                                        {{ $pekerjaan->kecamatan->Nama_kecamatan ?? 'N/A' }}
                                    </small>
                                </div>
                                
                                <div class="mb-2">
                                    <small class="text-muted">
                                        <i class="bi bi-tag-fill text-info"></i> 
                                        {{ $pekerjaan->kategori->Nama_kategori ?? 'N/A' }}
                                    </small>
                                </div>
                                
                                @if($pekerjaan->Gaji_pekerjaan)
                                    <div class="mb-3">
                                        <small class="text-success fw-bold">
                                            <i class="bi bi-cash"></i> {{ $pekerjaan->Gaji_pekerjaan }}
                                        </small>
                                    </div>
                                @endif
                                
                                <div class="d-flex justify-content-between align-items-center">
                                    <small class="text-muted">
                                        <i class="bi bi-people"></i> {{ $pekerjaan->Jumlah_lowongan }} posisi
                                    </small>
                                    <a href="{{ route('jobs.detail', $pekerjaan->id_pekerjaan) }}" 
                                       class="btn btn-primary btn-sm">
                                        <i class="bi bi-eye"></i> Detail
                                    </a>
                                </div>
                            </div>
                            
                            <div class="card-footer bg-light text-muted">
                                <small>
                                    <i class="bi bi-clock"></i> 
                                    {{ \Carbon\Carbon::parse($pekerjaan->Tanggal_posting)->diffForHumans() }}
                                </small>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Pagination -->
            <div class="mt-5 d-flex justify-content-center">
                {{ $pekerjaans->links() }}
            </div>
        @else
            <div class="alert alert-info text-center">
                <i class="bi bi-info-circle fs-1"></i>
                <h4 class="mt-3">Tidak ada lowongan ditemukan</h4>
                <p>Coba ubah filter pencarian Anda atau cek lagi nanti.</p>
            </div>
        @endif
    </div>
</section>
@endsection
