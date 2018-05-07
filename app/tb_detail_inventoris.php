<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tb_detail_inventoris extends Model
{
    protected $table ="tb_detail_inventoris";
    protected $fillable = [
        'id_detail_inventori', 'id_detail_kamar', 'id_pegawai','tanggal','waktu','status','keterangan',
    ];
}
