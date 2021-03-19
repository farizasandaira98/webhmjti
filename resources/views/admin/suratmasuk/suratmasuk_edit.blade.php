<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
    <title>Edit Data Surat Masuk</title>
</head>
<body>
    <div class="container">
        <div class="card mt-5">
            <div class="card-header text-center">
                Data Surat Masuk HMJ TI - <strong>EDIT DATA</strong>
            </div>
            <div class="card-body">
                <a href="/admin/suratmasuk" class="btn btn-danger">Kembali</a>
                <br/>
                <br/>

                <form method="post" action="/admin/suratmasuk/update/{{$suratmasuk->id}}" enctype="multipart/form-data">

                    {{ csrf_field() }}
                    <div class="form-group">
                        <label>Nomor Surat</label>
                        <input type="text" name="no_surat" class="form-control" placeholder="Nomor Surat .."
                        value="{{$suratmasuk->no_surat}}">

                        @if($errors->has('no_surat'))
                        <div class="text-danger">
                            {{ $errors->first('no_surat')}}
                        </div>
                        @endif

                    </div>

                    <div class="form-group">
                        <label>Perihal</label>
                        <input type="text" name="perihal_surat" class="form-control" placeholder="Perihal Surat .."
                        value="{{$suratmasuk->perihal_surat}}">

                        @if($errors->has('perihal_surat'))
                        <div class="text-danger">
                            {{ $errors->first('perihal_surat')}}
                        </div>
                        @endif

                    </div>

                    <div class="form-group">
                        <label>Asal Surat</label>
                        <input type="text" name="asal_surat" class="form-control" placeholder="Asal Surat .."
                        value="{{$suratmasuk->asal_surat}}">

                        @if($errors->has('asal_surat'))
                        <div class="text-danger">
                            {{ $errors->first('asal_surat')}}
                        </div>
                        @endif

                    </div>

                    <div class="form-group">
                        <label>Tanggal Surat</label>
                        <input type="date" name="tanggal_surat" class="form-control"
                        value="{{$suratmasuk->tanggal_surat}}">

                        @if($errors->has('tanggal_surat'))
                        <div class="text-danger">
                            {{ $errors->first('tanggal_surat')}}
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