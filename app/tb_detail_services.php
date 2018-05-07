<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tb_detail_services extends Model
{
    protected $table ="tb_detail_services";
    protected $fillable = [
        'id_detail_service', 'id_pemesanan', 'id_service','jam_tanggal_dipesan','jam_tanggal_dikerjakan','jumlah_tamu','jumlah_pegawai','harga_satuan','jumlah_service',
    ];
}
