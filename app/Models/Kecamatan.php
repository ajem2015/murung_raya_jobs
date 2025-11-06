<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    use HasFactory;

    protected $table = 'kecamatan';
    protected $primaryKey = 'id_kecamatan';

    protected $fillable = [
        'nama_kecamatan',
    ];

    /**
     * Relationship: Kecamatan has many Pekerjaan
     */
    public function pekerjaan()
    {
        return $this->hasMany(Pekerjaan::class, 'id_kecamatan', 'id_kecamatan');
    }
}
