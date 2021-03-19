<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Pengeluaran;

use App\Exports\PengeluaranExport;

use Maatwebsite\Excel\Facades\Excel;

use App\Http\Controllers\Controller;

class AdminPengeluaranController extends Controller
{
    public function index()
    {
        $pengeluaran = Pengeluaran::paginate(5);
        $sumpengeluaran = Pengeluaran::all()->sum('jumlah_pengeluaran');
        return view('/admin/pengeluaran/pengeluaran', ['pengeluaran' => $pengeluaran])
        ->with(compact('sumpengeluaran'));
    }

    public function tambah()
    {
        return view('/admin/pengeluaran/pengeluaran_tambah');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'nomor_nota' => 'required',
            'jumlah_pengeluaran' => 'required',
            'tanggal_pengeluaran' => 'required',
            'keperluan' => 'required',
            'nota' => 'required',
            'periode' => 'required',
        ]);

        $file = $request->file('nota');
        $namaasli = $request->file('nota')->getClientOriginalName();
        $ekstensi = $request->file('nota')->getClientOriginalExtension();
        $tujuan_upload = 'foto_nota_keluar';
        $namafoto = $namaasli."_".$request->tanggal_pengeluaran."_".$request->periode.".".$ekstensi;
        $file->move($tujuan_upload,$namafoto);

        Pengeluaran::create([
            'nomor_nota' => $request->nomor_nota,
            'jumlah_pengeluaran' => $request->jumlah_pengeluaran,
            'tanggal_pengeluaran' => $request->tanggal_pengeluaran,
            'keperluan' => $request->keperluan,
            'nota' => $namafoto,
            'periode' => $request->periode,
        ]);
        return redirect('admin/pengeluaran')->with('msg', 'Data Telah Tersimpan');
    }   

    public function edit($id)
    {
        $pengeluaran = Pengeluaran::where('id', $id)->first();
        return view('/admin/pengeluaran/pengeluaran_edit', ['pengeluaran' => $pengeluaran]);
    }

    
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'nomor_nota' => 'required',
            'jumlah_pengeluaran' => 'required',
            'tanggal_pengeluaran' => 'required',
            'keperluan' => 'required',
            'nota' => 'required',
            'periode' => 'required',
        ]);

        $pengeluaran = Pengeluaran::where('id', $id)->first();

        unlink(public_path("foto_nota_keluar/".$pengeluaran->nota));

        $ekstensi = $request->file('nota')->getClientOriginalExtension();
        $namaasli = $request->file('nota')->getClientOriginalName();
        $file = $request->file('nota');
        $namafoto = $namaasli."_".$request->tanggal_pengeluaran."_".$request->periode.".".$ekstensi;
        
        
        $pengeluaran->nomor_nota = $request->nomor_nota;
        $pengeluaran->jumlah_pengeluaran = $request->jumlah_pengeluaran;
        $pengeluaran->tanggal_pengeluaran = $request->tanggal_pengeluaran;
        $pengeluaran->keperluan = $request->keperluan;
        $pengeluaran->nota = $namafoto;
        $pengeluaran->periode = $request->periode;
        $pengeluaran->save();

        $tujuan_upload = 'foto_nota_keluar';
        $file->move($tujuan_upload,$namafoto);

        return redirect('admin/pengeluaran')->with('msg', 'Data Telah Teredit');
    }

    public function destroy($id)
    {
        $pengeluaran = Pengeluaran::where('id', $id)->first();
        unlink(public_path("foto_nota_keluar/".$pengeluaran->nota));
        $pemasukan->delete();
        return redirect('admin/pengeluaran')->with('msg', 'Data Telah Terhapus');
    }

    public function search(Request $request)
    {
        $cari = $request->search;
        $datakeg = $request->datekeg;
        $pengeluaran = Pengeluaran::where('keperluan','LIKE','%'.$cari.'%')
        ->orWhere('tanggal_pengeluaran','LIKE','%'.$datakeg.'%')
        ->orWhere('jumlah_pengeluaran','LIKE','%'.$cari.'%')
        ->orWhere('nomor_nota','LIKE','%'.$cari.'%')
        ->paginate(5);
        return view('/admin/pengeluaran/pengeluaran', ['pengeluaran' => $pengeluaran]);
    }

    public function export_excel()
    {
        return Excel::download(new PengeluaranExport, 'pengeluaran_hmjti.xlsx');
    }
}
