<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tb_pemesanans extends Model
{
    protected $table ="tb_pemesanans";
    protected $fillable = [
        'id_pemesanan','id_tamu', 'id_pegawai','tanggal_pemesanan','status_pemesanan','status_pembayaran','kode_checkIn',
    ];
}
