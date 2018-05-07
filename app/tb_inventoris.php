<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tb_inventoris extends Model
{
    protected $table ="tb_inventoris";
    protected $fillable = [
        'id_inventori', 'nama_barang', 'jumlah',
    ];
}
