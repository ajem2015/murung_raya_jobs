@extends('layouts.app')

@section('title', 'Daftar - Portal Lowongan Kerja Murung Raya')

@section('content')
<section class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-7">
                <div class="card shadow">
                    <div class="card-body p-5">
                        <div class="text-center mb-4">
                            <i class="bi bi-person-plus-fill text-primary" style="font-size: 4rem;"></i>
                            <h2 class="fw-bold mt-3">Daftar Akun Baru</h2>
                            <p class="text-muted">Buat akun untuk melamar pekerjaan</p>
                        </div>

                        @if($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form method="POST" action="{{ route('register.post') }}">
                            @csrf
                            
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label fw-bold">
                                        <i class="bi bi-person"></i> Nama Lengkap *
                                    </label>
                                    <input type="text" name="nama" class="form-control" 
                                           placeholder="Nama lengkap" required 
                                           value="{{ old('nama') }}">
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label class="form-label fw-bold">
                                        <i class="bi bi-at"></i> Username *
                                    </label>
                                    <input type="text" name="username" class="form-control" 
                                           placeholder="Username" required 
                                           value="{{ old('username') }}">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label fw-bold">
                                        <i class="bi bi-envelope"></i> Email *
                                    </label>
                                    <input type="email" name="email" class="form-control" 
                                           placeholder="email@example.com" required 
                                           value="{{ old('email') }}">
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label class="form-label fw-bold">
                                        <i class="bi bi-telephone"></i> No. Telepon
                                    </label>
                                    <input type="text" name="no_telepon" class="form-control" 
                                           placeholder="08xxxxxxxxxx" 
                                           value="{{ old('no_telepon') }}">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label fw-bold">
                                        <i class="bi bi-lock"></i> Password *
                                    </label>
                                    <input type="password" name="password" class="form-control" 
                                           placeholder="Minimal 6 karakter" required>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label class="form-label fw-bold">
                                        <i class="bi bi-lock-fill"></i> Konfirmasi Password *
                                    </label>
                                    <input type="password" name="password_confirmation" class="form-control" 
                                           placeholder="Ulangi password" required>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-bold">
                                    <i class="bi bi-mortarboard"></i> Pendidikan Terakhir
                                </label>
                                <select name="pendidikan_terakhir" class="form-select">
                                    <option value="">Pilih pendidikan</option>
                                    <option value="SD" {{ old('pendidikan_terakhir') == 'SD' ? 'selected' : '' }}>SD</option>
                                    <option value="SMP" {{ old('pendidikan_terakhir') == 'SMP' ? 'selected' : '' }}>SMP</option>
                                    <option value="SMA/SMK" {{ old('pendidikan_terakhir') == 'SMA/SMK' ? 'selected' : '' }}>SMA/SMK</option>
                                    <option value="D3" {{ old('pendidikan_terakhir') == 'D3' ? 'selected' : '' }}>D3 (Diploma)</option>
                                    <option value="S1" {{ old('pendidikan_terakhir') == 'S1' ? 'selected' : '' }}>S1 (Sarjana)</option>
                                    <option value="S2" {{ old('pendidikan_terakhir') == 'S2' ? 'selected' : '' }}>S2 (Magister)</option>
                                    <option value="S3" {{ old('pendidikan_terakhir') == 'S3' ? 'selected' : '' }}>S3 (Doktor)</option>
                                </select>
                            </div>

                            <div class="mb-4">
                                <label class="form-label fw-bold">
                                    <i class="bi bi-star"></i> Keahlian / Pengalaman
                                </label>
                                <textarea name="deskripsi_keahlian" class="form-control" rows="3" 
                                          placeholder="Tuliskan keahlian atau pengalaman Anda...">{{ old('deskripsi_keahlian') }}</textarea>
                                <small class="text-muted">Contoh: Mahir Microsoft Office, Pengalaman 2 tahun sebagai admin</small>
                            </div>

                            <button type="submit" class="btn btn-primary w-100 mb-3">
                                <i class="bi bi-person-plus"></i> Daftar Sekarang
                            </button>

                            <div class="text-center">
                                <p class="mb-0">Sudah punya akun? 
                                    <a href="{{ route('login') }}" class="fw-bold">Login di sini</a>
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
