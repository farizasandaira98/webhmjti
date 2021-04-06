<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\DataKegiatan;
use App\Artikel;
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
    public function kegiatan()
    {
        $kegiatan = DataKegiatan::paginate(5);
        return view('kegiatan')
        ->with(compact('kegiatan'));
    }
    public function kegiatansearch(Request $request)
    {
        $cari = $request->search;
        $kegiatan = DataKegiatan::where('nama_kegiatan','LIKE','%'.$cari.'%')
            ->orWhere('tempat_kegiatan','LIKE','%'.$cari.'%')
            ->paginate(5);
        return view('kegiatan', ['kegiatan' => $kegiatan]);
    }
    public function kegiatanreadmore($id)
    {
        $kegiatan = DataKegiatan::where('id', $id)->first();
         return view('kegiatanreadmore')
        ->with(compact('kegiatan'));
    }
    public function artikel()
    {
        $artikel = Artikel::paginate(5);
        $berita = Artikel::where("jenis_artikel","berita")->count("jenis_artikel");
        $tutorial = Artikel::where("jenis_artikel","tutorial dan info")->count("jenis_artikel");
        return view('artikel')
        ->with(compact('artikel'))
        ->with(compact('berita'))
        ->with(compact('tutorial'));
    }
    public function artikelsearch(Request $request)
    {

        $cari = $request->search;
        $artikel = Artikel::where('judul_artikel','LIKE','%'.$cari.'%')
            ->orWhere('sumber','LIKE','%'.$cari.'%')
            ->paginate(5);
        $berita = Artikel::where("jenis_artikel","berita")->count("jenis_artikel");
        $tutorial = Artikel::where("jenis_artikel","tutorial dan info")->count("jenis_artikel");
        return view('artikel')
        ->with(compact('artikel'))
        ->with(compact('berita'))
        ->with(compact('tutorial'));
    }
    public function artikelreadmore($id)
    {
        $artikel = Artikel::where('id', $id)->first();
        $berita = Artikel::where("jenis_artikel","berita")->count("jenis_artikel");
        $tutorial = Artikel::where("jenis_artikel","tutorial dan info")->count("jenis_artikel");
        return view('artikelreadmore')
        ->with(compact('artikel'))
        ->with(compact('berita'))
        ->with(compact('tutorial'));
    }
    public function artikelberita()
    {
        $artikel = Artikel::where("jenis_artikel","berita")->paginate(5);
        $berita = Artikel::where("jenis_artikel","berita")->count("jenis_artikel");
        $tutorial = Artikel::where("jenis_artikel","tutorial dan info")->count("jenis_artikel");
        return view('artikel')
        ->with(compact('artikel'))
        ->with(compact('berita'))
        ->with(compact('tutorial'));
    }
    public function artikeltutorial()
    {
        $artikel = Artikel::where("jenis_artikel","tutorial dan info")->paginate(5);
        $berita = Artikel::where("jenis_artikel","berita")->count("jenis_artikel");
        $tutorial = Artikel::where("jenis_artikel","tutorial dan info")->count("jenis_artikel");
        return view('artikel')
        ->with(compact('artikel'))
        ->with(compact('berita'))
        ->with(compact('tutorial'));
    }

    public function galeri()
    {
        $kegiatan = DataKegiatan::all();
        return view('galeri')
        ->with(compact('kegiatan'));
    }
    public function galericari(Request $request)
    {

      $cari = $request->search;
      $kegiatan = DataKegiatan::where('nama_kegiatan','LIKE','%'.$cari.'%')
          ->orWhere('tempat_kegiatan','LIKE','%'.$cari.'%')
          ->paginate(5);
      return view('galeri', ['kegiatan' => $kegiatan]);
    }
    public function galerimore($id)
    {
        $kegiatan = DataKegiatan::where('id', $id)->first();
        return view('moregaleri')
        ->with(compact('kegiatan'));
    }
}
