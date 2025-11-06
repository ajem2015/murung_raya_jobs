@extends('layouts.app')

@section('title', 'Profil Saya - Portal Lowongan Kerja Murung Raya')

@section('content')
<section class="py-5">
    <div class="container">
        {{-- Alert Success --}}
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        <div class="row">
            <div class="col-lg-4">
                <!-- Profile Card -->
                <div class="card shadow mb-4">
                    <div class="card-body text-center">
                        <div class="mb-3">
                            @if($user->Foto_profil)
                                <img src="{{ asset('storage/' . $user->Foto_profil) }}" 
                                     class="rounded-circle" width="120" height="120" 
                                     alt="Foto Profil">
                            @else
                                <i class="bi bi-person-circle text-muted" style="font-size: 120px;"></i>
                            @endif
                        </div>
                        <h4 class="fw-bold mb-1">{{ $user->Nama }}</h4>
                        <p class="text-muted mb-2">{{ '@' . $user->Username }}</p>
                        <span class="badge bg-primary">Member</span>
                    </div>
                </div>

                <!-- Quick Stats -->
                <div class="card shadow">
                    <div class="card-header bg-primary text-white">
                        <h6 class="mb-0">
                            <i class="bi bi-bar-chart"></i> Statistik
                        </h6>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-2">
                            <span>Total Lamaran</span>
                            <strong class="text-primary">{{ $totalLamaran }}</strong>
                        </div>
                        <div class="d-flex justify-content-between mb-2">
                            <span>Pending</span>
                            <strong class="text-warning">{{ $pendingLamaran }}</strong>
                        </div>
                        <div class="d-flex justify-content-between mb-2">
                            <span>Diterima</span>
                            <strong class="text-success">{{ $diterimaLamaran }}</strong>
                        </div>
                        <div class="d-flex justify-content-between">
                            <span>Ditolak</span>
                            <strong class="text-danger">{{ $ditolakLamaran }}</strong>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-8">
                <!-- Profile Info -->
                <div class="card shadow">
                    <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">
                            <i class="bi bi-person-lines-fill"></i> Informasi Profil
                        </h5>
                        <button class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#editProfileModal">
                            <i class="bi bi-pencil"></i> Edit
                        </button>
                    </div>
                    <div class="card-body">
                        <div class="row mb-3">
                            <div class="col-sm-4 fw-bold">Nama Lengkap:</div>
                            <div class="col-sm-8">{{ $user->Nama }}</div>
                        </div>
                        <hr>
                        <div class="row mb-3">
                            <div class="col-sm-4 fw-bold">Username:</div>
                            <div class="col-sm-8">{{ $user->Username }}</div>
                        </div>
                        <hr>
                        <div class="row mb-3">
                            <div class="col-sm-4 fw-bold">Email:</div>
                            <div class="col-sm-8">{{ $user->Email }}</div>
                        </div>
                        <hr>
                        <div class="row mb-3">
                            <div class="col-sm-4 fw-bold">No. Telepon:</div>
                            <div class="col-sm-8">{{ $user->No_telepon ?? '-' }}</div>
                        </div>
                        <hr>
                        <div class="row mb-3">
                            <div class="col-sm-4 fw-bold">Pendidikan:</div>
                            <div class="col-sm-8">{{ $user->Pendidikan_terakhir ?? '-' }}</div>
                        </div>
                        <hr>
                        <div class="row mb-3">
                            <div class="col-sm-4 fw-bold">Keahlian:</div>
                            <div class="col-sm-8">{{ $user->Deskripsi_keahlian ?? '-' }}</div>
                        </div>
                        <hr>
                        <div class="row mb-3">
                            <div class="col-sm-4 fw-bold">Terdaftar Sejak:</div>
                            <div class="col-sm-8">
                                {{ \Carbon\Carbon::parse($user->Tanggal_registrasi)->format('d F Y') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Edit Profile Modal -->
<div class="modal fade" id="editProfileModal" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form method="POST" action="{{ route('profile.update') }}">
                @csrf
                @method('PUT')
                
                <div class="modal-header">
                    <h5 class="modal-title">Edit Profil</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label fw-bold">Nama Lengkap</label>
                        <input type="text" name="Nama" class="form-control" 
                               value="{{ $user->Nama }}" required>
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label fw-bold">Email</label>
                        <input type="email" name="Email" class="form-control" 
                               value="{{ $user->Email }}" required>
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label fw-bold">No. Telepon</label>
                        <input type="text" name="No_telepon" class="form-control" 
                               value="{{ $user->No_telepon }}">
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label fw-bold">Pendidikan Terakhir</label>
                        <select name="Pendidikan_terakhir" class="form-select">
                            <option value="">Pilih pendidikan</option>
                            <option value="SD" {{ $user->Pendidikan_terakhir == 'SD' ? 'selected' : '' }}>SD</option>
                            <option value="SMP" {{ $user->Pendidikan_terakhir == 'SMP' ? 'selected' : '' }}>SMP</option>
                            <option value="SMA/SMK" {{ $user->Pendidikan_terakhir == 'SMA/SMK' ? 'selected' : '' }}>SMA/SMK</option>
                            <option value="D3" {{ $user->Pendidikan_terakhir == 'D3' ? 'selected' : '' }}>D3</option>
                            <option value="S1" {{ $user->Pendidikan_terakhir == 'S1' ? 'selected' : '' }}>S1</option>
                            <option value="S2" {{ $user->Pendidikan_terakhir == 'S2' ? 'selected' : '' }}>S2</option>
                            <option value="S3" {{ $user->Pendidikan_terakhir == 'S3' ? 'selected' : '' }}>S3</option>
                        </select>
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label fw-bold">Keahlian / Pengalaman</label>
                        <textarea name="Deskripsi_keahlian" class="form-control" rows="4">{{ $user->Deskripsi_keahlian }}</textarea>
                    </div>
                </div>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
