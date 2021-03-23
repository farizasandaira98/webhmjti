<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\DataKegiatan;
class IndexController extends Controller
{
    public function index()
    {
        $kegiatan = DataKegiatan::all();
        $kegiatan2 = DataKegiatan::orderBy('tanggal_kegiatan', 'asc')->paginate(3);
        return view('index')
        ->with(compact('kegiatan'))
        ->with(compact('kegiatan2'));
    } 
}
