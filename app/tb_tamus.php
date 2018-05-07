<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tb_tamus extends Model
{
    protected $table ="tb_tamus";
    protected $fillable = [
        'id_tamu', 'no_identitas', 'nama_lengkap','nama_panggilan','alamat','no_hp','jenis_kelamin','tanggal_lahir',
    ];
}
