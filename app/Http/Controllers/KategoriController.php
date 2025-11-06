<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    /**
     * Display a listing of all kategori
     */
    public function index()
    {
        $kategori = Kategori::all();

        return response()->json([
            'success' => true,
            'data' => $kategori
        ], 200);
    }
}
