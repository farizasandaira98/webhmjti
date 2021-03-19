<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SuratMasuk extends Model
{
    protected $table = 'surat_masuks';
	protected $fillable = ['perihal_surat','asal_surat','tanggal_surat','no_surat'];
}
