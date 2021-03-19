<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\DataKegiatan;

use App\Divisi;

class AdminKegiatanController extends Controller
{
    public function index()
    {
        $kegiatan = DataKegiatan::paginate(5);
        return view('/admin/kegiatan/kegiatan', ['kegiatan' => $kegiatan]);
    }

    public function tambah()
    {
        $stat = Divisi::all();
        return view('/admin/kegiatan/kegiatan_tambah')
        ->with(compact('stat'));
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'nama_kegiatan' => 'required',
            'deskripsi' => 'required',
            'tanggal_kegiatan' => 'required',
            'tempat_kegiatan' => 'required',
            'foto_kegiatan' => 'required',
            'id_divisi' => 'required',
            
        ]);

        foreach ($request->file('foto_kegiatan') as $image) {
            $namafile = $image->getClientOriginalName();
            $namaasli = pathinfo($namafile, PATHINFO_FILENAME);
            $ekstensi = $image->getClientOriginalExtension();
            $tujuan_upload = 'foto_kegiatan';
            $namafoto = $namaasli."_".$request->nama_kegiatan.".".$ekstensi;
            $image->move($tujuan_upload,$namafoto);
            $data[] = $namafoto;
        }


        DataKegiatan::create([
            'nama_kegiatan' => $request->nama_kegiatan,
            'deskripsi' => $request->deskripsi,
            'tanggal_kegiatan' => $request->tanggal_kegiatan,
            'tempat_kegiatan' => $request->tempat_kegiatan,
            'foto_kegiatan' => $namafoto = json_encode($data),
            'id_divisi' => $request->id_divisi
            
        ]);
        return redirect('admin/kegiatan')->with('msg', 'Data Telah Tersimpan');
    }   

    public function edit($id)
    {
        $stat = Divisi::all();
        $kegiatan = DataKegiatan::where('id', $id)->first();
        return view('/admin/kegiatan/kegiatan_edit', ['kegiatan' => $kegiatan])
        ->with(compact('stat'));
    }

    
    public function update(Request $request, $id)
    {
       $this->validate($request,[
        'nama_kegiatan' => 'required',
        'deskripsi' => 'required',
        'tanggal_kegiatan' => 'required',
        'tempat_kegiatan' => 'required',
        'foto_kegiatan' => 'required',
        'id_divisi' => 'required'
    ]);

       $kegiatan = DataKegiatan::where('id', $id)->first();
       $image = json_decode($kegiatan->foto_kegiatan);
       $length = count($image);
       for ($i = 0; $i < $length; $i++) {
           unlink(public_path("foto_kegiatan/".$image[$i]));
       }

       foreach ($request->file('foto_kegiatan') as $image) {
        $namafile = $image->getClientOriginalName();
        $namaasli = pathinfo($namafile, PATHINFO_FILENAME);
        $ekstensi = $image->getClientOriginalExtension();
        $tujuan_upload = 'foto_kegiatan';
        $namafoto = $namaasli."_".$request->nama_kegiatan.".".$ekstensi;
        $image->move($tujuan_upload,$namafoto);
        $data[] = $namafoto;
    }

    $kegiatan->nama_kegiatan = $request->nama_kegiatan;
    $kegiatan->deskripsi = $request->deskripsi;
    $kegiatan->tanggal_kegiatan = $request->tanggal_kegiatan;
    $kegiatan->tempat_kegiatan = $request->tempat_kegiatan;
    $kegiatan->foto_kegiatan = $namafoto = json_encode($data);
    $kegiatan->id_divisi = $request->id_divisi;
    $kegiatan->save();
    return redirect('admin/kegiatan')->with('msg', 'Data Telah Teredit');
    }

    public function destroy($id)
    {
       $kegiatan = DataKegiatan::where('id', $id)->first();
       $image = json_decode($kegiatan->foto_kegiatan);
       $length = count($image);
       for ($i = 0; $i < $length; $i++) {
           unlink(public_path("foto_kegiatan/".$image[$i]));
       }
       $kegiatan->delete();
       return redirect('admin/kegiatan')->with('msg', 'Data Telah Terhapus');
   }

    public function search(Request $request)
    {
        $cari = $request->search;
        $datakeg = $request->datekeg;
        if(isset($cari)){
            $kegiatan = DataKegiatan::where('nama_kegiatan','LIKE','%'.$cari.'%')
            ->orWhere('tempat_kegiatan','LIKE','%'.$cari.'%')
            ->paginate(5);
        }elseif(isset($datakeg)){
            $kegiatan = DataKegiatan::where('tanggal_kegiatan','LIKE','%'.$datakeg.'%')
            ->paginate(5);
        }elseif(isset($cari)&&isset($datakeg)){
            $kegiatan = DataKegiatan::where('nama_kegiatan','LIKE','%'.$cari.'%')
            ->where('tanggal_kegiatan','LIKE','%'.$datakeg.'%')
            ->paginate(5);    
        }
        
        return view('/admin/kegiatan/kegiatan', ['kegiatan' => $kegiatan]);
    }
}
