<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Pemasukan;

use App\Exports\PemasukanExport;

use Maatwebsite\Excel\Facades\Excel;

use App\Http\Controllers\Controller;

class AdminPemasukanController extends Controller
{
    public function index()
    {
        $pemasukan = Pemasukan::paginate(5);
        $sumpemasukan = Pemasukan::all()->sum('jumlah_pemasukan');
        return view('/admin/pemasukan/pemasukan', ['pemasukan' => $pemasukan])
        ->with(compact('sumpemasukan'));
    }

    public function tambah()
    {
        return view('/admin/pemasukan/pemasukan_tambah');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'nomor_nota' => 'required',
            'jumlah_pemasukan' => 'required',
            'tanggal_pemasukan' => 'required',
            'sumber_dana' => 'required',
            'nota' => 'required',
            'periode' => 'required',
        ]);

        $file = $request->file('nota');
        $namaasli = $request->file('nota')->getClientOriginalName();
        $ekstensi = $request->file('nota')->getClientOriginalExtension();
        $tujuan_upload = 'foto_nota_masuk';
        $namafoto = $namaasli."_".$request->tanggal_pemasukan."_".$request->periode.".".$ekstensi;
        $file->move($tujuan_upload,$namafoto);

        Pemasukan::create([
            'nomor_nota' => $request->nomor_nota,
            'jumlah_pemasukan' => $request->jumlah_pemasukan,
            'tanggal_pemasukan' => $request->tanggal_pemasukan,
            'sumber_dana' => $request->sumber_dana,
            'nota' => $namafoto,
            'periode' => $request->periode,
        ]);
        return redirect('admin/pemasukan')->with('msg', 'Data Telah Tersimpan');
    }   

    public function edit($id)
    {
        $pemasukan = Pemasukan::where('id', $id)->first();
        return view('/admin/pemasukan/pemasukan_edit', ['pemasukan' => $pemasukan]);
    }

    
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'nomor_nota' => 'required',
            'jumlah_pemasukan' => 'required',
            'tanggal_pemasukan' => 'required',
            'sumber_dana' => 'required',
            'nota' => 'required',
            'periode' => 'required',
        ]);

        $pemasukan = Pemasukan::where('id', $id)->first();

        unlink(public_path("foto_nota_masuk/".$pemasukan->nota));

        $ekstensi = $request->file('nota')->getClientOriginalExtension();
        $namaasli = $request->file('nota')->getClientOriginalName();
        $file = $request->file('nota');
        $namafoto = $namaasli."_".$request->tanggal_pemasukan."_".$request->periode.".".$ekstensi;
        
        
        $pemasukan->nomor_nota = $request->nomor_nota;
        $pemasukan->jumlah_pemasukan = $request->jumlah_pemasukan;
        $pemasukan->tanggal_pemasukan = $request->tanggal_pemasukan;
        $pemasukan->sumber_dana = $request->sumber_dana;
        $pemasukan->nota = $namafoto;
        $pemasukan->periode = $request->periode;
        $pemasukan->save();

        $tujuan_upload = 'foto_nota_masuk';
        $file->move($tujuan_upload,$namafoto);

        return redirect('admin/pemasukan')->with('msg', 'Data Telah Teredit');
    }

    public function destroy($id)
    {
        $pemasukan = Pemasukan::where('id', $id)->first();
        unlink(public_path("foto_nota_masuk/".$pemasukan->nota));
        $pemasukan->delete();
        return redirect('admin/pemasukan')->with('msg', 'Data Telah Terhapus');
    }

    public function search(Request $request)
    {
        $cari = $request->search;
        $datakeg = $request->datekeg;
        $pemasukan = Pemasukan::where('sumber_dana','LIKE','%'.$cari.'%')
        ->orWhere('tanggal_pemasukan','LIKE','%'.$datakeg.'%')
        ->orWhere('jumlah_pemasukan','LIKE','%'.$cari.'%')
        ->orWhere('nomor_nota','LIKE','%'.$cari.'%')
        ->paginate(5);
        return view('/admin/pemasukan/pemasukan', ['pemasukan' => $pemasukan]);
    }

    public function export_excel()
    {
        return Excel::download(new PemasukanExport, 'pemasukan_hmjti.xlsx');
    }
}
