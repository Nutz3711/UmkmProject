<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table = 'barang';
    protected $fillable =[
        'nama_barang',
        'harga_barang',
        'toko'
    ];
    use HasFactory;
}
