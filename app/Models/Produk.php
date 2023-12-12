<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table = 'produk'; 
    protected $fillable = ['kode_produk','nama_produk','stok_produk','harga_jual','harga_beli'];

    public $timestamps = true;

    protected $dates = [
        'created_at',
        'updated_at',
    ];
}
