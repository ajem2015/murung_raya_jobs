<?php

namespace App\Http\Controllers;

use App\Models\Lamaran;
use App\Models\Pekerjaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LamaranController extends Controller
{
    /**
     * Store a new lamaran
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id_pekerjaan' => 'required|exists:pekerjaan,id_pekerjaan',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation error',
                'errors' => $validator->errors()
            ], 422);
        }

        // Check if user already applied for this job
        $existingLamaran = Lamaran::where('id_user', $request->user()->id_user)
            ->where('id_pekerjaan', $request->id_pekerjaan)
            ->first();

        if ($existingLamaran) {
            return response()->json([
                'success' => false,
                'message' => 'You have already applied for this job'
            ], 400);
        }

        // Check if job is still active
        $pekerjaan = Pekerjaan::find($request->id_pekerjaan);
        if (!$pekerjaan->is_active) {
            return response()->json([
                'success' => false,
                'message' => 'This job is no longer active'
            ], 400);
        }

        $lamaran = Lamaran::create([
            'id_user' => $request->user()->id_user,
            'id_pekerjaan' => $request->id_pekerjaan,
            'status' => 'Pending',
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Application submitted successfully',
            'data' => $lamaran
        ], 201);
    }

    /**
     * Get all lamaran by user
     */
    public function getByUser(Request $request, $id)
    {
        // Ensure user can only see their own applications
        if ($request->user()->id_user != $id) {
            return response()->json([
                'success' => false,
                'message' => 'Unauthorized'
            ], 403);
        }

        $lamaran = Lamaran::with([
            'pekerjaan.kecamatan',
            'pekerjaan.kategori'
        ])
        ->where('id_user', $id)
        ->orderBy('tanggal_terkirim', 'desc')
        ->get();

        return response()->json([
            'success' => true,
            'data' => $lamaran
        ], 200);
    }
}
