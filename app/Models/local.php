<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class local extends Model
{
    use HasFactory;

    protected $table = 'locals';

    protected $fillable = [
        'nama',
        'jurusan_id',
        'guru_id',
    ];

    public function jurusan()
    {
        return $this->belongsTo(Jurusan::class);
    }

    public function guru()
    {
        return $this->belongsTo(Guru::class);
    }
}