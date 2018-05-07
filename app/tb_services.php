<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tb_services extends Model
{
    protected $table ="tb_services";
    protected $fillable = [
        'id_service', 'jenis_service', 'harga_service',
    ];
}
