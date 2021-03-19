<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\InventarisBarang;

use PDF;

class AdminInventarisBarangController extends Controller
{
    public function index()
    {
        $inventaris = InventarisBarang::paginate(5);
        return view('/admin/inventaris/inventaris', ['inventaris' => $inventaris]);
    }

    public function tambah()
    {
        return view('/admin/inventaris/inventaris_tambah');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'nama_barang' => 'required',
            'satuan' => 'required',
            'jumlah' => 'required',
            'kondisi' => 'required',
            'sumber_barang' => 'required',
        ]);

        InventarisBarang::create([
            'nama_barang' => $request->nama_barang,
            'satuan' => $request->satuan,
            'jumlah' => $request->jumlah,
            'kondisi' => $request->kondisi,
            'sumber_barang' => $request->sumber_barang
        ]);
        return redirect('admin/inventaris')->with('msg', 'Data Telah Tersimpan');
    }   

    public function edit($id)
    {
        $inventaris = InventarisBarang::where('id', $id)->first();
        return view('/admin/inventaris/inventaris_edit', ['inventaris' => $inventaris]);
    }

    
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'nama_barang' => 'required',
            'satuan' => 'required',
            'jumlah' => 'required',
            'kondisi' => 'required',
            'sumber_barang' => 'required',
        ]);

        $inventaris = InventarisBarang::where('id', $id)->first();

        $inventaris->nama_barang = $request->nama_barang;
        $inventaris->satuan = $request->satuan;
        $inventaris->jumlah = $request->jumlah;
        $inventaris->kondisi = $request->kondisi;
        $inventaris->sumber_barang = $request->sumber_barang;
        $inventaris->save();

        return redirect('admin/inventaris')->with('msg', 'Data Telah Teredit');
    }

    public function destroy($id)
    {
        $inventaris = InventarisBarang::where('id', $id)->first();
        $inventaris->delete();
        return redirect('admin/inventaris')->with('msg', 'Data Telah Terhapus');
    }

    public function search(Request $request)
    {
        $cari = $request->search;
        $inventaris = InventarisBarang::where('nama_barang','LIKE','%'.$cari.'%')
        ->orWhere('kondisi','LIKE','%'.$cari.'%')
        ->orWhere('sumber_barang','LIKE','%'.$cari.'%')
        ->paginate(5);
        return view('/admin/inventaris/inventaris', ['inventaris' => $inventaris]);
    }

    public function cetak_pdf()
    {
        $inventaris = InventarisBarang::all();
        $pdf = PDF::loadview('/admin/inventaris/inventaris_cetak',['inventaris'=>$inventaris]);
        return $pdf->stream();
    } 
}
