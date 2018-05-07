<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tb_kamars extends Model
{
    protected $table ="tb_kamars";
    protected $fillable = [
        'id_kamar', 'id_jenis_kamar', 'nomor_kamar','harga_kamar','status_kamar','lantai',
    ];
}
