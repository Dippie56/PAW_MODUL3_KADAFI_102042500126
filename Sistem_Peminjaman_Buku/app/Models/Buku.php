<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;

    protected $table = 'buku';

    // TODO: Tentukan kolom tabel buku yang dapat diisi melalui mass assignment ($fillable)
    protected $fillable = [
        'ID_buku',
        'Judul_Buku',
        'Penulis',
        'Penerbit',
        'Tahun_Terbit',
        'Stok',
    ];

    public function peminjaman()
    {
        return $this->hasMany(Peminjaman::class, 'buku_id');
    }
}
