<?php

namespace App\Http\Controllers;

use App\Models\Pekerjaan;
use App\Models\Kecamatan;
use App\Models\Kategori;
use App\Models\Lamaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class WebController extends Controller
{
    /**
     * Display homepage with job listings
     */
    public function home(Request $request)
    {
        $query = Pekerjaan::with('kecamatan', 'kategori');

        // Filter by kecamatan
        if ($request->has('id_kecamatan') && $request->id_kecamatan != '') {
            $query->where('id_kecamatan', $request->id_kecamatan);
        }

        // Filter by kategori
        if ($request->has('id_kategori') && $request->id_kategori != '') {
            $query->where('id_kategori', $request->id_kategori);
        }

        // Search
        if ($request->has('search') && $request->search != '') {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('Judul_pekerjaan', 'LIKE', "%{$search}%")
                  ->orWhere('Deskripsi_pekerjaan', 'LIKE', "%{$search}%")
                  ->orWhere('Posisi_pekerjaan', 'LIKE', "%{$search}%");
            });
        }

        $pekerjaans = $query->orderBy('Tanggal_posting', 'desc')->paginate(12);
        $kecamatans = Kecamatan::all();
        $kategoris = Kategori::all();

        return view('home', compact('pekerjaans', 'kecamatans', 'kategoris'));
    }

    /**
     * Show job detail
     */
    public function jobDetail($id)
    {
        $pekerjaan = Pekerjaan::with('kecamatan', 'kategori')->findOrFail($id);
        
        // Check if user already applied
        $hasApplied = false;
        if (Auth::check()) {
            $hasApplied = Lamaran::where('id_user', Auth::user()->id_user)
                ->where('id_pekerjaan', $id)
                ->exists();
        }

        // Get similar jobs (same kategori, different job)
        $similarJobs = Pekerjaan::with('kecamatan', 'kategori')
            ->where('id_kategori', $pekerjaan->id_kategori)
            ->where('id_pekerjaan', '!=', $id)
            ->limit(5)
            ->get();

        return view('jobs.detail', compact('pekerjaan', 'hasApplied', 'similarJobs'));
    }

    /**
     * Apply for a job
     */
    public function jobApply(Request $request, $id)
    {
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Anda harus login terlebih dahulu.');
        }

        $user = Auth::user();

        // Check if job exists
        $pekerjaan = Pekerjaan::findOrFail($id);

        // Check if user already applied
        $existingLamaran = Lamaran::where('id_user', $user->id_user)
            ->where('id_pekerjaan', $id)
            ->first();

        if ($existingLamaran) {
            return redirect()->back()->with('error', 'Anda sudah melamar pekerjaan ini.');
        }

        // Create lamaran
        Lamaran::create([
            'id_user' => $user->id_user,
            'id_pekerjaan' => $id,
            'Status' => 'Pending',
            'Tanggal_terkirim' => now()
        ]);

        return redirect()->route('profile.applications')->with('success', 'Lamaran berhasil dikirim!');
    }

    /**
     * Show login form
     */
    public function showLogin()
    {
        if (Auth::check()) {
            return redirect()->route('home');
        }
        return view('auth.login');
    }

    /**
     * Process login
     */
    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        // Cari user berdasarkan Username (field database: Username dengan huruf besar)
        $user = User::where('Username', $request->username)->first();

        // Cek password dengan Hash::check karena field database adalah 'Password' (huruf besar)
        if ($user && Hash::check($request->password, $user->Password)) {
            Auth::login($user, $request->filled('remember'));
            $request->session()->regenerate();
            
            return redirect()->intended('/')->with('success', 'Login berhasil!');
        }

        return back()->withErrors([
            'username' => 'Username atau password salah.',
        ])->withInput($request->only('username'));
    }

    /**
     * Show register form
     */
    public function showRegister()
    {
        if (Auth::check()) {
            return redirect()->route('home');
        }
        return view('auth.register');
    }

    /**
     * Process registration
     */
    public function register(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:100',
            'username' => 'required|string|max:50|unique:user,Username',
            'email' => 'required|string|email|max:100|unique:user,Email',
            'password' => 'required|string|min:6|confirmed',
            'no_telepon' => 'nullable|string|max:20',
            'pendidikan_terakhir' => 'nullable|string|max:100',
            'deskripsi_keahlian' => 'nullable|string',
        ]);

        $user = User::create([
            'Nama' => $request->nama,
            'Username' => $request->username,
            'Email' => $request->email,
            'Password' => Hash::make($request->password),
            'No_telepon' => $request->no_telepon,
            'Pendidikan_terakhir' => $request->pendidikan_terakhir,
            'Deskripsi_keahlian' => $request->deskripsi_keahlian,
            'Tanggal_registrasi' => now(),
        ]);

        // Auto login after registration
        Auth::login($user);

        return redirect()->route('home')->with('success', 'Registrasi berhasil! Selamat datang, ' . $user->Nama);
    }

    /**
     * Logout
     */
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('home')->with('success', 'Logout berhasil!');
    }

    /**
     * Show profile page - AUTO MENAMPILKAN DATA USER YANG LOGIN
     */
    public function profile()
    {
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Anda harus login terlebih dahulu.');
        }

        // Ambil data user yang sedang login
        $user = Auth::user();
        
        // Statistics - menggunakan field 'Status' dengan huruf besar
        $totalLamaran = Lamaran::where('id_user', $user->id_user)->count();
        $pendingLamaran = Lamaran::where('id_user', $user->id_user)
            ->where('Status', 'Pending')->count();
        $diterimaLamaran = Lamaran::where('id_user', $user->id_user)
            ->where('Status', 'Diterima')->count();
        $ditolakLamaran = Lamaran::where('id_user', $user->id_user)
            ->where('Status', 'Ditolak')->count();

        return view('profile.index', compact(
            'user', 
            'totalLamaran', 
            'pendingLamaran', 
            'diterimaLamaran', 
            'ditolakLamaran'
        ));
    }

    /**
     * Update profile
     */
    public function profileUpdate(Request $request)
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        $user = Auth::user();
        
        $request->validate([
            'Nama' => 'required|string|max:100',
            'Email' => 'required|string|email|max:100|unique:user,Email,' . $user->id_user . ',id_user',
            'No_telepon' => 'nullable|string|max:20',
            'Pendidikan_terakhir' => 'nullable|string|max:100',
            'Deskripsi_keahlian' => 'nullable|string',
        ]);

        // Update menggunakan field database dengan huruf besar
        User::where('id_user', $user->id_user)->update([
            'Nama' => $request->Nama,
            'Email' => $request->Email,
            'No_telepon' => $request->No_telepon,
            'Pendidikan_terakhir' => $request->Pendidikan_terakhir,
            'Deskripsi_keahlian' => $request->Deskripsi_keahlian
        ]);

        return redirect()->route('profile.index')->with('success', 'Profil berhasil diperbarui!');
    }

    /**
     * Show user applications
     */
    public function applications()
    {
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Anda harus login terlebih dahulu.');
        }

        $user = Auth::user();

        $lamarans = Lamaran::with('pekerjaan.kecamatan', 'pekerjaan.kategori')
            ->where('id_user', $user->id_user)
            ->orderBy('Tanggal_terkirim', 'desc')
            ->get();

        return view('profile.applications', compact('lamarans'));
    }
}
