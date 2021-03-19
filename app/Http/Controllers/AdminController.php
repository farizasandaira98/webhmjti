<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\DataAnggota;
use App\DataKegiatan;
use App\Artikel;
use App\SuratMasuk;
use App\Suratkeluar;
use App\Pemasukan;
use App\Pengeluaran;
use App\InventarisBarang;
use App\User;

class AdminController extends Controller
{
    public function index()
    {
        $sumanggotainti = DataAnggota::where('id_status','2')->count('nim');
        $sumpurna = DataAnggota::where('id_status','1')->count('nim');
        $sumanggotaaktif = DataAnggota::where('status_keaktifan','aktif')->count('nim');
        $sumkegiatan = DataKegiatan::all()->count('nama_kegiatan');
        $sumartikel = Artikel::all()->count('judul_artikel');
        $sumsuratmasuk = SuratMasuk::all()->count('perihal_surat');
        $sumsuratkeluar = SuratKeluar::all()->count('nama_kegiatan');
        $sumpemasukan = Pemasukan::all()->sum('jumlah_pemasukan');
        $sumpengeluaran = Pengeluaran::all()->sum('jumlah_pengeluaran');
        $sumbarang = InventarisBarang::all()->count('nama_barang');
        return view('admin/admin')
        ->with(compact('sumanggotainti'))
        ->with(compact('sumanggotaaktif'))
        ->with(compact('sumkegiatan'))
        ->with(compact('sumartikel'))
        ->with(compact('sumsuratmasuk'))
        ->with(compact('sumsuratkeluar'))
        ->with(compact('sumpemasukan'))
        ->with(compact('sumpengeluaran'))
        ->with(compact('sumbarang'))
        ->with(compact('sumpurna'));
    }

    public function dataadmin()
    {
    $user = User::all();
    return view('admin/dataadmin/dataadmin')
    ->with(compact('user'));    
    }

    public function dataadminhapus($id)
    {
        $user = User::where('id', $id)->first();
        $user->delete();
        return redirect('dataadmin')->with('msg', 'Data Telah Terhapus');
    }

    public function dataadmincari(Request $request)
    {
        $cari = $request->search;
        $user = User::where('name','LIKE','%'.$cari.'%')->paginate(5);
        return view('admin/dataadmin/dataadmin', ['user' => $user]);
    }
}