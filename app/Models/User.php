<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    // ============================================
    // KONFIGURASI DATABASE
    // ============================================
    
    protected $table = 'user'; // Nama tabel di database
    protected $primaryKey = 'id_user'; // Primary key
    public $timestamps = true; // Menggunakan created_at & updated_at

    // ============================================
    // MASS ASSIGNMENT
    // ============================================
    
    protected $fillable = [
        'Nama',
        'Username',
        'Email',
        'Password',
        'No_telepon',
        'Pendidikan_terakhir',
        'Deskripsi_keahlian',
        'CV',
        'Foto_profil',
        'Tanggal_registrasi',
    ];

    // ============================================
    // HIDDEN FIELDS
    // ============================================
    
    protected $hidden = [
        'Password',
        'remember_token',
    ];

    // ============================================
    // AUTHENTICATION OVERRIDE
    // ============================================
    
    /**
     * Override method getAuthPassword untuk authentication
     * Karena field password di database adalah 'Password' (huruf besar)
     */
    public function getAuthPassword()
    {
        return $this->Password;
    }

    // ============================================
    // ELOQUENT RELATIONSHIPS
    // ============================================
    
    /**
     * Relasi One-to-Many dengan Lamaran
     * Satu user bisa memiliki banyak lamaran
     */
    public function lamaran()
    {
        return $this->hasMany(Lamaran::class, 'id_user', 'id_user');
    }

    // ============================================
    // ACCESSORS (OPSIONAL)
    // ============================================
    
    /**
     * Accessor untuk field Nama
     * Memastikan field case-sensitive dapat diakses dengan benar
     */
    public function getNamaAttribute($value)
    {
        return $value;
    }
    
    /**
     * Accessor untuk field Username
     */
    public function getUsernameAttribute($value)
    {
        return $value;
    }

    // ============================================
    // CUSTOM METHODS (OPSIONAL - HELPER)
    // ============================================
    
    /**
     * Cek apakah user sudah melamar pekerjaan tertentu
     * 
     * @param int $idPekerjaan
     * @return bool
     */
    public function hasAppliedTo($idPekerjaan)
    {
        return $this->lamaran()
            ->where('id_pekerjaan', $idPekerjaan)
            ->exists();
    }

    /**
     * Dapatkan jumlah total lamaran user
     * 
     * @return int
     */
    public function getTotalLamaranAttribute()
    {
        return $this->lamaran()->count();
    }

    /**
     * Dapatkan foto profil atau default
     * 
     * @return string
     */
    public function getFotoProfilUrlAttribute()
    {
        if ($this->Foto_profil) {
            return asset('storage/' . $this->Foto_profil);
        }
        
        // Return default icon/image jika tidak ada foto
        return asset('images/default-avatar.png');
    }
}
