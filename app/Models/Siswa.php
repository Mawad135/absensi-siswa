<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class siswa extends Model
{
    use HasFactory;

    protected $table = 'siswas';

    protected $fillable = [
        'nama',
        'nisn',
        'alamat',
        'jk',
        'no_hp',
        'username',
        'password',
        'nama_wm',
        'nohp_wm',
        'alamat_wm',
        'local_id',
        'user_id',
    ];

    protected $hidden = [
        'password',
    ];

    protected $casts = [
        'password' => 'hashed',
    ];

    public function local()
    {
        return $this->belongsTo(Local::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}