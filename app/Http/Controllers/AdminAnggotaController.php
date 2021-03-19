<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\DataAnggota;

use App\StatusAnggota;

use PDF;

class AdminAnggotaController extends Controller
{
    public function index()
    {
        $anggota = DataAnggota::paginate(5);
        return view('/admin/anggota/anggota', ['anggota' => $anggota]);
    }

    public function tambah()
    {
        $stat = StatusAnggota::all();
        return view('/admin/anggota/anggota_tambah')
        ->with(compact('stat'));
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'npk' => 'required',
            'nim' => 'required',
            'nama' => 'required',
            'nama_lapangan' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'alamat_domisili' => 'required',
            'alamat_tinggal' => 'required',
            'email' => 'required',
            'nomor_hp' => 'required',
            'foto' => 'required',
            'status_keaktifan' => 'required',
            'id_status' => 'required'
        ]);

        $file = $request->file('foto');
        $ekstensi = $request->file('foto')->getClientOriginalExtension();
        $tujuan_upload = 'foto_anggota';
        $namafoto = $request->nim."_".$request->nama.".".$ekstensi;
        $file->move($tujuan_upload,$namafoto);

        DataAnggota::create([
            'npk' => $request->npk,
            'nim' => $request->nim,
            'nama' => $request->nama,
            'nama_lapangan' => $request->nama_lapangan,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'alamat_domisili' => $request->alamat_domisili,
            'alamat_tinggal' => $request->alamat_tinggal,
            'email' => $request->email,
            'nomor_hp' => $request->nomor_hp,
            'foto' => $namafoto,
            'status_keaktifan' => $request->status_keaktifan,
            'id_status' => $request->id_status
            
        ]);
        return redirect('admin/anggota')->with('msg', 'Data Telah Tersimpan');
    }   

    public function edit($id)
    {
        $stat = StatusAnggota::all();
        $anggota = DataAnggota::where('id', $id)->first();
        return view('/admin/anggota/anggota_edit', ['anggota' => $anggota])
        ->with(compact('stat'));
    }

    
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'npk' => 'required',
            'nim' => 'required',
            'nama' => 'required',
            'nama_lapangan' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'alamat_domisili' => 'required',
            'alamat_tinggal' => 'required',
            'email' => 'required',
            'nomor_hp' => 'required',
            'foto' => 'required',
            'status_keaktifan' => 'required',
            'id_status' => 'required'
        ]);

        $anggota = DataAnggota::where('id', $id)->first();

        unlink(public_path("foto_anggota/".$anggota->foto));

        $ekstensi = $request->file('foto')->getClientOriginalExtension();
        $file = $request->file('foto');
        $namafoto = $request->nim."_".$request->nama.".".$ekstensi;

        $anggota->npk = $request->npk;
        $anggota->nim = $request->nim;
        $anggota->nama = $request->nama;
        $anggota->nama_lapangan = $request->nama_lapangan;
        $anggota->tempat_lahir = $request->tempat_lahir;
        $anggota->tanggal_lahir = $request->tanggal_lahir;
        $anggota->alamat_domisili = $request->alamat_domisili;
        $anggota->alamat_tinggal = $request->alamat_tinggal;
        $anggota->email = $request->email;
        $anggota->nomor_hp = $request->nomor_hp;
        $anggota->foto = $namafoto;
        $anggota->status_keaktifan = $request->status_keaktifan;
        $anggota->id_status = $request->id_status;
        $anggota->save();

        $tujuan_upload = 'foto_anggota';
        $file->move($tujuan_upload,$namafoto);

        return redirect('admin/anggota')->with('msg', 'Data Telah Teredit');
    }

    public function destroy($id)
    {
        $anggota = DataAnggota::where('id', $id)->first();
        unlink(public_path("foto_anggota/".$anggota->foto));
        $anggota->delete();
        return redirect('admin/anggota')->with('msg', 'Data Telah Terhapus');
    }

    public function search(Request $request)
    {
        $cari = $request->search;
        $anggota = DataAnggota::where('nama','LIKE','%'.$cari.'%')
        ->orWhere('nim','LIKE','%'.$cari.'%')
        ->orWhere('npk','LIKE','%'.$cari.'%')
        ->orWhere('tempat_lahir','LIKE','%'.$cari.'%')
        ->orWhere('status_keaktifan','LIKE','%'.$cari.'%')
        ->paginate(5);
        return view('/admin/anggota/anggota', ['anggota' => $anggota]);
    }

    public function cetak_pdf()
    {
        $anggota = DataAnggota::all();
        $pdf = PDF::loadview('/admin/anggota/anggota_cetak',['anggota'=>$anggota]);
        return $pdf->stream();
    }
}
