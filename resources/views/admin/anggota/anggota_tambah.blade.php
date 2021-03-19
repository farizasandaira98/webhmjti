<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
    <title>Tambah Data Anggota</title>
</head>
<body>
    <div class="container">
        <div class="card mt-5">
            <div class="card-header text-center">
                Data Anggota HMJ TI - <strong>TAMBAH DATA</strong>
            </div>
            <div class="card-body">
                <a href="/admin/anggota" class="btn btn-danger">Kembali</a>
                <br/>
                <br/>

                <form method="post" action="/admin/anggota/store" enctype="multipart/form-data">

                    {{ csrf_field() }}
                    <div class="form-group">
                        <label>NPK</label>
                        <input type="text" name="npk" class="form-control" placeholder="Nomor NPK ..">

                        @if($errors->has('npk'))
                        <div class="text-danger">
                            {{ $errors->first('npk')}}
                        </div>
                        @endif

                    </div>

                    <div class="form-group">
                        <label>NIM</label>
                        <input type="text" name="nim" class="form-control" placeholder="Nomor Induk Mahasiswa ..">

                        @if($errors->has('nim'))
                        <div class="text-danger">
                            {{ $errors->first('nim')}}
                        </div>
                        @endif

                    </div>

                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" name="nama" class="form-control" placeholder="Nama ..">

                        @if($errors->has('nama'))
                        <div class="text-danger">
                            {{ $errors->first('nama')}}
                        </div>
                        @endif

                    </div>

                    <div class="form-group">
                        <label>Nama Lapangan</label>
                        <input type="text" name="nama_lapangan" class="form-control" placeholder="Nama Lapangan ..">

                        @if($errors->has('nama_lapangan'))
                        <div class="text-danger">
                            {{ $errors->first('nama_lapangan')}}
                        </div>
                        @endif

                    </div>
                    
                    <div class="form-group">
                        <label>Tempat Lahir</label>
                        <input type="text" name="tempat_lahir" class="form-control" placeholder="Tempat Lahir ..">

                        @if($errors->has('tempat_lahir'))
                        <div class="text-danger">
                            {{ $errors->first('tempat_lahir')}}
                        </div>
                        @endif

                    </div>

                    <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input type="date" name="tanggal_lahir" class="form-control">

                        @if($errors->has('tanggal_lahir'))
                        <div class="text-danger">
                            {{ $errors->first('tanggal_lahir')}}
                        </div>
                        @endif

                    </div>

                    <div class="form-group">
                        <label>Alamat Domisili</label>
                        <input type="text" name="alamat_domisili" class="form-control" placeholder="Alamat Domisili ..">

                        @if($errors->has('alamat_domisili'))
                        <div class="text-danger">
                            {{ $errors->first('alamat_domisili')}}
                        </div>
                        @endif

                    </div>

                    <div class="form-group">
                        <label>Alamat Tinggal</label>
                        <input type="text" name="alamat_tinggal" class="form-control" placeholder="Alamat Tinggal ..">

                        @if($errors->has('alamat_tinggal'))
                        <div class="text-danger">
                            {{ $errors->first('alamat_tinggal')}}
                        </div>
                        @endif

                    </div>

                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Email ..">

                    @if($errors->has('email'))
                    <div class="text-danger">
                        {{ $errors->first('email')}}
                    </div>
                    @endif

                </div>

                <div class="form-group">
                    <label>Nomor HP</label>
                    <input type="tel" name="nomor_hp" class="form-control" placeholder="Nomor Hp ..">

                    @if($errors->has('nomor_hp'))
                    <div class="text-danger">
                        {{ $errors->first('nomor_hp')}}
                    </div>
                    @endif

                </div>

                <label>Input Foto Anggota</label>
                <div class="input-group control-group">
                    <div class="custom-file">
                        <input type="file" class="form-control" name="foto" accept=".jpg,.png,.jpeg">
                        @if($errors->has('foto'))
                        <div class="text-danger">
                        {{ $errors->first('foto')}}
                        </div>
                        @endif
                    </div>
                    </div>
                    </br>

                    <div class="form-group">
                        <label>Status Anggota</label>
                        <select class="form-control" id="id_status" 
                        name="id_status">
                        @foreach($stat as $stat)
                        <option value="{{$stat->id}}">{{$stat->status_anggota}}</option>
                        @endforeach
                    </select>
                    @if($errors->has('status_anggota'))
                    <div class="text-danger">
                        {{ $errors->first('status_anggota')}}
                    </div>
                    @endif

                </div>

                <div class="form-group">
                    <label>Status Keaktifan</label>

                    <select class="form-control" id="status_keaktifan" name="status_keaktifan">


                    <option value="aktif">Aktif</option>


                    <option value="nonaktif">Non Aktif</option>


                </select>

                @if($errors->has('status_keaktifan'))
                <div class="text-danger">
                    {{ $errors->first('status_keaktifan')}}
                </div>
                @endif

            </div>
            
            </br>
            <div class="form-group">
                <input type="submit" class="btn btn-danger" value="Simpan">
            </div>

        </form>

    </div>
</div>
</div>
</body>
</html>