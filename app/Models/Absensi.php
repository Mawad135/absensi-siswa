<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class absensi extends Model
{
    use HasFactory;

    protected $table = 'absensis';

    protected $fillable = [
        'tanggal_absen',
        'jam_absen',
        'status',
        'foto',
        'siswa_id',
        'guru_id',
        
    ];

    public function siswa()
    {
        return $this->belongsTo(Siswa::class, 'siswa_id');
    }


    public function guru()
    {
        return $this->belongsTo(Guru::class);
    }
}