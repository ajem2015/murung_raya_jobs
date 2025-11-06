<?php

namespace App\Http\Controllers;

use App\Models\Pekerjaan;
use Illuminate\Http\Request;

class PekerjaanController extends Controller
{
    /**
     * Display a listing of pekerjaan with filters
     */
    public function index(Request $request)
    {
        $query = Pekerjaan::with(['kecamatan', 'kategori'])
            ->where('is_active', true);

        // Filter by kecamatan
        if ($request->has('id_kecamatan') && $request->id_kecamatan != '') {
            $query->where('id_kecamatan', $request->id_kecamatan);
        }

        // Filter by kategori
        if ($request->has('id_kategori') && $request->id_kategori != '') {
            $query->where('id_kategori', $request->id_kategori);
        }

        // Search by judul or deskripsi
        if ($request->has('search') && $request->search != '') {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('judul_pekerjaan', 'LIKE', "%{$search}%")
                  ->orWhere('deskripsi_pekerjaan', 'LIKE', "%{$search}%")
                  ->orWhere('posisi_pekerjaan', 'LIKE', "%{$search}%");
            });
        }

        // Pagination
        $perPage = $request->get('per_page', 10);
        $pekerjaan = $query->orderBy('tanggal_posting', 'desc')->paginate($perPage);

        return response()->json([
            'success' => true,
            'data' => $pekerjaan
        ], 200);
    }

    /**
     * Display the specified pekerjaan
     */
    public function show($id)
    {
        $pekerjaan = Pekerjaan::with(['kecamatan', 'kategori'])->find($id);

        if (!$pekerjaan) {
            return response()->json([
                'success' => false,
                'message' => 'Pekerjaan not found'
            ], 404);
        }

        return response()->json([
            'success' => true,
            'data' => $pekerjaan
        ], 200);
    }
}
