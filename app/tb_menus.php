<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tb_menus extends Model
{
    protected $table ="tb_menus";
    protected $fillable = [
        'id_menu', 'nama_menu', 'waktu_pembuatan','harga',
    ];
}
