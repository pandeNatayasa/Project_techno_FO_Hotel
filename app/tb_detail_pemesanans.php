<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tb_detail_pemesanans extends Model
{
    protected $table ="tb_detail_pemesanans";
    protected $fillable = [
        'id_detail_pemesanan', 'id_pemesanan', 'id_kamar','tanggal_checkin','tanggal_checkout','harga',
    ];
}
