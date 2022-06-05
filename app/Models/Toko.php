<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Toko extends Model
{
    protected $table = 'toko';
    protected $fillable = [
        'nama_toko',
        'daerah',
        'pemilik',
        'jenis_toko',
    ];
    use HasFactory;
}
