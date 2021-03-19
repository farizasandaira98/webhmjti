<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
        $(".btn-success").click(function(){ 
            var html = $(".clone").html();
            $(".increment").after(html);
        });
        $("body").on("click",".btn-danger",function(){ 
            $(this).parents(".control-group").remove();
        });
        });
    </script>
    <title>Edit Data Kegiatan</title>
</head>
<body>
    <div class="container">
        <div class="card mt-5">
            <div class="card-header text-center">
                Data Kegiatan HMJ TI - <strong>EDIT DATA</strong>
            </div>
            <div class="card-body">
                <a href="/admin/kegiatan" class="btn btn-primary">Kembali</a>
                <br/>
                <br/>

                <form method="post" action="/admin/kegiatan/update/{{$kegiatan->id}}" enctype="multipart/form-data">

                    {{ csrf_field() }}
                    <div class="form-group">
                        <label>Nama Kegiatan</label>
                        <input type="text" name="nama_kegiatan" class="form-control" placeholder="Nama Kegiatan .."
                        value="{{$kegiatan->nama_kegiatan}}">

                        @if($errors->has('nama_kegiatan'))
                        <div class="text-danger">
                            {{ $errors->first('nama_kegiatan')}}
                        </div>
                        @endif

                    </div>

                    <div class="form-group">
                        <label>Deskripsi</label>
                        <textarea name="deskripsi" class="form-control" placeholder="Deskripsi ..">{{$kegiatan->deskripsi}}</textarea>
                        @if($errors->has('deskripsi'))
                        <div class="text-danger">
                            {{ $errors->first('deskripsi')}}
                        </div>
                        @endif
                    </div>


                    <div class="form-group">
                         <label>Tanggal Kegiatan</label>
                          <input type ="date" placeholder="Tanggal Kegiatan" type="text" class="form-control datepicker" name="tanggal_kegiatan" value="{{$kegiatan->tanggal_kegiatan}}">

                        @if($errors->has('tanggal_kegiatan'))
                            <div class="text-danger">
                            {{ $errors->first('tanggal_kegiatan')}}
                        </div>
                        @endif

                    </div>

                    <div class="form-group">
                        <label>Tempat Kegiatan</label>
                        <input type="text" name="tempat_kegiatan" class="form-control" placeholder="Tempat Kegiatan .."
                        value="{{$kegiatan->tempat_kegiatan}}">

                        @if($errors->has('tempat_kegiatan'))
                        <div class="text-danger">
                            {{ $errors->first('tempat_kegiatan')}}
                        </div>
                        @endif

                    </div>

                    <label>Input Gambar Kegiatan</label>
                    <div class="input-group control-group increment" >
                        <input type="file"  accept=".jpg,.png,.jpeg" name="foto_kegiatan[]" class="form-control">
                        <div class="input-group-btn"> 
                        <button class="btn btn-success" type="button"><i class="glyphicon glyphicon-plus"></i>Add</button>
                        </div>
                    </div>
                    <div class="clone hide">
                        <div class="control-group input-group" style="margin-top:10px">
                        <input type="file" accept=".jpg,.png,.jpeg" name="foto_kegiatan[]" class="form-control">
                        <div class="input-group-btn"> 
                            <button class="btn btn-danger" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
                        </div>
                        </div>
                    </div>
                    <br>
                    <div class="form-group">
                        <label>Divisi Pelaksana</label>
                        <select class="form-control" id="id_divisi" 
                        name="id_divisi">
                        @foreach($stat as $stat)
                        <option value="{{$stat->id}}">{{$stat->nama_divisi}}</option>
                        @endforeach
                    </select>
                    @if($errors->has('nama_divisi'))
                    <div class="text-danger">
                        {{ $errors->first('nama_divisi')}}
                    </div>
                    @endif

                </div>
            </br>

            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Simpan">
            </div>

        </form>

    </div>
</div>
</div>
</body>
</html>