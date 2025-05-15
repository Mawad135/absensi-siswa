<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class jurusan extends Model
{
    use HasFactory;

    protected $table = 'jurusans'; // Menyesuaikan dengan nama tabel

    protected $fillable = [
        'nama',
    ];
}