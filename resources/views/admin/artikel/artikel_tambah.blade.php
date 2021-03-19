<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Tambah Data Artikel</title>
</head>
<body>
    <div class="container">
        <div class="card mt-5">
            <div class="card-header text-center">
                Data Artikel HMJ TI - <strong>TAMBAH DATA</strong>
            </div>
            <div class="card-body">
                <a href="/admin/artikel" class="btn btn-danger">Kembali</a>
                <br/>
                <br/>

                <form method="post" action="/admin/artikel/store" enctype="multipart/form-data">

                    {{ csrf_field() }}
                    <div class="form-group">
                        <label>Judul Artikel</label>
                        <input type="text" name="judul_artikel" class="form-control" placeholder="Judul Artikel ..">

                        @if($errors->has('judul_artikel'))
                        <div class="text-danger">
                            {{ $errors->first('judul_artikel')}}
                        </div>
                        @endif

                    </div>

                    <div class="form-group">
                        <label>Deskripsi</label>
                        <textarea name="deskripsi" class="form-control" placeholder="Deskripsi .."></textarea>

                        @if($errors->has('deskripsi'))
                        <div class="text-danger">
                        {{ $errors->first('deskripsi')}}
                        </div>
                        @endif

                    </div>

                    <div class="form-group">
                        <label>Sumber</label>
                        <input type="text" name="sumber" class="form-control" placeholder="Sumber ..">

                        @if($errors->has('sumber'))
                        <div class="text-danger">
                        {{ $errors->first('sumber')}}
                        </div>
                        @endif

                    </div>

                    <div class="form-group">
                        <label>Jenis Artikel</label>
                        <select class="form-control" id="jenis_artikel" 
                        name="jenis_artikel">
                        
                        <option value="berita">Berita</option>
                        <option value="tutorial dan info">Tutorial & Informasi</option>
                       
                    </select>
                    @if($errors->has('jenis_artikel'))
                    <div class="text-danger">
                        {{ $errors->first('jenis_artikel')}}
                    </div>
                    @endif

                    </div>
                    </br>

                    <label>Input Gambar Tambahan</label>
                    <div class="input-group control-group">
                    <div class="custom-file">
                        <input type="file" class="form-control" name="foto_tambahan" accept=".jpg,.png,.jpeg">
                        @if($errors->has('foto_tambahan'))
                        <div class="text-danger">
                        {{ $errors->first('foto_tambahan')}}
                        </div>
                        @endif
                    </div>
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