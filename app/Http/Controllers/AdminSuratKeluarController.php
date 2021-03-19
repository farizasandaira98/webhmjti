<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\SuratKeluar;

use PDF;

class AdminSuratKeluarController extends Controller
{
    public function index()
    {
        $suratkeluar = SuratKeluar::paginate(5);
        return view('/admin/suratkeluar/suratkeluar', ['suratkeluar' => $suratkeluar]);
    }

    public function tambah()
    {
        return view('/admin/suratkeluar/suratkeluar_tambah');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'no_surat' => 'required',
            'nama_kegiatan' => 'required',
            'hal' => 'required',
            'tanggal_surat_keluar' => 'required',
            'tujuan' => 'required',
        ]);

        SuratKeluar::create([
            'no_surat' => $request->no_surat,
            'nama_kegiatan' => $request->nama_kegiatan,
            'hal' => $request->hal,
            'tanggal_surat_keluar' => $request->tanggal_surat_keluar,
            'tujuan' => $request->tujuan,
        ]);
        return redirect('admin/suratkeluar')->with('msg', 'Data Telah Tersimpan');
    }   

    public function edit($id)
    {
        $suratkeluar = SuratKeluar::where('id', $id)->first();
        return view('/admin/suratkeluar/suratkeluar_edit', ['suratkeluar' => $suratkeluar]);
    }

    
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'no_surat' => 'required',
            'nama_kegiatan' => 'required',
            'hal' => 'required',
            'tanggal_surat_keluar' => 'required',
            'tujuan' => 'required',
        ]);

        $suratkeluar = SuratKeluar::where('id', $id)->first();

        $suratkeluar->no_surat = $request->no_surat;
        $suratkeluar->nama_kegiatan = $request->nama_kegiatan;
        $suratkeluar->hal = $request->hal;
        $suratkeluar->tanggal_surat_keluar = $request->tanggal_surat_keluar;
        $suratkeluar->tujuan = $request->tujuan;
        $suratkeluar->save();

        return redirect('admin/suratkeluar')->with('msg', 'Data Telah Teredit');
    }

    public function destroy($id)
    {
        $suratkeluar = SuratKeluar::where('id', $id)->first();
        $suratkeluar->delete();
        return redirect('admin/suratkeluar')->with('msg', 'Data Telah Terhapus');
    }

    public function search(Request $request)
    {
        $cari = $request->search;
        $datakeg = $request->datekeg;
        $suratkeluar = SuratKeluar::where('nama_kegiatan','LIKE','%'.$cari.'%')
        ->orWhere('hal','LIKE','%'.$cari.'%')
        ->orWhere('no_surat','LIKE','%'.$cari.'%')
        ->orWhere('tujuan','LIKE','%'.$cari.'%')
        ->orwhere('tanggal_surat_keluar','LIKE','%'.$datakeg.'%')
        ->paginate(5);
        return view('/admin/suratkeluar/suratkeluar', ['suratkeluar' => $suratkeluar]);
    }

    public function cetak_pdf()
    {
        $suratkeluar = SuratKeluar::all();
        $pdf = PDF::loadview('/admin/suratkeluar/suratkeluar_cetak',['suratkeluar'=>$suratkeluar]);
        return $pdf->stream();
    } 
}
