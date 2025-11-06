<?php

namespace App\Http\Controllers;

use App\Models\Kecamatan;
use Illuminate\Http\Request;

class KecamatanController extends Controller
{
    /**
     * Display a listing of all kecamatan
     */
    public function index()
    {
        $kecamatan = Kecamatan::all();

        return response()->json([
            'success' => true,
            'data' => $kecamatan
        ], 200);
    }
}
