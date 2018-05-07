<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tb_detail_menus extends Model
{
    protected $table ="tb_detail_menus";
    protected $fillable = [
        'id_detail_menu', 'id_service', 'id_menu','jumlah_menu',
    ];
}
