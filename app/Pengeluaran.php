<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengeluaran extends Model
{
    protected $table = 'pengeluarans';
	protected $fillable = ['nomor_nota','jumlah_pengeluaran','tanggal_pengeluaran','keperluan',
    'nota','periode'];
}
