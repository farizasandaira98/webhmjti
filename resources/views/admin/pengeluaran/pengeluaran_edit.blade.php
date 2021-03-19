<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Edit Data Pengeluaran</title>
</head>
<body>
    <div class="container">
        <div class="card mt-5">
            <div class="card-header text-center">
                Data Pengeluaran HMJ TI - <strong>EDIT DATA</strong>
            </div>
            <div class="card-body">
                <a href="/admin/pemasukan" class="btn btn-danger">Kembali</a>
                <br/>
                <br/>

                <form method="post" action="/admin/pengeluaran/update/{{$pengeluaran->id}}" enctype="multipart/form-data">

                    {{ csrf_field() }}
                    <div class="form-group">
                        <label>Nomor Nota</label>
                        <input type="text" name="nomor_nota" class="form-control" placeholder="Nomor Nota .."
                        value="{{$pengeluaran->nomor_nota}}">

                        @if($errors->has('nomor_nota'))
                        <div class="text-danger">
                            {{ $errors->first('nomor_nota')}}
                        </div>
                        @endif

                    </div>

                    <div class="form-group">
                        <label>Jumlah Pengeluaran</label>
                        <input type="text" name="jumlah_pengeluaran" class="form-control" placeholder="Jumlah Pengeluaran .."
                        value="{{$pengeluaran->jumlah_pengeluaran}}">

                        @if($errors->has('jumlah_pengeluaran'))
                        <div class="text-danger">
                            {{ $errors->first('jumlah_pengeluaran')}}
                        </div>
                        @endif

                    </div>

                    <div class="form-group">
                        <label>Tanggal Pengeluaran</label>
                        <input type="date" name="tanggal_pengeluaran" class="form-control" placeholder="Tanggal Pengeluaran .."
                        value="{{$pengeluaran->tanggal_pengeluaran}}">

                        @if($errors->has('tanggal_pengeluaran'))
                        <div class="text-danger">
                        {{ $errors->first('tanggal_pengeluaran')}}
                        </div>
                        @endif

                    </div>

                    <div class="form-group">
                        <label>Keperluan</label>
                        <input type="text" name="keperluan" class="form-control" placeholder="Keperluan .."
                        value="{{$pengeluaran->keperluan}}">

                        @if($errors->has('keperluan'))
                        <div class="text-danger">
                            {{ $errors->first('keperluan')}}
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
                        <input type="text" name="periode" class="form-control" placeholder="Periode .."
                        value="{{$pengeluaran->periode}}">

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