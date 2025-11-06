@extends('layouts.app')

@section('title', 'Lamaran Saya - Portal Lowongan Kerja Murung Raya')

@section('content')
<section class="py-5">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="fw-bold">
                <i class="bi bi-file-earmark-text"></i> Riwayat Lamaran Saya
            </h2>
            <span class="badge bg-primary fs-6">{{ $lamarans->count() }} Lamaran</span>
        </div>

        @if($lamarans->count() > 0)
            <div class="row g-4">
                @foreach($lamarans as $lamaran)
                    <div class="col-12">
                        <div class="card shadow-sm hover-card">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-lg-8">
                                        <h5 class="fw-bold text-primary mb-2">
                                            {{ $lamaran->pekerjaan->judul_pekerjaan }}
                                        </h5>
                                        
                                        <p class="text-muted mb-2">
                                            <i class="bi bi-building"></i> {{ $lamaran->pekerjaan->posisi_pekerjaan }}
                                        </p>
                                        
                                        <div class="mb-2">
                                            <small class="text-muted">
                                                <i class="bi bi-geo-alt-fill text-danger"></i> 
                                                {{ $lamaran->pekerjaan->lokasi_pekerjaan }} 
                                                ({{ $lamaran->pekerjaan->kecamatan->nama_kecamatan ?? 'N/A' }})
                                            </small>
                                        </div>
                                        
                                        <div class="mb-2">
                                            <small class="text-muted">
                                                <i class="bi bi-tag-fill text-info"></i> 
                                                {{ $lamaran->pekerjaan->kategori->nama_kategori ?? 'N/A' }}
                                            </small>
                                        </div>
                                        
                                        <div>
                                            <small class="text-muted">
                                                <i class="bi bi-clock"></i> 
                                                Dilamar pada: {{ \Carbon\Carbon::parse($lamaran->tanggal_terkirim)->format('d F Y H:i') }}
                                            </small>
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-4 text-lg-end mt-3 mt-lg-0">
                                        @if($lamaran->status == 'Pending')
                                            <span class="badge bg-warning text-dark fs-6 mb-2">
                                                <i class="bi bi-hourglass-split"></i> Pending
                                            </span>
                                        @elseif($lamaran->status == 'Diterima')
                                            <span class="badge bg-success fs-6 mb-2">
                                                <i class="bi bi-check-circle-fill"></i> Diterima
                                            </span>
                                        @elseif($lamaran->status == 'Ditolak')
                                            <span class="badge bg-danger fs-6 mb-2">
                                                <i class="bi bi-x-circle-fill"></i> Ditolak
                                            </span>
                                        @endif
                                        
                                        <div class="mt-2">
                                            <a href="{{ route('jobs.detail', $lamaran->pekerjaan->id_pekerjaan) }}" 
                                               class="btn btn-sm btn-outline-primary">
                                                <i class="bi bi-eye"></i> Lihat Detail
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="alert alert-info text-center py-5">
                <i class="bi bi-inbox fs-1"></i>
                <h4 class="mt-3">Belum Ada Lamaran</h4>
                <p>Anda belum melamar pekerjaan apapun. Mulai cari lowongan yang sesuai!</p>
                <a href="{{ route('home') }}" class="btn btn-primary mt-2">
                    <i class="bi bi-search"></i> Cari Lowongan
                </a>
            </div>
        @endif
    </div>
</section>
@endsection
