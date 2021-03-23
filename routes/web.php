<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'IndexController@index');

Route::get('/profil', function () {
    return view('profil');
});

Route::get('/sejarah', function () {
    return view('sejarah');
});

Route::get('/visimisi', function () {
    return view('visimisi');
});

Route::get('/internal', function () {
    return view('internal');
});

Route::get('/networking', function () {
    return view('networking');
});

Route::get('/sdd', function () {
    return view('sdd');
});

Route::get('/artikel', function () {
    return view('artikel');
});
Route::get('/artikel/readmore', function () {
    return view('readmore');
});


Route::get('/kontak', function () {
    return view('kontak');
});

Route::get('/galeri', function () {
    return view('galeri');
});

Route::get('/galeri/moregaleri', function () {
    return view('moregaleri');
});

//Route Login
Route::get('login', 'AuthController@showFormLogin')->name('login');
Route::post('login', 'AuthController@login');
Route::get('register', 'AuthController@showFormRegister')->name('register');
Route::post('register', 'AuthController@register');
 
Route::group(['middleware' => 'auth'], function () {
    Route::get('admin', 'AdminController@index')->name('admin');
    
        //Route Anggota Di Admin
        Route::get('/admin/anggota', 'AdminAnggotaController@index');
        Route::get('/admin/anggota/tambah', 'AdminAnggotaController@tambah');
        Route::post('/admin/anggota/store', 'AdminAnggotaController@store');
        Route::get('/admin/anggota/edit/{id}', 'AdminAnggotaController@edit');
        Route::post('/admin/anggota/update/{id}', 'AdminAnggotaController@update');
        Route::get('/admin/anggota/hapus/{id}', 'AdminAnggotaController@destroy');
        Route::get('/admin/anggota/cari', 'AdminAnggotaController@search');
        Route::get('/admin/anggota/cetak', 'AdminAnggotaController@cetak_pdf');

        //Route Kegiatan Di Admin
        Route::get('/admin/kegiatan', 'AdminKegiatanController@index');
        Route::get('/admin/kegiatan/tambah', 'AdminKegiatanController@tambah');
        Route::post('/admin/kegiatan/store', 'AdminKegiatanController@store');
        Route::get('/admin/kegiatan/edit/{id}', 'AdminKegiatanController@edit');
        Route::post('/admin/kegiatan/update/{id}', 'AdminKegiatanController@update');
        Route::get('/admin/kegiatan/hapus/{id}', 'AdminKegiatanController@destroy');
        Route::get('/admin/kegiatan/cari', 'AdminKegiatanController@search');

        //Route Artikel Di Admin
        Route::get('/admin/artikel', 'AdminArtikelController@index');
        Route::get('/admin/artikel/tambah', 'AdminArtikelController@tambah');
        Route::post('/admin/artikel/store', 'AdminArtikelController@store');
        Route::get('/admin/artikel/edit/{id}', 'AdminArtikelController@edit');
        Route::post('/admin/artikel/update/{id}', 'AdminArtikelController@update');
        Route::get('/admin/artikel/hapus/{id}', 'AdminArtikelController@destroy');
        Route::get('/admin/artikel/cari', 'AdminArtikelController@search');

        //Route Inventaris
        Route::get('/admin/inventaris', 'AdminInventarisBarangController@index');
        Route::get('/admin/inventaris/tambah', 'AdminInventarisBarangController@tambah');
        Route::post('/admin/inventaris/store', 'AdminInventarisBarangController@store');
        Route::get('/admin/inventaris/edit/{id}', 'AdminInventarisBarangController@edit');
        Route::post('/admin/inventaris/update/{id}', 'AdminInventarisBarangController@update');
        Route::get('/admin/inventaris/hapus/{id}', 'AdminInventarisBarangController@destroy');
        Route::get('/admin/inventaris/cari', 'AdminInventarisBarangController@search');
        Route::get('/admin/inventaris/cetak', 'AdminInventarisBarangController@cetak_pdf');

        //Route Surat Masuk
        Route::get('/admin/suratmasuk', 'AdminSuratMasukController@index');
        Route::get('/admin/suratmasuk/tambah', 'AdminSuratMasukController@tambah');
        Route::post('/admin/suratmasuk/store', 'AdminSuratMasukController@store');
        Route::get('/admin/suratmasuk/edit/{id}', 'AdminSuratMasukController@edit');
        Route::post('/admin/suratmasuk/update/{id}', 'AdminSuratMasukController@update');
        Route::get('/admin/suratmasuk/hapus/{id}', 'AdminSuratMasukController@destroy');
        Route::get('/admin/suratmasuk/cari', 'AdminSuratMasukController@search');
        Route::get('/admin/suratmasuk/cetak', 'AdminSuratMasukController@cetak_pdf');

        //Route Surat Keluar
        Route::get('/admin/suratkeluar', 'AdminSuratKeluarController@index');
        Route::get('/admin/suratkeluar/tambah', 'AdminSuratKeluarController@tambah');
        Route::post('/admin/suratkeluar/store', 'AdminSuratKeluarController@store');
        Route::get('/admin/suratkeluar/edit/{id}', 'AdminSuratKeluarController@edit');
        Route::post('/admin/suratkeluar/update/{id}', 'AdminSuratKeluarController@update');
        Route::get('/admin/suratkeluar/hapus/{id}', 'AdminSuratKeluarController@destroy');
        Route::get('/admin/suratkeluar/cari', 'AdminSuratKeluarController@search');
        Route::get('/admin/suratkeluar/cetak', 'AdminSuratKeluarController@cetak_pdf');

        //Route Pemasukan
        Route::get('/admin/pemasukan', 'AdminPemasukanController@index');
        Route::get('/admin/pemasukan/tambah', 'AdminPemasukanController@tambah');
        Route::post('/admin/pemasukan/store', 'AdminPemasukanController@store');
        Route::get('/admin/pemasukan/edit/{id}', 'AdminPemasukanController@edit');
        Route::post('/admin/pemasukan/update/{id}', 'AdminPemasukanController@update');
        Route::get('/admin/pemasukan/hapus/{id}', 'AdminPemasukanController@destroy');
        Route::get('/admin/pemasukan/cari', 'AdminPemasukanController@search');
        Route::get('/admin/pemasukan/export_excel', 'AdminPemasukanController@export_excel');

        //Route Pengeluaran
        Route::get('/admin/pengeluaran', 'AdminPengeluaranController@index');
        Route::get('/admin/pengeluaran/tambah', 'AdminPengeluaranController@tambah');
        Route::post('/admin/pengeluaran/store', 'AdminPengeluaranController@store');
        Route::get('/admin/pengeluaran/edit/{id}', 'AdminPengeluaranController@edit');
        Route::post('/admin/pengeluaran/update/{id}', 'AdminPengeluaranController@update');
        Route::get('/admin/pengeluaran/hapus/{id}', 'AdminPengeluaranController@destroy');
        Route::get('/admin/pengeluaran/cari', 'AdminPengeluaranController@search');
        Route::get('/admin/pengeluaran/export_excel', 'AdminPengeluaranController@export_excel');

        //Route Data Admin
        Route::get('/admin/dataadmin', 'AdminController@dataadmin');
        Route::get('/admin/dataadmin/hapus/{id}', 'AdminController@dataadminhapus');
        Route::get('/admin/dataadmincari', 'AdminController@dataadmincari');

        //Route Daftar Admin
        Route::get('/admin/dataadmin/register', 'AuthController@showFormRegister')->name('register');
        Route::post('/admin/dataadmin/register', 'AuthController@register');

    Route::get('logout', 'AuthController@logout')->name('logout');
});


Route::get('/adm', function () {
    return view('admin/adminite');
});


