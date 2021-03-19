<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pemasukan extends Model
{
    protected $table = 'pemasukans';
	protected $fillable = ['nomor_nota','jumlah_pemasukan','tanggal_pemasukan','sumber_dana',
    'nota','periode'];
}
