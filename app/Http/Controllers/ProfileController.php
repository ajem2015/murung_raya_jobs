<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Lamaran;

class ProfileController extends Controller
{
    public function index()
    {
        // Ambil data user yang sedang login
        $user = Auth::user();
        
        // Jika method lamaran() tidak terdeteksi, gunakan query manual
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
    
    public function update(Request $request)
    {
        $user = Auth::user();
        
        $request->validate([
            'Nama' => 'required|string|max:255',
            'Email' => 'required|email|unique:user,Email,' . $user->id_user . ',id_user',
            'No_telepon' => 'nullable|string|max:20',
            'Pendidikan_terakhir' => 'nullable|string|max:100',
            'Deskripsi_keahlian' => 'nullable|string',
        ]);
        
        // Jika method update() tidak terdeteksi, gunakan DB atau User::where
        User::where('id_user', $user->id_user)->update([
            'Nama' => $request->Nama,
            'Email' => $request->Email,
            'No_telepon' => $request->No_telepon,
            'Pendidikan_terakhir' => $request->Pendidikan_terakhir,
            'Deskripsi_keahlian' => $request->Deskripsi_keahlian,
        ]);
        
        return redirect()->route('profile.index')
            ->with('success', 'Profil berhasil diperbarui!');
    }
}
