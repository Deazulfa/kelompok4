<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = 'kategori'; 
    protected $fillable = ['kode_kategori','nama_kategori'];

    public $timestamps = true;

    protected $dates = [
        'created_at',
        'updated_at',
    ];
}
