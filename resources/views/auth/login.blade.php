@extends('layouts.app')

@section('title', 'Login - Portal Lowongan Kerja Murung Raya')

@section('content')
<section class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-5">
                <div class="card shadow">
                    <div class="card-body p-5">
                        <div class="text-center mb-4">
                            <i class="bi bi-person-circle text-primary" style="font-size: 4rem;"></i>
                            <h2 class="fw-bold mt-3">Login</h2>
                            <p class="text-muted">Masuk ke akun Anda</p>
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

                        <form method="POST" action="{{ route('login.post') }}">
                            @csrf
                            
                            <div class="mb-3">
                                <label class="form-label fw-bold">
                                    <i class="bi bi-person"></i> Username
                                </label>
                                <input type="text" name="username" class="form-control" 
                                       placeholder="Masukkan username" required autofocus 
                                       value="{{ old('username') }}">
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-bold">
                                    <i class="bi bi-lock"></i> Password
                                </label>
                                <input type="password" name="password" class="form-control" 
                                       placeholder="Masukkan password" required>
                            </div>

                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="remember" name="remember">
                                <label class="form-check-label" for="remember">
                                    Ingat saya
                                </label>
                            </div>

                            <button type="submit" class="btn btn-primary w-100 mb-3">
                                <i class="bi bi-box-arrow-in-right"></i> Login
                            </button>

                            <div class="text-center">
                                <p class="mb-0">Belum punya akun? 
                                    <a href="{{ route('register') }}" class="fw-bold">Daftar di sini</a>
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
