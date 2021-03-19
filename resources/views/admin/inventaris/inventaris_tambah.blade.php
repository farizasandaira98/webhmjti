<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
    <title>Tambah Data Inventaris</title>
</head>
<body>
    <div class="container">
        <div class="card mt-5">
            <div class="card-header text-center">
                Data inventaris HMJ TI - <strong>TAMBAH DATA</strong>
            </div>
            <div class="card-body">
                <a href="/admin/inventaris" class="btn btn-danger">Kembali</a>
                <br/>
                <br/>

                <form method="post" action="/admin/inventaris/store" enctype="multipart/form-data">

                    {{ csrf_field() }}
                    <div class="form-group">
                        <label>Nama Barang</label>
                        <input type="text" name="nama_barang" class="form-control" placeholder="Nama Barang ..">

                        @if($errors->has('nama_barang'))
                        <div class="text-danger">
                            {{ $errors->first('nama_barang')}}
                        </div>
                        @endif

                    </div>

                    <div class="form-group">
                        <label>Satuan</label>
                        <input type="text" name="satuan" class="form-control" placeholder="Satuan Barang ..">

                        @if($errors->has('satuan'))
                        <div class="text-danger">
                            {{ $errors->first('satuan')}}
                        </div>
                        @endif

                    </div>

                    <div class="form-group">
                        <label>Jumlah</label>
                        <input type="text" name="jumlah" class="form-control" placeholder="Jumlah Barang ..">

                        @if($errors->has('jumlah'))
                        <div class="text-danger">
                            {{ $errors->first('jumlah')}}
                        </div>
                        @endif

                    </div>

                    <div class="form-group">
                        <label>Kondisi Barang</label>
                        <input type="text" name="kondisi" class="form-control" placeholder="Kondisi Barang ..">

                        @if($errors->has('kondisi'))
                        <div class="text-danger">
                            {{ $errors->first('kondisi')}}
                        </div>
                        @endif

                    </div>
                    
                    <div class="form-group">
                        <label>Sumber Barang</label>
                        <input type="text" name="sumber_barang" class="form-control" placeholder="Sumber Barang ..">

                        @if($errors->has('sumber_barang'))
                        <div class="text-danger">
                            {{ $errors->first('sumber_barang')}}
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