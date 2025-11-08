@php use Carbon\Carbon; @endphp

@include('layouts.header')

<!-- Header Section -->
<section class="py-4 bg-white">
    <div class="container">
        <div class="card border-0 shadow-lg">
            <div class="card-body p-4">
                <!-- Breadcrumb di dalam container -->
                <div class="mb-4">
                    <a href="{{ route('home') }}" class="text-decoration-none text-primary">
                        <i class="bi bi-arrow-left me-2"></i>Kembali ke Daftar Lowongan
                    </a>
                </div>
        
                <!-- Job Title and Info -->
                <div class="row align-items-center">
                    <div class="col-12">
                        <h1 class="fw-bold mb-4 text-dark">{{ $pekerjaan->Judul_pekerjaan ?? 'Warehouse Supervisor' }}</h1>
                        
                        <div class="d-flex flex-wrap align-items-center gap-5">
                            <!-- Company -->
                            <div class="d-flex align-items-center">
                                <div class="me-3">
                                    <i class="bi bi-building-fill text-primary fs-5"></i>
                                </div>
                                <div>
                                    <small class="text-muted d-block">Perusahaan</small>
                                    <strong class="text-dark">{{ $pekerjaan->perusahaan->nama_perusahaan ?? 'PT. KTH COAL MINING' }}</strong>
                                </div>
                            </div>
                            
                            <!-- Location -->
                            <div class="d-flex align-items-center">
                                <div class="me-3">
                                    <i class="bi bi-geo-alt-fill text-danger fs-5"></i>
                                </div>
                                <div>
                                    <small class="text-muted d-block">Lokasi</small>
                                    <strong class="text-dark">{{ $pekerjaan->Lokasi_pekerjaan ?? 'Sumber Barito' }}</strong>
                                </div>
                            </div>
                            
                            <!-- Job Type -->
                            <div class="d-flex align-items-center">
                                <div class="me-3">
                                    <i class="bi bi-clock-fill text-warning fs-5"></i>
                                </div>
                                <div>
                                    <small class="text-muted d-block">Tipe</small>
                                    <strong class="text-dark">{{ $pekerjaan->tipe_pekerjaan ?? 'Full-time' }}</strong>
                                </div>
                            </div>
                            
                            <!-- Posted Date -->
                            <div class="d-flex align-items-center ms-auto">
                                <div class="text-end">
                                    <small class="text-muted d-block">Diposting</small>
                                    <strong class="text-primary">{{ Carbon::parse($pekerjaan->Tanggal_posting ?? now())->diffForHumans() }}</strong>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Main Content -->
<section class="py-5 bg-white">
    <div class="container">
        <div class="row">
            <!-- Left Column - Job Details -->
            <div class="col-lg-8">
                <!-- Job Description -->
                <div class="card mb-4 border-0 shadow-lg">
                    <div class="card-body p-4">
                        <h4 class="fw-bold mb-3 text-dark">
                            <i class="bi bi-file-text me-2" style="color: #6f42c1"></i>Deskripsi Pekerjaan
                        </h4>
                        <div class="text-muted fs-6 lh-lg">
                            @if($pekerjaan->Deskripsi_pekerjaan)
                                {!! nl2br(e($pekerjaan->Deskripsi_pekerjaan)) !!}
                            @else
                                <p>Bertanggung jawab untuk mengoperasikan dan merawat alat berat dalam kegiatan operasional perusahaan. Melakukan inspeksi rutin, memastikan keselamatan kerja, dan berkoordinasi dengan tim terkait.</p>
                                
                                <p><strong>Tanggung Jawab Utama:</strong></p>
                                <ul>
                                    <li>Mengoperasikan alat berat sesuai prosedur</li>
                                    <li>Melakukan maintenance harian</li>
                                    <li>Memastikan compliance K3</li>
                                    <li>Berkolaborasi dengan tim operasional</li>
                                </ul>
                            @endif
                        </div>
                    </div>
                </div>

                <!-- Qualifications -->
                <div class="card mb-4 border-0 shadow-lg">
                    <div class="card-body p-4">
                        <h4 class="fw-bold mb-3 text-dark">
                            <i class="bi bi-list-check me-2 text-success"></i>Kualifikasi & Persyaratan
                        </h4>
                        <div class="text-muted fs-6 lh-lg">
                            @if($pekerjaan->Persyaratan_pekerjaan)
                                <ul class="mb-0">
                                    @foreach(explode("\n", $pekerjaan->Persyaratan_pekerjaan) as $persyaratan)
                                        @if(trim($persyaratan))
                                            <li>{{ trim($persyaratan) }}</li>
                                        @endif
                                    @endforeach
                                </ul>
                            @else
                                <ul class="mb-0">
                                    <li>Pendidikan minimal SLTA/SMK Sederajat</li>
                                    <li>Memiliki pengalaman minimal 2 tahun sebagai operator excavator</li>
                                    <li>Memiliki Surat Izin Operator (SIO) yang masih aktif</li>
                                    <li>Bersedia ditempatkan di lokasi site</li>
                                    <li>Memahami prosedur keselamatan kerja (K3)</li>
                                    <li>Dapat bekerja dalam tim maupun individu</li>
                                    <li>Disiplin, jujur, dan bertanggung jawab</li>
                                </ul>
                            @endif
                        </div>
                    </div>
                </div>

                <!-- About Company -->
                <div class="card border-0 shadow-lg">
                    <div class="card-body p-4">
                        <h4 class="fw-bold mb-3 text-dark">
                            <i class="bi bi-building me-2 text-primary"></i>Tentang Perusahaan
                        </h4>
                        <div class="text-muted fs-6 lh-lg">
                            @if($pekerjaan->perusahaan->deskripsi ?? false)
                                {!! nl2br(e($pekerjaan->perusahaan->deskripsi)) !!}
                            @else
                                <p>PT. Tambang Berkah Utama adalah perusahaan pertambangan terkemuka yang beroperasi di wilayah Kalimantan Tengah. Dengan pengalaman lebih dari 15 tahun, kami berkomitmen untuk menjalankan operasi pertambangan yang bertanggung jawab dan berkelanjutan.</p>
                                
                                <p>Kami percaya bahwa karyawan adalah aset terpenting perusahaan. Oleh karena itu, kami menyediakan lingkungan kerja yang aman, pelatihan berkelanjutan, dan kesempatan pengembangan karir bagi seluruh karyawan kami.</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

                <!-- Right Column - Application Form -->
                <div class="col-lg-4">
                    <div class="card border-0 shadow-lg sticky-top">
                        <div class="card-body p-4">
                            <h4 class="fw-bold mb-4 text-dark">
                                <i class="bi bi-pencil-square me-2 text-info"></i>Formulir Lamaran
                            </h4>
                        
                        @if($pekerjaan->is_active ?? true)
                            @if($hasApplied ?? false)
                                <div class="alert alert-success text-center py-4">
                                    <i class="bi bi-check-circle-fill fs-1 text-success mb-3 d-block"></i>
                                    <strong class="fs-5">Anda sudah melamar pekerjaan ini.</strong>
                                </div>
                            @else
                                <form method="POST" action="#" enctype="multipart/form-data">
                                    @csrf

                                    <!-- NIK -->
                                    <div class="mb-3">
                                        <label class="form-label fw-semibold text-dark">NIK</label>
                                        <input type="text" class="form-control" name="nik" placeholder="Masukkan NIK (16 digit)" required 
                                            pattern="[0-9]{16}" title="NIK harus 16 digit angka"
                                            maxlength="16" minlength="16">
                                        <div class="form-text">Contoh: 1234567890123456</div>
                                    </div>
                                    
                                    <!-- Full Name -->
                                    <div class="mb-3">
                                        <label class="form-label fw-semibold text-dark">Nama Lengkap</label>
                                        <input type="text" class="form-control" name="nama_lengkap" placeholder="Masukkan nama lengkap" required>
                                    </div>

                                    <!-- Gender -->
                                    <div class="mb-3">
                                        <label class="form-label fw-semibold text-dark">Jenis Kelamin</label>
                                        <div class="d-flex gap-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki-laki" value="Laki-laki" required>
                                                <label class="form-check-label" for="laki-laki">Laki-laki</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan" value="Perempuan" required>
                                                <label class="form-check-label" for="perempuan">Perempuan</label>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Birth Date -->
                                    <div class="mb-3">
                                        <label class="form-label fw-semibold text-dark">Tanggal Lahir</label>
                                        <input type="date" class="form-control" name="tanggal_lahir" required>
                                    </div>

                                    <!-- Address -->
                                    <div class="mb-3">
                                        <label class="form-label fw-semibold text-dark">Alamat Lengkap</label>
                                        <textarea class="form-control" name="alamat" rows="3" placeholder="Masukkan alamat lengkap" required></textarea>
                                    </div>

                                    <!-- District -->
                                    <div class="mb-3">
                                        <label class="form-label fw-semibold text-dark">Kecamatan</label>
                                        <select class="form-select" name="kecamatan" required>
                                            <option value="">Pilih Kecamatan</option>
                                            <option value="1">Sumber Barito</option>
                                            <option value="2">Muara Laung</option>
                                            <option value="3">Permata Intan</option>
                                        </select>
                                    </div>

                                    <!-- Phone -->
                                    <div class="mb-3">
                                        <label class="form-label fw-semibold text-dark">Nomor Telepon / WhatsApp</label>
                                        <input type="tel" class="form-control" name="telepon" placeholder="Contoh: 081234567890" required>
                                    </div>

                                    <!-- Email -->
                                    <div class="mb-3">
                                        <label class="form-label fw-semibold text-dark">Email</label>
                                        <input type="email" class="form-control" name="email" placeholder="Masukkan email Anda" required>
                                    </div>

                                    <!-- CV Upload -->
                                    <div class="mb-4">
                                        <label class="form-label fw-semibold text-dark">Upload CV</label>
                                        <input type="file" class="form-control" name="cv" accept=".pdf,.doc,.docx" required>
                                        <div class="form-text text-center mt-2">
                                            <strong>Upload File CV mu Di sini!</strong>
                                        </div>
                                    </div>

                                    <!-- Submit Button -->
                                    <button type="submit" class="btn btn-primary w-100 py-3 fw-bold">
                                        <i class="bi bi-send-fill me-2"></i>Kirim Lamaran
                                    </button>
                                </form>
                            @endif
                        @else
                            <div class="alert alert-warning text-center py-4">
                                <i class="bi bi-exclamation-triangle-fill fs-1 text-warning mb-3 d-block"></i>
                                <strong class="fs-5">Lowongan ini sudah tidak aktif.</strong>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Bootstrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">

@include('layouts.footer')