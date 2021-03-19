<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SuratKeluar extends Model
{
    protected $table = 'surat_keluars';
	protected $fillable = ['no_surat','nama_kegiatan','hal','tanggal_surat_keluar','tujuan'];
}
