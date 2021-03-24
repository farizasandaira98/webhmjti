<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\DataKegiatan;
class IndexController extends Controller
{
    public function index()
    {
        $kegiatan = DataKegiatan::all();
        $kegiatan2 = DataKegiatan::orderBy('tanggal_kegiatan', 'desc')->paginate(3);
        return view('index')
        ->with(compact('kegiatan'))
        ->with(compact('kegiatan2'));
    }
    public function internal()
    {
        $kegiatan = DataKegiatan::where("id_divisi","1")->orderBy('tanggal_kegiatan', 'desc')->paginate(3);
        return view('internal')
        ->with(compact('kegiatan'));
    }
    public function networking()
    {
        $kegiatan = DataKegiatan::where("id_divisi","3")->orderBy('tanggal_kegiatan', 'desc')->paginate(3);
        return view('networking')
        ->with(compact('kegiatan'));
    }
    public function sdd()
    {
        $kegiatan = DataKegiatan::where("id_divisi","2")->orderBy('tanggal_kegiatan', 'desc')->paginate(3);
        return view('sdd')
        ->with(compact('kegiatan'));
    }    
}
