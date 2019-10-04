<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bunga extends Model
{
    protected $table = 'bunga';
    protected $fillable = [
        'kd_bunga',
        'nama_bunga',
        'stok',
        'harga'
    ];
}
    