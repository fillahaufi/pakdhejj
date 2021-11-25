<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $fillable = [
        "nama",
        "img-path",
        "jenis",
        "isdingin",
        "harga",
    ];

    public function detailpesanans()
    {
        return $this->hasMany(DetailPesanan::class);
    }
}
