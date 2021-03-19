<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataAnggota extends Model
{
    protected $table = 'data_anggotas';
	protected $fillable = ['npk','nim','nama','nama_lapangan',
    'tempat_lahir','tanggal_lahir','alamat_domisili','alamat_tinggal',
    'email','nomor_hp','foto','status_keaktifan','id_status'];
}
