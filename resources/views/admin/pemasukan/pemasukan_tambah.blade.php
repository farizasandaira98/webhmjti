<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Tambah Data Pemasukan</title>
</head>
<body>
    <div class="container">
        <div class="card mt-5">
            <div class="card-header text-center">
                Data Pemasukan HMJ TI - <strong>TAMBAH DATA</strong>
            </div>
            <div class="card-body">
                <a href="/admin/pemasukan" class="btn btn-danger">Kembali</a>
                <br/>
                <br/>

                <form method="post" action="/admin/pemasukan/store" enctype="multipart/form-data">

                    {{ csrf_field() }}
                    <div class="form-group">
                        <label>Nomor Nota</label>
                        <input type="text" name="nomor_nota" class="form-control" placeholder="Nomor Nota ..">

                        @if($errors->has('nomor_nota'))
                        <div class="text-danger">
                            {{ $errors->first('nomor_nota')}}
                        </div>
                        @endif

                    </div>

                    <div class="form-group">
                        <label>Jumlah Pemasukan</label>
                        <input type="text" name="jumlah_pemasukan" class="form-control" placeholder="Jumlah Pemasukan ..">

                        @if($errors->has('jumlah_pemasukan'))
                        <div class="text-danger">
                            {{ $errors->first('jumlah_pemasukan')}}
                        </div>
                        @endif

                    </div>

                    <div class="form-group">
                        <label>Tanggal Pemasukan</label>
                        <input type="date" name="tanggal_pemasukan" class="form-control" placeholder="Tanggal Pemasukan ..">

                        @if($errors->has('tanggal_pemasukan'))
                        <div class="text-danger">
                        {{ $errors->first('tanggal_pemasukan')}}
                        </div>
                        @endif

                    </div>

                    <div class="form-group">
                        <label>Sumber Dana</label>
                        <input type="text" name="sumber_dana" class="form-control" placeholder="Sumber Dana ..">

                        @if($errors->has('sumber_dana'))
                        <div class="text-danger">
                            {{ $errors->first('sumber_dana')}}
                        </div>
                        @endif

                    </div>

                    <label>Input Gambar Nota</label>
                    <div class="input-group control-group">
                    <div class="custom-file">
                        <input type="file" class="form-control" name="nota" accept=".jpg,.png,.jpeg">
                        @if($errors->has('nota'))
                        <div class="text-danger">
                        {{ $errors->first('nota')}}
                        </div>
                        @endif
                    </div>
                    </div>
                    </br>

                    <div class="form-group">
                        <label>Periode</label>
                        <h6 style="color:red;">Contoh : 2020-2021, dilarang menggunakan tanda "/"</h6>
                        <input type="text" name="periode" class="form-control" placeholder="Periode ..">

                        @if($errors->has('periode'))
                        <div class="text-danger">
                            {{ $errors->first('periode')}}
                        </div>
                        @endif

                    </div>
                    <br>
                    

            <div class="form-group">
                <input type="submit" class="btn btn-danger" value="Simpan">
            </div>

        </form>

    </div>
</div>
</div>
</body>
</html>