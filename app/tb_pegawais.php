<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tb_pegawais extends Model
{
    protected $table ="tb_pegawais";
    protected $fillable = [
        'id_pegawai', 'no_identitas','nama_lengkap','alamat','no_hp','jenis_kelamin','username','password','jabatan',
    ];
}
