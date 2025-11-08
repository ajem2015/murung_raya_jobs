</main>

    <footer style="background-color: #F5F5F7;" class="text-dark">
        <!-- Main Footer Content -->
        <div class="container py-4">
            <div class="row">
                <!-- Kolom 1: Pemerintah Kabupaten -->
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <div class="d-flex align-items-center mb-3">
                        <!-- Logo -->
                        <div class="me-3">
                            <img src="{{ asset('images/lambang_mura.png') }}" alt="Logo Kabupaten Murung Raya" class="img-fluid" style="width: 60px; height: 60px;">
                        </div>
                        <!-- Teks -->
                        <div>
                            <h5 class="fw-bold text-dark mb-0">PEMERINTAH KABUPATEN</h5>
                            <h5 class="fw-bold text-dark mb-0">MURUNG RAYA</h5>
                        </div>
                    </div>
                    <div class="mt-3">
                        <p class="mb-2">
                            <i class="bi bi-geo-alt-fill text-danger me-2"></i>
                            Jl. Jenderal Sudirman No. 88, Puruk Cahu, Kalimantan Tengah
                        </p>
                        <p class="mb-1">
                            <i class="bi bi-telephone-fill text-success me-2"></i>
                            (0538) 21001
                        </p>
                        <p class="mb-1">
                            <i class="bi bi-printer-fill text-primary me-2"></i>
                            (0538) 21002
                        </p>
                        <p class="mb-1">
                            <i class="bi bi-globe text-info me-2"></i>
                            <a href="https://murungrayakab.go.id" class="text-decoration-none text-dark">https://murungrayakab.go.id</a>
                        </p>
                        <p class="mb-0">
                            <i class="bi bi-envelope-fill text-warning me-2"></i>
                            <a href="mailto:info@murungrayakab.go.id" class="text-decoration-none text-dark">info@murungrayakab.go.id</a>
                        </p>
                    </div>
                </div>
                
                <!-- Kolom 2: Kecamatan -->
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <h5 class="fw-bold mb-3">Kecamatan</h5>
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="list-unstyled">
                                <li class="mb-2"><i class="bi bi-geo-alt-fill text-danger me-2"></i> Murara Laung</li>
                                <li class="mb-2"><i class="bi bi-geo-alt-fill text-danger me-2"></i> Laung Tuhup</li>
                                <li class="mb-2"><i class="bi bi-geo-alt-fill text-danger me-2"></i> Permata Intan</li>
                                <li class="mb-2"><i class="bi bi-geo-alt-fill text-danger me-2"></i> Tanah Siang</li>
                                <li class="mb-2"><i class="bi bi-geo-alt-fill text-danger me-2"></i> Tanah Siang Selatan</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="list-unstyled">
                                <li class="mb-2"><i class="bi bi-geo-alt-fill text-danger me-2"></i> Barito Tuhup Raya</li>
                                <li class="mb-2"><i class="bi bi-geo-alt-fill text-danger me-2"></i> Sumber Barito</li>
                                <li class="mb-2"><i class="bi bi-geo-alt-fill text-danger me-2"></i> Sungai Babuat</li>
                                <li class="mb-2"><i class="bi bi-geo-alt-fill text-danger me-2"></i> Seribu Riam</li>
                                <li class="mb-2"><i class="bi bi-geo-alt-fill text-danger me-2"></i> Uut Murung</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <!-- Kolom 3: Portal Kerja -->
                <div class="col-lg-4">
                    <h5 class="fw-bold mb-3">Portal Kerja Murung Raya</h5>
                    <p class="mb-3">
                        Platform lowongan kerja untuk masyarakat Kabupaten Murung Raya, Kalimantan Tengah. 
                        Bekerja dekat rumah, keluarga tetap terjaga.
                    </p>
                </div>
            </div>
        </div>
        
        <!-- Copyright Section -->
        <div class="py-3" style="background-color: #000000ff; color: white;">
            <div class="container">
                <div class="text-center text-white">
                    <p class="mb-1">&copy; {{ date('Y') }} Pemerintah Kabupaten Murung Raya. All rights reserved.</p>
                    <p class="mb-0 small opacity-75 text-white fw-bold">Sistem Informasi Ketenagakerjaan dan Portal Lowongan Kerja Berbasis Kecamatan</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    @stack('scripts')
</body>
</html>