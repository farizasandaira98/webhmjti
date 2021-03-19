<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\SuratMasuk;

use PDF;

class AdminSuratMasukController extends Controller
{
    public function index()
    {
        $suratmasuk = SuratMasuk::paginate(5);
        return view('/admin/suratmasuk/suratmasuk', ['suratmasuk' => $suratmasuk]);
    }

    public function tambah()
    {
        return view('/admin/suratmasuk/suratmasuk_tambah');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'perihal_surat' => 'required',
            'asal_surat' => 'required',
            'tanggal_surat' => 'required',
            'no_surat' => 'required',
        ]);

        SuratMasuk::create([
            'perihal_surat' => $request->perihal_surat,
            'asal_surat' => $request->asal_surat,
            'tanggal_surat' => $request->tanggal_surat,
            'no_surat' => $request->no_surat,
        ]);
        return redirect('admin/suratmasuk')->with('msg', 'Data Telah Tersimpan');
    }   

    public function edit($id)
    {
        $suratmasuk = SuratMasuk::where('id', $id)->first();
        return view('/admin/suratmasuk/suratmasuk_edit', ['suratmasuk' => $suratmasuk]);
    }

    
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'perihal_surat' => 'required',
            'asal_surat' => 'required',
            'tanggal_surat' => 'required',
            'no_surat' => 'required',
        ]);

        $suratmasuk = SuratMasuk::where('id', $id)->first();

        $suratmasuk->perihal_surat = $request->perihal_surat;
        $suratmasuk->asal_surat = $request->asal_surat;
        $suratmasuk->tanggal_surat = $request->tanggal_surat;
        $suratmasuk->no_surat = $request->no_surat;
        $suratmasuk->save();

        return redirect('admin/suratmasuk')->with('msg', 'Data Telah Teredit');
    }

    public function destroy($id)
    {
        $suratmasuk = SuratMasuk::where('id', $id)->first();
        $suratmasuk->delete();
        return redirect('admin/suratmasuk')->with('msg', 'Data Telah Terhapus');
    }

    public function search(Request $request)
    {
        $cari = $request->search;
        $datakeg = $request->datekeg;
        $suratmasuk = SuratMasuk::where('perihal_surat','LIKE','%'.$cari.'%')
        ->orWhere('asal_surat','LIKE','%'.$cari.'%')
        ->orWhere('no_surat','LIKE','%'.$cari.'%')
        ->orwhere('tanggal_surat','LIKE','%'.$datakeg.'%')
        ->paginate(5);
        return view('/admin/suratmasuk/suratmasuk', ['suratmasuk' => $suratmasuk]);
    }

    public function cetak_pdf()
    {
        $suratmasuk = SuratMasuk::all();
        $pdf = PDF::loadview('/admin/suratmasuk/suratmasuk_cetak',['suratmasuk'=>$suratmasuk]);
        return $pdf->stream();
    } 
}
