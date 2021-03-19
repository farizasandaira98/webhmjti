<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataKegiatan extends Model
{
    protected $table = 'data_kegiatans';
	protected $fillable = ['nama_kegiatan','deskripsi','tanggal_kegiatan','tempat_kegiatan',
    'foto_kegiatan','id_divisi']; 
}
