<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    protected $table = 'artikels';
	protected $fillable = ['judul_artikel','deskripsi','sumber','jenis_artikel','foto_tambahan']; 
}
