<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Lamaran extends Model
{
    // ============================================
    // KONFIGURASI DATABASE
    // ============================================
    
    protected $table = 'lamaran';
    protected $primaryKey = 'id_lamaran';
    public $timestamps = true; // created_at & updated_at

    // ============================================
    // MASS ASSIGNMENT
    // ============================================
    
    protected $fillable = [
        'id_user',
        'id_pekerjaan',
        'Status', // ENUM: 'Pending', 'Diterima', 'Ditolak'
        'Tanggal_terkirim',
    ];

    // ============================================
    // CASTING & DATES
    // ============================================
    
    /**
     * Cast attributes ke tipe data tertentu
     */
    protected $casts = [
        'Tanggal_terkirim' => 'datetime',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    // ============================================
    // ELOQUENT RELATIONSHIPS
    // ============================================
    
    /**
     * Relasi Many-to-One dengan User
     * Setiap lamaran dimiliki oleh satu user
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id_user');
    }

    /**
     * Relasi Many-to-One dengan Pekerjaan
     * Setiap lamaran untuk satu pekerjaan
     */
    public function pekerjaan()
    {
        return $this->belongsTo(Pekerjaan::class, 'id_pekerjaan', 'id_pekerjaan');
    }

    // ============================================
    // SCOPES (Query Filters)
    // ============================================
    
    /**
     * Scope untuk filter lamaran dengan status Pending
     * 
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopePending($query)
    {
        return $query->where('Status', 'Pending');
    }

    /**
     * Scope untuk filter lamaran dengan status Diterima
     * 
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeDiterima($query)
    {
        return $query->where('Status', 'Diterima');
    }

    /**
     * Scope untuk filter lamaran dengan status Ditolak
     * 
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeDitolak($query)
    {
        return $query->where('Status', 'Ditolak');
    }

    /**
     * Scope untuk filter lamaran berdasarkan user
     * 
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param int $userId
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeByUser($query, $userId)
    {
        return $query->where('id_user', $userId);
    }

    /**
     * Scope untuk filter lamaran berdasarkan pekerjaan
     * 
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param int $pekerjaanId
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeByPekerjaan($query, $pekerjaanId)
    {
        return $query->where('id_pekerjaan', $pekerjaanId);
    }

    // ============================================
    // ACCESSORS & MUTATORS
    // ============================================
    
    /**
     * Accessor untuk mendapatkan status dengan badge color
     * 
     * @return array
     */
    public function getStatusBadgeAttribute()
    {
        $badges = [
            'Pending' => [
                'class' => 'bg-warning text-dark',
                'icon' => 'bi-clock-history',
                'text' => 'Pending'
            ],
            'Diterima' => [
                'class' => 'bg-success',
                'icon' => 'bi-check-circle',
                'text' => 'Diterima'
            ],
            'Ditolak' => [
                'class' => 'bg-danger',
                'icon' => 'bi-x-circle',
                'text' => 'Ditolak'
            ],
        ];

        return $badges[$this->Status] ?? [
            'class' => 'bg-secondary',
            'icon' => 'bi-question-circle',
            'text' => 'Unknown'
        ];
    }

    /**
     * Accessor untuk format tanggal terkirim yang human-readable
     * 
     * @return string
     */
    public function getTanggalTerkirimFormattedAttribute()
    {
        return $this->Tanggal_terkirim 
            ? Carbon::parse($this->Tanggal_terkirim)->format('d F Y, H:i') 
            : '-';
    }

    /**
     * Accessor untuk format tanggal terkirim relatif (e.g., "2 hari yang lalu")
     * 
     * @return string
     */
    public function getTanggalTerkirimHumanAttribute()
    {
        return $this->Tanggal_terkirim 
            ? Carbon::parse($this->Tanggal_terkirim)->diffForHumans() 
            : '-';
    }

    // ============================================
    // CUSTOM METHODS
    // ============================================
    
    /**
     * Cek apakah lamaran masih pending
     * 
     * @return bool
     */
    public function isPending()
    {
        return $this->Status === 'Pending';
    }

    /**
     * Cek apakah lamaran diterima
     * 
     * @return bool
     */
    public function isDiterima()
    {
        return $this->Status === 'Diterima';
    }

    /**
     * Cek apakah lamaran ditolak
     * 
     * @return bool
     */
    public function isDitolak()
    {
        return $this->Status === 'Ditolak';
    }

    /**
     * Update status lamaran
     * 
     * @param string $status ('Pending', 'Diterima', 'Ditolak')
     * @return bool
     */
    public function updateStatus($status)
    {
        $validStatuses = ['Pending', 'Diterima', 'Ditolak'];
        
        if (!in_array($status, $validStatuses)) {
            return false;
        }

        return $this->update(['Status' => $status]);
    }
}
