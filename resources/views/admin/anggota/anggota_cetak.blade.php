<html>
<head>
	<title>Cetak Data Anggota HMJ TI</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 8pt;
		}
	</style>

	<table width="100%">
    <tr>
    <td width="25" align="center"><img src="cetak/logoakakom.png" width="250%"></td>
    <td width="50" align="center"><h5>HIMPUNAN MAHASISWA JURUSAN TEKNIK INFORMATIKA</h5><br><h6>STMIK Akakom Yogyakarta</h6></td>
    <td width="25" align="center"><img src="cetak/logohmjti.png" width="250%"></td>
    </tr>
    </table>
    <hr>
    <h6 align="center">Data Anggota</h6>
	<table class='table table-bordered'>
		<thead>
                <tr style="text-align: center;">
                      <th>No</th>
                      <th>Foto</th>
                      <th>Detail Diri</th>
                    </tr>
              </thead>
              <tbody>
              @foreach($anggota as $ang)
                    <tr>
                    <td style="width:5%;">{{ $loop->iteration }}</td>
                    <td style="width:15%;"><img src="foto_anggota/{{$ang->foto}}" style='width:140px; height:160px;'></td>
                    <td>
                    NPK : {{ $ang->npk }}<br>
                    NIM : {{ $ang->nim }}<br>
                    Nama : {{ $ang->nama }}<br>
                    Nama Lapangan : {{ $ang->nama_lapangan }}<br>
                    TTL :  {{ $ang->tempat_lahir }},{{ $ang->tanggal_lahir }}<br>
                    Alamat Domisili : {{ $ang->alamat_domisili }}<br>
                    Alamat Tinggal : {{ $ang->alamat_tinggal }}<br>
                    Email : {{ $ang->email }}<br>
                    Nomor HP : {{ $ang->nomor_hp }}<br>
                    <?php
                    $stat = $ang->id_status;
                    if ($stat == '1') {
                      $status = "Purna Anggota";
                    }elseif ($stat == '2'){
                      $status = "Anggota Inti";
                    }
                    echo "Status Keanggotaan : ".$status." <br>"
                    ?>
                    Status Keaktifan : {{ $ang->status_keaktifan }}<br>
                    </td>
                    </tr>
                    @endforeach
              </tbody>
	</table>
</body>
</html>