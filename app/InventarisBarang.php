<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InventarisBarang extends Model
{
    protected $table = 'inventaris_barangs';
	protected $fillable = ['nama_barang','satuan','jumlah','kondisi','sumber_barang'];
}
