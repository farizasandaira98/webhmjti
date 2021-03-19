<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
    <title>Edit Data Surat Keluar</title>
</head>
<body>
    <div class="container">
        <div class="card mt-5">
            <div class="card-header text-center">
                Data Surat Keluar HMJ TI - <strong>EDIT DATA</strong>
            </div>
            <div class="card-body">
                <a href="/admin/suratkeluar" class="btn btn-danger">Kembali</a>
                <br/>
                <br/>

                <form method="post" action="/admin/suratkeluar/update/{{$suratkeluar->id}}" enctype="multipart/form-data">

                {{ csrf_field() }}
                    <div class="form-group">
                        <label>Nomor Surat</label>
                        <input type="text" name="no_surat" class="form-control" placeholder="Nomor Surat .."
                        value="{{$suratkeluar->no_surat}}">

                        @if($errors->has('no_surat'))
                        <div class="text-danger">
                            {{ $errors->first('no_surat')}}
                        </div>
                        @endif

                    </div>

                    <div class="form-group">
                        <label>Nama Kegiatan</label>
                        <input type="text" name="nama_kegiatan" class="form-control" placeholder="Nama Kegiatan .."
                        value="{{$suratkeluar->nama_kegiatan}}">

                        @if($errors->has('nama_kegiatan'))
                        <div class="text-danger">
                            {{ $errors->first('nama_kegiatan')}}
                        </div>
                        @endif

                    </div>

                    <div class="form-group">
                        <label>Perihal</label>
                        <input type="text" name="hal" class="form-control" placeholder="Perihal Surat .."
                        value="{{$suratkeluar->hal}}">

                        @if($errors->has('hal'))
                        <div class="text-danger">
                            {{ $errors->first('hal')}}
                        </div>
                        @endif

                    </div>

                    <div class="form-group">
                        <label>Tanggal Surat Keluar</label>
                        <input type="date" name="tanggal_surat_keluar" class="form-control"
                        value="{{$suratkeluar->tanggal_surat_keluar}}">

                        @if($errors->has('tanggal_sura_keluart'))
                        <div class="text-danger">
                            {{ $errors->first('tanggal_surat_keluar')}}
                        </div>
                        @endif

                    </div>

                    <div class="form-group">
                        <label>Tujuan</label>
                        <input type="text" name="tujuan" class="form-control" placeholder="Tujuan Surat .."
                        value="{{$suratkeluar->tujuan}}">

                        @if($errors->has('tujuan'))
                        <div class="text-danger">
                            {{ $errors->first('tujuan')}}
                        </div>
                        @endif

                    </div>
                    
            <div class="form-group">
                <input type="submit" class="btn btn-danger" value="Simpan">
            </div>

        </form>

    </div>
</div>
</div>
</body>
</html>