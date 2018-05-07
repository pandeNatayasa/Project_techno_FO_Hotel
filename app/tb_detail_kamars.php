<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tb_detail_kamars extends Model
{
    protected $table ="tb_detail_kamars";
    protected $fillable = [
        'id_detail_kamar', 'id_kamar', 'id_inventori',
    ];
}
