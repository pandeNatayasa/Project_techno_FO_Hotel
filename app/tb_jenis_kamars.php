<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tb_jenis_kamars extends Model
{
    protected $table ="tb_jenis_kamars";
    protected $fillable = [
        'id_jenis_kamar', 'jenis_kamar', 'pajak',
    ];
}
