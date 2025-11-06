<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pekerjaan extends Model
{
    use HasFactory;

    protected $table = 'pekerjaan';
    protected $primaryKey = 'id_pekerjaan';

    protected $fillable = [
        'id_kecamatan',
        'id_kategori',
        'judul_pekerjaan',
        'deskripsi_pekerjaan',
        'posisi_pekerjaan',
        'lokasi_pekerjaan',
        'gaji_pekerjaan',
        'persyaratan_pekerjaan',
        'jumlah_lowongan',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    /**
     * Relationship: Pekerjaan belongs to Kecamatan
     */
    public function kecamatan()
    {
        return $this->belongsTo(Kecamatan::class, 'id_kecamatan', 'id_kecamatan');
    }

    /**
     * Relationship: Pekerjaan belongs to Kategori
     */
    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'id_kategori', 'id_kategori');
    }

    /**
     * Relationship: Pekerjaan has many Lamaran
     */
    public function lamaran()
    {
        return $this->hasMany(Lamaran::class, 'id_pekerjaan', 'id_pekerjaan');
    }
}
