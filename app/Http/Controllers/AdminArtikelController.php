<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Artikel;

class AdminArtikelController extends Controller
{
    public function index()
    {
        $artikel = Artikel::paginate(5);
        return view('/admin/artikel/artikel', ['artikel' => $artikel]);
    }

    public function tambah()
    {
        return view('/admin/artikel/artikel_tambah');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'judul_artikel' => 'required',
            'deskripsi' => 'required',
            'sumber' => 'required',
            'jenis_artikel' => 'required',
            'foto_tambahan' => 'required',
        ]);

        $file = $request->file('foto_tambahan');
        $ekstensi = $request->file('foto_tambahan')->getClientOriginalExtension();
        $tujuan_upload = 'foto_artikel';
        $namafoto = $request->judul_artikel."_".$request->jenis_artikel.".".$ekstensi;
        $file->move($tujuan_upload,$namafoto);


        Artikel::create([
            'judul_artikel' => $request->judul_artikel,
            'deskripsi' => $request->deskripsi,
            'sumber' => $request->sumber,
            'jenis_artikel' => $request->jenis_artikel,
            'foto_tambahan' => $namafoto
        ]);
        return redirect('admin/artikel')->with('msg', 'Data Telah Tersimpan');
    }   

    public function edit($id)
    {
        $artikel = Artikel::where('id', $id)->first();
        return view('/admin/artikel/artikel_edit', ['artikel' => $artikel]);
    }

    
    public function update(Request $request, $id)
    {
       $this->validate($request,[
        'judul_artikel' => 'required',
        'deskripsi' => 'required',
        'sumber' => 'required',
        'jenis_artikel' => 'required',
        'foto_tambahan' => 'required',
    ]);

    $artikel = Artikel::where('id', $id)->first();

    unlink(public_path("foto_artikel/".$artikel->foto_tambahan));

    $ekstensi = $request->file('foto_tambahan')->getClientOriginalExtension();
    $file = $request->file('foto_tambahan');
    $namafoto = $request->judul_artikel."_".$request->jenis_artikel.".".$ekstensi;

    $artikel->judul_artikel = $request->judul_artikel;
    $artikel->deskripsi = $request->deskripsi;
    $artikel->sumber = $request->sumber;
    $artikel->jenis_artikel = $request->jenis_artikel;
    $artikel->foto_tambahan = $namafoto;
    $artikel->save();

    $tujuan_upload = 'foto_artikel';
    $file->move($tujuan_upload,$namafoto);

    return redirect('admin/artikel')->with('msg', 'Data Telah Teredit');
    }

    public function destroy($id)
    {
        $artikel = Artikel::where('id', $id)->first();
        unlink(public_path("foto_artikel/".$anggota->foto_tambahan));
        $artikel->delete();
        return redirect('admin/artikel')->with('msg', 'Data Telah Terhapus');
   }

    public function search(Request $request)
    {
        $cari = $request->search;
        $datakeg = $request->datekeg;
        if(isset($cari)){
            $artikel = Artikel::where('judul_artikel','LIKE','%'.$cari.'%')
            ->orWhere('sumber','LIKE','%'.$cari.'%')
            ->paginate(5);
        }
        return view('/admin/artikel/artikel', ['artikel' => $artikel]);
    }
}
